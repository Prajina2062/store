<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    protected $fillable=['name','amount'];
    use HasFactory;
     public function Client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
