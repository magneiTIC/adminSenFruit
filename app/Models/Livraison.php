<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;
    protected $fillable = [
        'adresse',
        'prix',
        'modeLivraison',
        'dateLivraison',
    ];
    /**
     * Get all of the ligneCommandes for the Livraison
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ligneCommandes(): HasMany
    {
        return $this->hasMany(ligneCommandes::class);
    }
}
