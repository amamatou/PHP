<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'produits';
    protected $fillable = [
    	'nom',
    	'prix_unitaire',
    	'total_stock',
    	'id_categorie',
    ];
    protected $dates = ['deleted_at'];

    //pour la jointure
    public function categories(){
    	return $this->hasOne('App\Models\Categorie','id','id_categorie');
    }

}
