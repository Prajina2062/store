<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable=['Category_id','Brand_id','amount','size','status','image'];
    use HasFactory;
}
