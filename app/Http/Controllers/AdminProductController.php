<?php

namespace App\Http\Controllers;

use App\Models\Product;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["products"] = Product::all();

        return view('admin.product.index')
            ->with("viewData", $viewData);
    }

    public function edit($id)
    {
        $viewData = [];

        $product = Product::findOrFail($id);

        $viewData["title"] = "Edit Product";
        $viewData["product"] = $product;

        return view('admin.product.edit')
            ->with("viewData", $viewData);
    }

    public function update($id)
    {
        $product = Product::findOrFail($id);

        $product->setName(request('name'));
        $product->setDescription(request('description'));
        $product->setPrice(request('price'));

        $product->save();

        return redirect()->route('admin.product.index');
    }

    public function delete($id)
    {
        Product::destroy($id);

        return redirect()->route('admin.product.index');
    }
}