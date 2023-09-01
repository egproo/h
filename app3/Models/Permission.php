<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spati\Permission\Models\Permission as ModelPermission
class Permission extends ModelPermission
{
    use HasFactory;
}
