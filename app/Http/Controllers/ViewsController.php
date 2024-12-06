<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function login()
    {
        return view('apps.auth.login');
    }

    public function index()
    {
        return view('apps.pages.index');
    }

}
