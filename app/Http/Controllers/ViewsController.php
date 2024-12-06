<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function login()
    {
        return view('apps.auth.login');
    }

    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        $products = $query->orderBy('created_at')->paginate(4);
        
        return view('apps.pages.index', compact('products'));
    }

}
