<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
    use HasFactory;
    protected $table ="fact";

    protected $fillable = [
        'id',
        'icone',
        'chiffre',
        'texte',
    ];
}
