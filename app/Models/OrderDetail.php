<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function orderDetail(): BelongsTo
    {
        return $this->belongsTo(JastiperProduct::class, 'jastip_product_id', 'id');
    }
    public function billed(): BelongsTo
    {
        return $this->belongsTo(Invoice::class, 'invoice_id', 'id');
    }
    public function ordered(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}
