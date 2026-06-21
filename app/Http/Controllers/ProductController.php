<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["products"] = Product::all();

        return view('product.index')
            ->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];

        $product = Product::findOrFail($id);

        $viewData["title"] = $product->getName()." - Online Store";
        $viewData["subtitle"] = $product->getName()." - Product Information";
        $viewData["product"] = $product;

        return view('product.show')
            ->with("viewData", $viewData);
    }

    public function create()
    {
        $viewData = [];
        $viewData["title"] = "Create Product";

        return view('product.create')
            ->with("viewData", $viewData);
    }

    public function save(Request $request)
    {
        Product::validate($request);

        $product = new Product();

        $product->setName($request->input('name'));
        $product->setDescription($request->input('description'));
        $product->setPrice($request->input('price'));

        if ($request->hasFile('image'))
        {
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(
                public_path('storage'),
                $imageName
            );

            $product->setImage($imageName);
        }

        $product->save();

        return redirect()->route('product.index');
    }
}
