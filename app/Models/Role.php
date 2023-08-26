<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spati\Permission\Models\Role as ModelRole
class Role extends ModelRole
{
    use HasFactory;
}