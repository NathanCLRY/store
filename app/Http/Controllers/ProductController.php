<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     *Home : show product and categories
     *
     * 
     */
    public function index()
    {
        return 'Home';
    }


    /**
     * Detail : show product detail
     */
    public function show(Product $product)
    {
        return 'Détail';
    }

    public function productByCategory(Category $category)
    {
        return 'Produit par categorie';
    }
}
