<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table ="abouts";

    protected $fillable = [
        'id',
        'birthday',
        'website',
        'phone',
        'city',
        'age',
        'degree',
        'email',
        "freelance",
    ];
}
