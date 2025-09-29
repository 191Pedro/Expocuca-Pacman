<?php

use Illuminate\Support\Facades\Route;
use App\Models\Person;

Route::get('/scoreboard', function () {
    return Equipe::orderBy('pontuacao', 'desc')->get();
});