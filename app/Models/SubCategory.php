<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model implements TranslatableContract
{
    use Translatable;



    protected $fillable = ['slug', 'online','picture'];


    public $translatedAttributes = ['name',];

    public function getActive(){
        return  $this -> online  == 0 ?  'offline '   : 'online' ;
     }

     public function mainCategore()
     {
        return $this->belongsTo(MainCategory::class);
     }


}
