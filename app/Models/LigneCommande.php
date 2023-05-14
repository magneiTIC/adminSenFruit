<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
    use HasFactory;

    protected $fillable = [
        'prix',
        'quantite',
        'prixTotal',
       
    ];
    /**
     * Get the livraison that owns the LigneCommande
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function livraison(): BelongsTo
    {
        return $this->belongsTo(livraison::class);
    }
    /**
     * Get the commande that owns the LigneCommande
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commande(): BelongsTo
    {
        return $this->belongsTo(commande::class );
    }
    /**
     * Get the fruit that owns the LigneCommande
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fruit(): BelongsTo
    {
        return $this->belongsTo(Fruit::class );
    }
    /**
     * Get the vendeur that owns the LigneCommande
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendeur(): BelongsTo
    {
        return $this->belongsTo(Vendeur::class );
    }
}
