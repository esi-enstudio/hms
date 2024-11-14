<?php

namespace App\Models;

 use Database\Factories\UserFactory;
 use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Relations\HasMany;
 use Illuminate\Database\Eloquent\Relations\HasOne;
 use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @method static create(array $user)
 * @method static latest()
 * @method static when()
 */
class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'avatar',
        'phone',
        'name',
        'email',
        'password',
        'role',
        'status',
        'remarks',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relationship with Zm model
     *
     * @return HasOne
     */
    public function zm()
    {
        return $this->hasOne(Zm::class);
    }

    /**
     * Relationship with Md model
     *
     * @return HasOne
     */
    public function md(): HasOne
    {
        return $this->hasOne(Md::class);
    }

    /**
     * Relationship with Manager model
     *
     * @return HasOne
     */
    public function manager(): HasOne
    {
        return $this->hasOne(Manager::class);
    }

    /**
     * Relationship with Supervisor model
     *
     * @return HasOne
     */
    public function supervisor(): HasOne
    {
        return $this->hasOne(Supervisor::class);
    }

    /**
     * Relationship with Rso model
     *
     * @return HasOne
     */
    public function rso(): HasOne
    {
        return $this->hasOne(Rso::class);
    }

    /**
     * Relationship with Retailer model
     *
     * @return HasOne
     */
    public function retailer(): HasOne
    {
        return $this->hasOne(Retailer::class);
    }

    /**
     * Relationship with Bp model
     *
     * @return HasOne
     */
    public function bp(): HasOne
    {
        return $this->hasOne(Bp::class);
    }

    /**
     * Relationship with Account model
     *
     * @return HasOne
     */
    public function account(): HasOne
    {
        return $this->hasOne(Account::class);
    }

    /**
     * Relationship with DmsOperator model
     *
     * @return HasOne
     */
    public function dmsOperator(): HasOne
    {
        return $this->hasOne(DmsOperator::class);
    }
}
