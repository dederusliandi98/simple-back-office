<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;

    protected $dates = ['created_at'];

    protected $fillable = [
        'id',
        'name',
        'city'
    ];
}
