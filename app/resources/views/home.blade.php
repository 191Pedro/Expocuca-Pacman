@extends('layouts.app')

@section('content')
<main class="flex justify-center flex-col items-center">
    <h2 class="text-3xl font-bold text-center p-4">Placar</h2>
    <caption class="caption-top">A tabela lista apenas o melhor competidor da equipe e sua pontuação isolada</caption>
    <section class="overflow-hidden border-2 border-gray-300 rounded-2xl w-full max-w-5xl m-4 text-xl">
        <table class="table-auto w-full [&_td]:p-2">
            <thead class="bg-purple-800">
                <tr>
                    <td>Nome da Pessoa</td>
                    <td>Pontuação</td>
                </tr>
            </thead>
            <tbody class="[&_tr]:odd:bg-zinc-800 [&_tr]:even:bg-zinc-900" id="table_body">
                <tr>
                    <td>Matheus</td>
                    <td>3000</td>
                </tr>
                <tr>
                    <td>Pedro</td>
                    <td>2000</td>
                </tr>
                <tr>
                    <td>Murilo</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td>Matheus</td>
                    <td>3000</td>
                </tr>
                <tr>
                    <td>Pedro</td>
                    <td>2000</td>
                </tr>
                <tr>
                    <td>Murilo</td>
                    <td>1000</td>
                </tr>
            </tbody>
        </table>
    </section>
</main>
@endsection