<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'courier_id',
        'partner_id',
        'product_id',
        'quantity',
        'status',
    ];

    public function courier()
    {
        return $this->belongsTo(Courier::class, 'courier_id');
    }

    public function partner()
    {
        return $this->belongsTo(Partner::class, 'partner_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
