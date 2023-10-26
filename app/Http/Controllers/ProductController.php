<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product = new Product();
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        $product->save();

        return response()->json(["message" => 'Product Successfully Added!', "data" => $product]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product = Product::find($id);
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        $product->save();

        return response()->json(["message" => 'Product Successfully Updated!', "data" => $product]);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return response()->json("Product Deleted Successfully");
    }
}
