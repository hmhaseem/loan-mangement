<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;

class InterestType extends Model
{
    public $table = 'interest_type';
    protected $fillable = [
        'product_name',
        'interest_rate'

    ];
}
