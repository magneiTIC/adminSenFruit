<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'modePaiement',
        'etat',
        'dateCommande',
    ];


   /**
    * Get the user that owns the Commande
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function client(): BelongsTo
   {
       return $this->belongsTo(Client::class);
   }
   /**x
    * Get all of the ligneCommande for the Commande
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function ligneCommandes(): HasMany
   {
       return $this->hasMany(ligneCommande::class);
   }
}
