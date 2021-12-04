<?php

use App\Models\Brand;
use App\Models\MainCategory;

define('PAGINATION_COUNT', 10);

function getFolder()
{

    return app()->getLocale() == 'ar' ? 'css-rtl' : 'css';
};


function ImageUpload($image , $path) // Taking input image as parameter
{
    $image_name = \rand();
    $ext = $image->getClientOriginalExtension(); // You can use also getClientOriginalName()
    $image_full_name = $image_name.'.'.$ext;
    $upload_path = 'assets/images/'.$path;    //Creating Sub directory in Public folder to put image
    $image->move($upload_path,$image_full_name);

    return $image_full_name; // Just return image
};





