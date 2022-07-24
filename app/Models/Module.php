<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug'
    ];

    //*ROLES RELATIONSHIP
    public function roles()
    {
        return $this->hasMany(Role::class);
    }
    //*PERMISSION SECTION RELATIONSHIP
    public function permissionSection()
    {
        return $this->hasMany(Section::class);
    }


    //*ALL PERMISSION RELATED TO PERMISSION SECTION
    public function getAllPermissions()
    {
        return $this->hasManyThrough(Permission::class, Section::class);
    }
}
