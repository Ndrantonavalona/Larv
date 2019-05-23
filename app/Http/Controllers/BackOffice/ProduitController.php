<?php

namespace App\Http\Controllers\BackOffice;

use App\Models\ProduitModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProduitController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $oproduits = new ProduitModel();
        $produits = $oproduits->getProducts();
        $sumProduct = $oproduits->sumProducts();
        return view('BackOffice\produit\listProduit')->with([
            'products' => $produits,
            'total' => $sumProduct
        ]);
    }

    public function create()
    {
        return view('BackOffice\produit\creationProduit');
    }

    public function validProduct(Request $request)
    {
        $designation = $request->input('designation');
        $quantite = $request->input('quantite');
        $pu = $request->input('pu');

        $produit = new ProduitModel();
        $produit->createProduct($designation, $quantite, $pu);

        return redirect(route('listProduits'));
    }

    public function getProductById($id)
    {
        $produit = new ProduitModel();
        $produit = $produit->getProductById($id);
        return view('BackOffice\produit\creationProduit')->with('produit', $produit);
    }

    public function deteleProductById($id)
    {
        $productDeletted = new ProduitModel();
        $productDeletted->deleteProductById($id);

        return redirect()->route('listProduits');
    }

    public function updateProduct(Request $request)
    {
        $id = $request->input('id');
        $designation = $request->input('designation');
        $quantite = $request->input('quantite');
        $pu = $request->input('pu');

        $produit = new ProduitModel();
        $produit = $produit->updateProduct($id, $designation, $quantite, $pu);

        return redirect(route('listProduits'));
    }
}
