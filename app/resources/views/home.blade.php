@extends('layouts.app')

@section('content')
<main class="flex justify-center flex-col items-center">
    <h2 class="text-3xl font-bold text-center p-4">Placar</h2>
    <p class="bg-secundary-bg p-1 rounded-xl">O placar lista apenas o melhor integrante da equipe e a pontuação deste</p>
    <section class="overflow-hidden border-4 border-secundary rounded-xl w-full max-w-7xl m-4 text-xl">
        <table class="table-fixed w-full [&_td]:p-2 [&_td]:text-center">
            <thead class="bg-primary font-bold">
                <tr>
                    <td>Posição</td>
                    <td>Nome</td>
                    <td>Equipe</td>
                    <td>Pontuação</td>
                </tr>
            </thead>
            <tbody class="[&_tr]:odd:bg-secundary-bg [&_tr]:even:bg-primary-bg" id="table_body">
                <tr>
                    <td>1</td>
                    <td>Nome 1</td>
                    <td>Equipe 1</td>
                    <td>6000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nome 2</td>
                    <td>Equipe 2</td>
                    <td>5000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Nome 3</td>
                    <td>Equipe 3</td>
                    <td>4000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Nome 4</td>
                    <td>Equipe 4</td>
                    <td>3000</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Nome 5</td>
                    <td>Equipe 5</td>
                    <td>2000</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Nome 6</td>
                    <td>Equipe 6</td>
                    <td>1000</td>
                </tr>
            </tbody>
        </table>
    </section>
</main>
@endsection