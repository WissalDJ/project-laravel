<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'prenom',
        'tel',
        'email',
        'modepass',
        'nomEntreprise',
        'adrees',
        'imagmenu',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'modepass',
    ];

    /**
     * Get the orders for the partner.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * Get the products for the partner.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}