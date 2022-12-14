<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;

class Accounts extends Model
{
    use  MultiTenantModelTrait, Auditable;
    public $table = 'accounts';
    protected $fillable = [
        'payment_amount',
        'created_by_id',
        'created_at',
        'status',
        'remarks',
        'updated_at'
    ];

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    public function statusBy()
    {
        return $this->belongsTo(Status::class, 'status');
    }
}
