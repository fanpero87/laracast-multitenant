<?php

namespace App\Models;

use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Scopes\TenantScope;

class Phone extends Model
{
    use BelongsToTenant, HasFactory;
}
