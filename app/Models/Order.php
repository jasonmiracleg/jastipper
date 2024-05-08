<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function ordered(): HasMany {
        return $this -> hasMany(OrderDetail::class, 'order_id', 'id');
    }

    public function buyer(): BelongsTo {
        return $this -> belongsTo(User::class, 'user_id', 'id');
    }
}
