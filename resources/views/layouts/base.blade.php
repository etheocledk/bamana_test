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
</head>

<body>
    
    @yield('content')

</body>

</html>
