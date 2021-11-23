<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory,Translatable;
    protected $fillabl =[
        'slug',
        'picture',
        'active'
    ];
    protected $translatedAttributes = ['name'];
    
}
