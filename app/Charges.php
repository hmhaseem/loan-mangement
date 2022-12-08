<?php

namespace App;

 
use Illuminate\Database\Eloquent\Model;

class Charges extends Model
{
    public $table = 'charges';
    
    protected $fillable = [
        'insurance_charge',
        'document_charge',
        'created_at',
        'updated_at'
    ];
}
