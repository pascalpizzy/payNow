<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaystackPayment extends Model
{
    use HasFactory;

    protected $primaryKey = 'unique_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'unique_id',
        'user_unique_id',
        'email',
        'first_name',
        'last_name',
        'amount',
        'status',
      
    ];
}
