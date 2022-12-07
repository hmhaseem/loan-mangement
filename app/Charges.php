<?php

namespace App;

use App\Notifications\VerifyUserNotification;
use Carbon\Carbon;
use Hash;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Passport\HasApiTokens;
use \DateTimeInterface;
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
