<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    //
    protected $fillable =[
        'first_name',
        'middle_name',
        'last_name',
        'college_name',
        'dept',
        'email',
        'year',
        'choice',
        'mobile'


    ];

}
