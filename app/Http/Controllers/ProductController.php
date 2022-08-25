<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
  public function index() {
    $view_data = ["title" => "Products - Online Store", "subtitle" => "List of products", "products" => Product::all()];
    return view("product.index")->with("viewData", $view_data);
  }

  public function show($id) {
    $product = Product::findOrFail($id);
    $view_data = ["title" => "{$product->getName()} - Online Store", "subtitle" => "{$product->getName()} - Product information", "product" => $product];
    return view("product.show")->with("viewData", $view_data);
  }
}