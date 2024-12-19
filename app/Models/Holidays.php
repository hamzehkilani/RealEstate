<?php

namespace App\Models;

use App\Enums\HolidaysTypeEnum;
use App\Enums\StatesEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Holidays extends Model
{

    use HasFactory,SoftDeletes;
    protected $fillable=['descptions'	,'state_date'	,'user_id'	,'manger_id'];
    protected $casts = [
        'type' => HolidaysTypeEnum::class,
        'state'=>StatesEnum::class,
    ];

    public function userMarkiting(){
        return $this->belongsTo(User::class,'user_id');
    }


    public function userManger(){
        return $this->belongsTo(User::class,'manger_id');
    }

}
