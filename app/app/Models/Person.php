<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $table = 'pessoa';
    protected $fillable = ['nome', 'pontuacao'];
}