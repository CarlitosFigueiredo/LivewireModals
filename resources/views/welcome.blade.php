<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Modals</title>

        @vite('resources/css/app.css')
    </head>
    <body >
        <main class="flex justify-center items-center bg-slate-200 min-h-screen text-slate-800">
            <livewire:signup>
        </main>
    </body>
</html>
