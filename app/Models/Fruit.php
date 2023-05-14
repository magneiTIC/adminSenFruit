<?php

namespace App\Models;

use App\Models\Mois;
use App\Models\Vendeur;
use App\Models\LigneCommande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fruit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'image',
    ];

    /**
     * Get all of the ligneCommandes for the Fruit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ligneCommandes(): HasMany
    {
        return $this->hasMany(LigneCommande::class);
    }
    /**
     * The vendeurs that belong to the Fruit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function vendeurs()
    {
        return $this->belongsToMany(Vendeur::class, 'ligne_ventes','fruit_id','vendeur_id')->withPivot([
            'prix',
            'quantiteStock'
        ]);
    }
    /**
     * The mois that belong to the Fruit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function mois(){
        return $this->belongsToMany(Mois::class,'fruit_disponibles','fruit_id','mois_id');

    }
    
}
