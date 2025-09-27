<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expocuca DS Escape Room</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" bg-slate-900 text-white">
    <header>
        <ul>
            <li>
                <h1>Expocuca DS Escape Room</h1>
            </li>
            @if (Route::has('login'))
                <li>
                    <a href="">Adicionar competidor</a>
                </li>
            @endif
        </ul>
    </header>
</body>
</html>