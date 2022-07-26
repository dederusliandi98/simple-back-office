<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderPermission extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'position',
    ];
    
    public function permission()
    {
        return $this->hasMany('\Spatie\Permission\Models\Permission');
    }
}
