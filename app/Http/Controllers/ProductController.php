<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_product_list()
    {
        $data = Product::all();
        return view('product.product', compact('data'));
    }
    public function add_products()
    {
        return view('product.product_add');
    }
    public function add_products_store(Request $request)
    {

        $imageName = time() . '.' . $request->image->getClientOriginalExtension();

        $request->image->move(public_path('images'), $imageName);

        $image = new Product();
        $image->product_title = $request->Product_title;
        $image->price = $request->Product_price;
        $image->image = $imageName;
        $image->save();
        return redirect('/product-add-list')->with('msg', 'Product Inserted Successfully');
    }
    public function add_products_destroy(Request $request)
    {

        // dd($request->id);
        $product = Product::find($request->id);
        $product->delete();
        $data = 'success';
        return response()->json($data);
    }
}
