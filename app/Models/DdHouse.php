<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 */
class DdHouse extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'disabled_at' => 'datetime',
        ];
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function manager()
    {
        return $this->hasMany(Manager::class);
    }

    public function supervisor()
    {
        return $this->hasMany(Supervisor::class);
    }

    public function rso()
    {
        return $this->hasMany(Rso::class);
    }

    public function retailer()
    {
        return $this->hasMany(Retailer::class);
    }
}
