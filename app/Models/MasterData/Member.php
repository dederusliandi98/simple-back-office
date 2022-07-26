<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['created_at'];

    protected $fillable = [
        'id',
        'group_id',
        'name',
        'address',
        'phone_number',
        'email',
        'profile_picture',
    ];

    public function group() 
    {
        return $this->belongsTo('App\Models\MasterData\Group');
    }
}
