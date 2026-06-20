<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCategories = Category::count();
        $totalProducts   = Product::count();
        $totalStock      = Product::sum('stock');
        $latestProducts  = Product::latest()->take(5)->get();

        return view('dashboard', compact(
            'totalCategories',
            'totalProducts',
            'totalStock',
            'latestProducts'
        ));
    }
}
