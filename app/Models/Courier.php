<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id',
        'name',
        'prenom',
        'tel',
        'email',
        'annee_experience',
    ];

    public function partner()
    {
        return $this->belongsTo(Partner::class, 'partner_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}