<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Middleware untuk autentikasi pengguna
    }

    public function index()
    {
        // Mengambil jumlah data produk, kategori, dan subkategori
        $productCount = Product::count();   // Menghitung jumlah produk
        $categoryCount = Category::count(); // Menghitung jumlah kategori
        $subCategoryCount = SubCategory::count(); // Menghitung jumlah subkategori

        // Mengirimkan data ke view dashboard
        return view('dashboard', compact('productCount', 'categoryCount', 'subCategoryCount'));
    }
}
