@extends('layouts.base')
@section('title', 'Erreur 404')
@section('content')
    <div class="w-full h-screen flex justify-center items-center pb-10">
        <div class="text-center">
            <h1 class="text-[100px] font-[600] text-[#4d4d4d]">404<span class="italic text-[120px]">!</span></h1>
            <div>
                <p class="text-[1.3rem] font-[800] mt-[-40px]">Page non trouvée!</p>
                <p class="text-[1rem] font-[500] mt-2">Nous n'avons pas pu trouver la page que vous recherchez.</p>
                <div class="flex flex-col align-center">
                    <div class="mt-5">
                        <a href="{{ url('/') }}" class="btn text-center font-[600] hover:underline">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
