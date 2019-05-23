<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProduitModel extends Model
{
    //
    protected $table = 'produit';
    protected $fillable = ['designation', 'quantite', 'pu', 'montant'];
    public $timestamps = false;

    public function getProducts()
    {
        $produit = $this;
        $produit = $produit->select('id', 'designation', 'quantite', 'pu', 'montant');
        $produit = $produit->get();
        return $produit;

    }

    public function createProduct($designation, $quantite, $pu)
    {
        $produit = $this;
        $produit->designation = $designation;
        $produit->quantite = $quantite;
        $produit->pu = $pu;
        $produit->montant = $quantite * $pu;

        $produit->save();
    }

    public function updateProduct($id, $designation, $quantite, $pu)
    {
        $produit = $this;
        if ($id != 0) {
            $produit = $produit->where('id', '=', $id)->first();
        }
        $produit->designation = $designation;
        $produit->quantite = $quantite;
        $produit->pu = $pu;
        $produit->montant = $quantite * $pu;

        $produit->save();
    }

    public function getProductById($id)
    {
        $produit = $this;
        $produit = $produit->where('id', '=', $id)->first();

        return $produit;
    }

    public function sumProducts()
    {
        $sumProduit = $this;
        //$sumProduit = $sumProduit->select(DB::raw("SUM(montant) as total"));
        $sumProduit = $sumProduit->select(DB::raw("SUM(montant) as Total"));
        $sumProduit = $sumProduit->get();

        return $sumProduit[0]->Total;
    }

    public function deleteProductById($id)
    {
        $deleted = $this;
        $deleted = $deleted->where('id', '=', $id);
        $deleted->delete();
    }
}
