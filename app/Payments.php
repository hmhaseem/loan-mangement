<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Payments extends Model
{
    public $table = 'payments';
    protected $dates = [
        'created_at',
        'updated_at',

    ];
    protected $fillable = [
        'id',
        'payment_amount',
        'loan_id',
        'remarks'
        

    ];

    
    // public function loan()
    // {
    //     return $this->hasMany(LoanApplication::class);
    // }

    public function loan()
    {
        return $this->belongsTo(LoanApplication::class, 'loan_id');
    }
   

  
}
