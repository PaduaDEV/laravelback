<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class api10 extends Model
{
    use HasFactory;
    protected $table = "api10";
    protected $fillable = ['nome','email','senha','curso','carga_horaria','valor'];
}
