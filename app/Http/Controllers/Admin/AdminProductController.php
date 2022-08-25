<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
  public function index() {
    $view_data = ["title" => "Admin Page - Products - Online Store", "products" => Product::all()];
    return view('admin.product.index')->with("viewData", $view_data);
  }
}