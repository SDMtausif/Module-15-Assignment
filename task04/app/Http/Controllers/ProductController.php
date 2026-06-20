<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{

    public function create() {
        return view('productcreate');
    }


    public function store(Request $request) {
   
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        session()->flash('success', 'Product created successfully!');


        Log::info('Product Created:', [
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect('/product/confirm')
               ->with('product', $request->only(['name','price','stock']));
    }

    public function confirm() {
        $product = session('product');
        return view('productconfirm', compact('product'));
    }
}
