<?php
namespace Davidle90\Products\app\Http\Controllers;

use Davidle90\Products\Products;

class ProductsController
{
    public function __invoke(Products $products) {
        $quote = $products->justDoIt();

        return view('products::index', compact('quote'));
    }
}