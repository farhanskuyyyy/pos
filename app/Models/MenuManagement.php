<?php

namespace App\Models;

use App\Models\RolePermission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuManagement extends Model
{
    use HasFactory;

    public function has_child(): HasMany
    {
        return $this->hasMany(self::class, 'parent', 'id')->orderBy('sort','asc');
    }

    public function role_permission(): HasOne
    {
        return $this->hasOne(RolePermission::class,'menu_id','id');
    }
}
