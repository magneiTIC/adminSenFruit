<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mois extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    
    ];
    /**
     * The fruit that belong to the Mois
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function fruits()
    {
        return $this->belongsToMany(Fruit::class, 'fruit_disponibles','mois_id','fruit_id');
    }
}
