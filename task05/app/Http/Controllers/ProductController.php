<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $products = DB::table('products')->get();
        return view('productlist', compact('products'));
    }

    public function search(Request $request) {
        $keyword = $request->input('keyword');
        $products = DB::table('products')
                      ->where('name', 'like', "%{$keyword}%")
                      ->get();
        return view('productlist', compact('products'));
    }

    public function sortAsc() {
        $products = DB::table('products')
                      ->orderBy('price', 'asc')
                      ->get();
        return view('productlist', compact('products'));
    }

    public function sortDesc() {
        $products = DB::table('products')
                      ->orderBy('price', 'desc')
                      ->get();
        return view('productlist', compact('products'));
    }

    public function count() {
        $count = DB::table('products')->count();
        return view('productcount', compact('count'));
    }
}
