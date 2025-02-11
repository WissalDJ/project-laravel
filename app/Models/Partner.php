<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

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
    public function orders()
{
    return $this->hasMany(Order::class);
}

}
