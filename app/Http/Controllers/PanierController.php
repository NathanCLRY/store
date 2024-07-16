<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PanierController extends Controller
{
    public function index()
    {
        return 'liste';
    }
    public function ajouter(Product $product)
    {
        //Search for the existance of the product associated with the authed user
        $existProduct = Panier::where('product_id', "=", $product->id, 'and', 'user_id', '=', auth()->user()->id)
            ->first();
        if (isset($existProduct)) {
            DB::table('paniers')
                ->where('id', $existProduct->id)
                ->update(['quantite' => $existProduct->quantite + 1]);
        } else {
            Panier::create([
                'user_id' => auth()->user()->id,
                'product_id' => $product->id,
            ]);
        }

        return 'ajouter';
    }
    public function commander()
    {
        return 'commander';
    }
}
