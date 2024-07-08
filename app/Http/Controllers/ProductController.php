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
        $categories = Category::all();
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('product.products', compact('categories', 'products'));
    }


    /**
     * Detail : show product detail
     */
    public function show(Product $product)
    {
        return view('product.show');
    }

    public function productByCategory(Category $category)
    {
        return 'Produit par categorie';
    }
}
