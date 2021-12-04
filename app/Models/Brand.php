<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model implements TranslatableContract
{
    use Translatable;



    protected $fillable = ['slug', 'is_active','picture'];


    public $translatedAttributes = ['name',];


    public function getActive(){
        return  $this -> is_active  == 0 ?  'offline '   : 'online' ;
     }

     


}
