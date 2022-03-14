<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        //dd($products);
        return view ('products.index', compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(ProductRequest $request){
        $input = $request->all();
        //dd($input);

        $store = Product::create([
            'title' =>$input['title'],
            'date' =>$input['date'],
            'status' =>$input['status'],
            'description' =>$input['description'],
        ]);
        return redirect()->route('products.index');
    }

    public function edit($id) {
        $product = Product::find($id);
        //dd($products);
        return view('products.edit',compact('product'));
    }

    public function update(ProductRequest $request, $id) {
        $input = $request->all();
        $update = Product::where('id',$id)->update([
            'title' =>$input['title'],
            'date' =>$input['date'],
            'status' =>$input['status'],
            'description' =>$input['description'],
        ]);
        return redirect()->route('products.index');
    }

    public function delete($id){
        $delete = Product::where('id',$id)->delete();
        return redirect()->route('products.index');
    }

}
    
    