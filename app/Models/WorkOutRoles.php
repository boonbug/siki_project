<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkOutRoles extends Model
{
    use HasFactory;
    protected $table = 'work_out_roles';

    protected $fillable = [
        'role_name'
    ];
}
