<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 * @method static create(array $attributes)
 */
class DdHouse extends Model
{
    use HasFactory;

    protected $guarded = [];
}
