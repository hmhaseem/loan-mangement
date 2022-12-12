<?php

namespace App;

use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use \DateTimeInterface;

class Payments extends Model
{
    use  MultiTenantModelTrait, Auditable;
    public $table = 'payments';
    protected $dates = [
        'created_at',
        'updated_at',

    ];
    protected $fillable = [
        'id',
        'payment_amount',
        'loan_id',
        'remarks',
        'created_by_id'


    ];


    // public function loan()
    // {
    //     return $this->hasMany(LoanApplication::class);
    // }

    public function loan()
    {
        return $this->belongsTo(LoanApplication::class, 'loan_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
