<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const PRODUCTO_DISPONIBLE = 'disponible';
    const PRODUCTO_NO_DISPONIBLE = 'no disponible';

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id'
    ];


    public function seller()
    {
        return $this->belongsTo('App\Seller');
    }

    public function estaDisponible()
    {
        return $this->status = Product::PRODUCTO_DISPONIBLE;
    }

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    
}
