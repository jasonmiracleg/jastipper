<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JastiperProduct extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function jastiper(): BelongsTo {
        return $this->belongsTo(User::class, 'jastiper_id', 'id');
    }
    public function product(): BelongsTo {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function order(): HasMany {
        return $this->hasMany(OrderDetail::class, 'jastiper_product_id', 'id');
    }
}
