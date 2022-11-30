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

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ($value).'$',
           // set: fn ($value) => ($value),
            set: fn ($value) => htmlspecialchars($value),
        );
    }

    protected function timestamps(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Date('Y-M-D',$value),
           // set: fn ($value) => ($value),
            set: fn ($value) => ($value),
        );
    }




}
