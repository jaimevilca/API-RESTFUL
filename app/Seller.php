<?php

namespace App;

class Seller extends User
{
    public function products()
    {
        return $this->hasMany('App\Product');
    }
    
}
