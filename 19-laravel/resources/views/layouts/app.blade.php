<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.3/dist/sweetalert2.min.css" integrity="sha256-ctUSy30gwJ7KV8iVO3R0x/8wLZFvfYL1s6jHmu/JDD4=" crossorigin="anonymous">
</head>
<body class="min-h-[100dvh] flex flex-col justify-center items-center bg-[#091f30]">
    @yield('content')

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.3/dist/sweetalert2.all.min.js" integrity="sha256-YNP5JI5c8Zf2npOCyb/TJFxOxEE+bVDO4108ZsNngZ8=" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>