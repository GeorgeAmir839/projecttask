<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected  $table ="student";


    protected $fillable=["name","phone","email","password",];
  
    protected $hidden =["created_at","updated_at"];
    
  
  


     
}
