<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['contract','user_id'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function references(){
        return $this->hasMany(Reference::class);
    }
}
