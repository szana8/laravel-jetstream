<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    /**
     * Guarded attributes
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Default eager load objects
     *
     * @var string[]
     */
    protected $with = ['prices'];

    /**
     * A product has to be an owner
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function owner()
    {
        return $this->hasOne(User::class, 'owner_id');
    }

    /**
     * A product can be multiple prices
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prices()
    {
        return $this->hasMany(Price::class);
    }

}
