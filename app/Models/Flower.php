<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Flower extends Model
{
    use HasFactory;

    
   // public $timestamps = false;

    protected function name():  Attribute
    {
        return Attribute::make(
        get: fn ($value) => strtoupper($value),
        set: fn ($value) => strtolower($value),
        );
    }

    protected function priceWithEuro(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->attributes['price']. '$',
          
        );
    }

    protected function timestamps(): Attribute
    {
        return Attribute::make(

            get: fn ($value) => date('Y-M-D',strtotime($value)),
        
        );
    }




}
