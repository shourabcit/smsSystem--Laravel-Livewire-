<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class Section extends Model
{
    use HasFactory;


    protected $fillable = [
        'module_id',
        'name',
        'slug',
    ];
    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function allPermissions()
    {
        return $this->hasMany(Permission::class);
    }
}
