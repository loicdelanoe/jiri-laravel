<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Laravel</title>
</head>
<body class="font-pops min-h-screen">
<a class="sr-only"
   href="#main-menu">Aller au menu principal</a>
<div class="flex flex-row-reverse gap-6 h-screen">
    <main class="flex flex-col gap-4 px-4 py-12 w-full">
        {{ $slot }}
    </main>
    <div class="px-4 py-10 bg-slate-700 w-96">
        <h1 class="text-3xl font-bold text-white inline-block py-2 px-4">{{ __("Jiris") }}</h1>
        <x-navigations.main/>
    </div>
</div>
</body>
</html>
