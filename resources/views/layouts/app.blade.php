<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <meta name="description" content="BAMANA">
    <meta name="keywords" content="keywords, for, seo">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | BAMANA</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="w-full h-screen flex justify-center items-center bg-authColor">
        <div class="bg-white px-10 py-4 flex flex-col gap-3 w-[450px]"
            style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
            <div class="w-full flex justify-center">
                <h1>LOGO</h1>
            </div>
            @yield('content')
        </div>
    </div>
    @include('shared.alert')
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
