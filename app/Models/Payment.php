<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Payment extends Model
{
    use HasFactory;

    /**
     * Default fillable attributes
     *
     * @var string[]
     */
    protected $fillable = ['name', 'type', 'public_key', 'secret_key'];

    /**
     * Overwrite the default boot method to set the default attribute values
     */
    protected static function boot()
    {
        parent::boot();

        // Set the default value for the attributes
        self::creating(function ($payment) {
            $payment->api_id = Str::uuid();
            $payment->owner_id = auth()->id();
        });
    }

    /**
     * A payment belongs to a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
