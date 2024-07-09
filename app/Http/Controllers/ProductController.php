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
        $products = Product::orderBy('id', 'desc')->paginate(8);
        return view('product.products', compact('categories', 'products'));
    }


    /**
     * Detail : show product detail
     */
    public function show(Product $product)
    {
        $products = Product::where('category_id', $product->category_id)
            ->inRandomOrder()
            ->limit(4)
            ->get();
        return view('product.show', compact('product', 'products'));
    }

    public function productByCategory(Category $id)
    {
        //Requête pour filtrer les produit a partir de la catégorie
        $categories = Category::all();
        $products = Product::where('category_id', $id)
            ->orderBy('id', 'desc')
            ->paginate(8);
        return view('product.products', compact('categories', 'products'));
    }
}
