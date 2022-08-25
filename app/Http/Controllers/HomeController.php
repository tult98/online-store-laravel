<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $view_data = ["title" => "About us - Online Store", "subtitle" => "About us", "description" => "This is about page...", "author" => "Developed by: Tu Le Thanh"];
        return view('home.about')->with("viewData", $view_data);
    }
}
