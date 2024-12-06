<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginStore(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'L\'adresse e-mail est requise.',
                'email.email' => 'L\'adresse e-mail n\'est pas valide.',
                'password.required' => 'Le mot de passe est requis.'
            ]
        );

        if ($validator->fails()) {
            $firstErrorMessage = $validator->errors()->first();
            return redirect()->back()->with('error', $firstErrorMessage);
        }

        $credentials = $request->only('email', 'password');
        $remember = $request->filled('remember');

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email ou mot de passe incorrect.');
        }

        if ($user->is_supended) {
            return redirect()->back()->with('error', 'Votre compte a été suspendu. Veuillez-contacter l\'adminstrateur pour assistance.');
        }

        try {
            if (Auth::attempt($credentials, $remember)) {
                $request->session()->regenerate();
                redirect()->route('view.landing');
            } else {
                return redirect()->back()->with('error', 'Identifiants invalides.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la connexion.');
        }
    }
}
