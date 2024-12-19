<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetails extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['user_id',	'start_work_date',	'residence_number',	'phone_number',	'departments_id',	'barth_day'];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }



}
