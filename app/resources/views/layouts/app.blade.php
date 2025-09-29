<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
    </head>
    <body class="bg-zinc-900 text-white">
        <script src="app.js" type="text/javascript"></script>
        @include('components.header')

        @yield('content', 'Nenhum conteúdo renderizado')
    </body>
</html>