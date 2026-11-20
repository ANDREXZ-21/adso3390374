<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['name',
            'image',
            'kind',
            'weigth', 
            'age', 
            'bread',  
            'location',
            'description'])]



class Pet extends Model
{
    //
}
