@extends('layouts.base')
@section('title', 'Erreur 500')
@section('content')
    <div class="w-full h-screen flex justify-center items-center pb-5">
        <div class="text-center">
            <h1 class="text-[100px] font-[600] text-[#4d4d4d]">500<span class="italic text-[120px]">!</span></h1>
            <div>
                <p class="text-[1.5rem] font-[800]">Erreur interne du serveur !</p>
               <p class="text-[1.1rem] font-[500]">
                Nous nous excusons  et travaillons à résoudre le problème. <br> Veuillez réessayer ultérieurement.
               </p>
                <div class="flex flex-col align-center">
                    <div class="mt-5">
                        <a href="{{ url('/') }}" class="btn text-center font-[600] hover:underline">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection