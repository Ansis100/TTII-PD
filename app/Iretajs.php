<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iretajs extends Model
{
    protected $table = 'iretajs';

    protected $fillable = [
        'first_name', 'email',
    ];
}
