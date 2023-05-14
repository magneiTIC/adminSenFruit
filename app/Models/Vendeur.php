<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendeur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'description',
        'CNI',
        'notation'
    ];
    /**
     * The fruit that belong to the Vendeur
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function fruits()
    {
        return $this->belongsToMany(Fruit::class, 'ligne_ventes','vendeur_id','fruit_id')->withPivot([
            'prix',
            'quantiteStock'
        ]);
    }
}
