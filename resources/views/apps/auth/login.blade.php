@extends('layouts.app')
@section('title', 'Connexion')
@section('content')
    <form class="flex flex-col gap-[12px]" action="{{ route('auth.login.store') }}" method="POST">
        <div class="flex flex-col gap-3">
            <h4 class="text-[16px] font-[600]">Bienvenue 👋🏻! </h4>
            <p class="text-[15px]">Veuillez vous connecter à votre compte et commencer l'aventure.</p>
            @csrf
            <div>
                <label class="text-[0.9rem]" for="">Email</label>
                <div class="mt-1">
                    <input type="email" name="email" id="email"
                        class="block w-full h-[40px] rounded-md border-0 pl-3 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 focus:outline-none focus:shadow-sm"
                        placeholder="Entrez votre email" />
                </div>
            </div>
            <div>
                <div class="flex justify-between items-center">
                    <label class="text-sm" for="password">Mot de Passe</label>
                    <a href="{{ route('auth.forgot.password') }}" class="text-[#003169] text-sm">
                        Mot de passe oublié ?
                    </a>
                </div>
                <div class="mt-1">
                    <input type="password" name="password" id="password-login"
                        class="block w-full h-[40px] rounded-md border-0 pl-3 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 focus:outline-none focus:shadow-sm"
                        placeholder="Entrez votre mot de passe" />
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer" id="toggle-login">
                        <img id="eye-login" src="{{ asset('assets/images/svg/eye.svg') }}" alt="Afficher mot de passe">
                        <img id="eye-off-login" class="none" src="{{ asset('assets/images/svg/eye-off.svg') }}"
                            alt="Masquer mot de passe">
                    </span>
                </div>
            </div>
        </div>
        <div class="flex mb-1 mt-1 gap-2 items-center">
            <input id="checkbox-1" type="checkbox" name="remember"
                class="w-4 h-4 text-[#003169] bg-gray-100 border-gray-300 rounded focus:ring-[#003169] focus:ring-2 focus:outline-none focus:shadow-sm">
            <label for="checkbox-1" class="text-[15px] text-gray-900">
                Se souvenir
            </label>
        </div>
        <button type="submit" class="btn text-[16px] font-[600]">Se connecter</button>
    </form>
    <p class="text-center text-[15px] mt-2 mb-3">Nouveau sur notre plateforme ? <a href="{{ url('auth-register') }}"
            class="text-[15px] text-[#003169] hover:underline font-[600]">Inscrivez-vous.</href=>
    </p>
    </div>
@endsection
