<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;





class Role extends Model    
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'name',
        'active'
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
