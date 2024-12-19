<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=['user_id','customer_name','customer_phone_number'];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function orders(){
        return $this->hasMany(Orders::class);
    }

}
