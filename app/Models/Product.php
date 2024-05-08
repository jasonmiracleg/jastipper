<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function products(): HasMany
    {
        return $this->hasMany(Shop::class, 'product_id', 'id');
    }

    public function jastip() : HasMany
    {
        return $this->hasMany(JastiperProduct::class, 'product_id', 'id');
    }
}
