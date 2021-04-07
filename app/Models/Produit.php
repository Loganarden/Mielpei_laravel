<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'description',
        'prix',
        'quantite',
        'image',
        'user_id',
    ];

    public function paniers()
    {
        return $this->hasMany(Panier::class);
    }

    public function producteur()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
