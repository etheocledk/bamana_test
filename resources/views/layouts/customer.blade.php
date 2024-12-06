<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="BAMANA">
    <meta name="keywords" content="keywords, for, seo">
    <meta name="author" content="UST">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | BAMANA</title>
    <link rel="stylesheet" href="{{ asset('assets/css/customer.css') }}">
    <link href="{{ asset('/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div id="content" style="display: none">
        @include('layouts.sections.navbars.navbar')
        @yield('content')

        @include('shared.alert')

        <hr>
        <div class="flex justify-center m-10">
            <p>© {{ date('Y') }} BAMANA. Tous droits réservés.</p>
        </div>
    </div>
    <div id="loader">
        @include('shared.loader')
    </div>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.getElementById('loader').style.display = 'none';
                document.getElementById('content').style.display = 'block';
            }, 1000);
        });
    </script>
</body>

</html>
