<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Model 
{
    use HasFactory,Notifiable,Authenticatable;

    protected $table ="admins";
    protected $guarded=[];
    public $timestamps = true;
}
