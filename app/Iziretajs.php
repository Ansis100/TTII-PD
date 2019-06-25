<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iziretajs extends Model
{
    protected $table = 'iziretajs';

    protected $fillable = [
        'first_name', 'email',
    ];
}
