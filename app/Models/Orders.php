<?php

namespace App\Models;

use App\Enums\StatesEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['user_id',	'purchasing_user_id',	'customer_id',		'date_accept'	];
    protected $casts = [
        'state'=>StatesEnum::class,
    ];
    public function userMarkiting(){
        return $this->belongsTo(User::class,'user_id');
    }


    public function userPurchasing(){
        return $this->belongsTo(User::class,'purchasing_user_id');
    }
    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

}
