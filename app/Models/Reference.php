<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    protected $fillable = ['reference','amount','description','user_id','status','id_openpay','currency'];
    const PENDIENTE = 1, PAGADO = 2 , CANCELADA = 3;

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function documents()
    {
        return $this->morphMany(Document::class, 'documentable');
    }

    public function document()
    {
        return $this->morphOne(Document::class, 'documentable');
    }
}
