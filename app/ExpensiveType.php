<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpensiveType extends Model
{
    public $table = 'expensive_type';
    protected $fillable = [
        'id',
        'type'
    ];
}
