<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memberregistration extends Model
{
    use HasFactory;
    protected $fillable =[
        'username','password','confirmpassword','email','contact'
    ];  
}
