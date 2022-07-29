<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlutterPayment extends Model
{
    protected $primaryKey = 'unique_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'unique_id',
        'name',
        'amount',
        'phone_number',
        'email',
      
    ];

    function user_object(){
        return $this->belongsTo(User::class, 'user_unique_id');
    }
}
