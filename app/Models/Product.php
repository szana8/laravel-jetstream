<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['prices'];

    public function owner()
    {
        return $this->hasOne(User::class, 'owner_id');
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

}
