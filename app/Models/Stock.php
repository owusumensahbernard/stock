<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [

        'Name',
        'Quantity',
        'UnitPrice',
        'CostPrice',
    ];




    protected $casts = [

         'Quantity' => 'integer',
        'UnitPrice' => 'float',
         'CostPrice' => 'float'
    ];

public function setCostPriceAttribute()
{


 $this->attributes['Quantity'] * $this->attributes['UnitPrice'];

}

}
