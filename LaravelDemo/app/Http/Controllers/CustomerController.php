<?php

namespace App\Http\Controllers;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();

        //dd($customers);
        return view('customers.index',compact('customers'));
    }
    public function create(){
        return view('customers.create');
    }

    public function store(CustomerRequest $request){
        $input = $request->all();
        // dd($input);

        $store = Customer::create([
            'name' => $input['name'],
            'product' => $input['product'],
            'price' => $input['price'],
        ]);

        return redirect()->route('customers.index');
    }

    public function edit($id) {
        $customer = Customer::find($id);
        // dd($customers);

         return view('customers.edit',compact('customer'));
    }

    public function update(CustomerRequest $request, $id) {
        $input = $request->all();
        $update = Customer::where('id',$id)->update([
            'name' => $input['name'],
            'product' => $input['product'],
            'price' => $input['price'], 
        ]);

        return redirect()->route('customers.index');
    }

    public function delete($id){
        $delete = Customer::where('id',$id)->delete();
        return redirect()->route('customers.index');
    }
}
