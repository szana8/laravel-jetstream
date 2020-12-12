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
     * Default fillable attributes
     *
     * @var string[]
     */
    protected $fillable = ['name', 'description', 'type', 'owner_id', 'api_id'];

    /**
     * The attributes that should be cast to native types
     *
     * @var string[]
     */
    protected $casts = [
        'active' => 'boolean',
        'livemode' => 'boolean'
    ];

    /**
     * Overwrite the default boot method to set the default attribute values
     */
    protected static function boot()
    {
        parent::boot();

        // Set the default value for the attributes
        self::creating(function ($product) {
            $product->api_id = Str::uuid();
            $product->active = true;
            $product->livemode = false;
            $product->owner_id = auth()->id();
        });
    }

    /**
     * A product has to be an owner
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function owner()
    {
        return $this->hasOne(User::class, 'id');
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
