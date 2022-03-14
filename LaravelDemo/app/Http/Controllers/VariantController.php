<?php

namespace App\Http\Controllers;
use App\Http\Requests\VariantRequest;
use Illuminate\Http\Request;
use App\Models\Variant;
class VariantController extends Controller
{
    public function index($id){
        
        $variants = Variant::where('product_id',$id)->get();
        $product_id = $id;
        //dd($variants);
        return view ('variants.index', compact('variants', 'product_id'));
    }

    public function create($id){
        $product_id = $id;
        return view('variants.create', compact('product_id'));
    }

    public function store(Request $request){
        $input = $request->all();

        $store = Variant::create([
            'title' =>$input['title'],
            'model' =>$input['model'],
            'cost' =>$input['cost'],
            'price' =>$input['price'],
            'availability' =>$input['status'],
            'description' =>$input['description'],
            'product_id' => $input['product_id']
        ]);

        return redirect()->route('variants.index',$input['product_id']);
    }

    public function edit($id) {
        $variant = Variant::find($id);
        //dd($variants);
        return view('variants.edit',compact('variant'));
    }

    public function update(Request $request, $id) {
        $input = $request->all();
        $update = Variant::where('id',$id)->update([
            'title' =>$input['title'],
            'model' =>$input['model'],
            'cost' =>$input['cost'],
            'price' =>$input['price'],
            'availability' =>$input['status'],
            'description' =>$input['description'],
        ]);
        return redirect()->route('variants.index','product_id');
    }

    public function delete($id){
        $delete = Variant::where('id',$id)->delete();
        return redirect()->route('variants.index', 'product_id');
    }

}



