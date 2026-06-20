<?php
namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index() {
        $products = [
            ['id' => 1, 'name' => 'Laptop', 'price' => 50000],
            ['id' => 2, 'name' => 'Mobile', 'price' => 20000],
        ];

        return view('ProductList', compact('products'));
    }
    public function show($id) {
        $product = ['id' => $id, 'name' => 'Laptop', 'price' => 50000];
        return response()->json($product);
    }

    public function redirectExample() {
        return redirect('/products');
    }
}
