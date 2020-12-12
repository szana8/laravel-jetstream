<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Price extends Model
{
    use HasFactory;

    /**
     * Default fillable attributes
     *
     * @var string[]
     */
    protected $fillable = ['product_id', 'model', 'unit_amount', 'currency', 'interval', 'billing_scheme'];

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
        });
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
