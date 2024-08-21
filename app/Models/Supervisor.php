<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 */
class Supervisor extends Model
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
            'resign_at' => 'datetime',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ddHouse()
    {
        return $this->belongsTo(DdHouse::class);
    }

    public function manager()
    {
        return $this->belongsTo(Manager::class);
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
