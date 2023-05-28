<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index_add_product()
    {
        return view('products.add_product');
    }

    public function list_product()
    {
        return view('products.list_product');
    }
    public function update_product()
    {
        return view('products.update_product');
    }
    public function detail_product()
    {
        return view('products.detail_product');
    }
}
