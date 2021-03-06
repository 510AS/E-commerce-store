<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model implements TranslatableContract
{
    use Translatable;

    protected $table ='main_category';

    protected $fillable = ['slug', 'is_active','picture'];


    public $translatedAttributes = ['name',];


    public function getActive(){
        return  $this -> is_active  == 0 ?  'offline '   : 'online' ;
     }

     public function subCategory()
     {
         return $this->hasMany(SubCategory::class);
     }


}
