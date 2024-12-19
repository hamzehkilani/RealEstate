<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RolesWithUsers extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['user_id','roles_id'];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function role(){
        return $this->belongsTo(Roles::class,'roles_id');
    }

}
