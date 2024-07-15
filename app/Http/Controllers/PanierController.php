<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index()
    {
        return 'liste';
    }
    public function ajouter(Product $product)
    {
        dd($product);
        return 'ajouter';
    }
    public function commander()
    {
        return 'commander';
    }
}
