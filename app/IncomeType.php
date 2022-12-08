<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;

class IncomeType extends Model
{
    public $table = 'income_type';
    protected $fillable = [
        'name',
    ];
}
