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
<body class="pb-4 font-pops">
<a class="sr-only"
   href="#main-menu">Aller au menu principal</a>
<div class="flex flex-col-reverse gap-6">
    <main class="flex flex-col gap-4 px-4">
        {{ $slot }}
    </main>
    <div class="p-4 bg-slate-700">
        <x-navigations.main/>
    </div>
</div>
</body>
</html>
