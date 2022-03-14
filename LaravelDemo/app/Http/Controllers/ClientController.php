<?php

namespace App\Http\Controllers;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{
    
    public function index(){
        $clients = Client::all();
        //dd($clients);
        return view ('clients.index', compact('clients'));
    }

    public function create(){
        return view('clients.create');
    }

    public function store(ClientRequest $request){
        $input = $request->all();
        //dd($input);

        $store = Client::create([
            'name' =>$input['name'],
            'status' =>$input['status'],
            'date' =>$input['date'],
        ]);
        return redirect()->route('clients.index');
    }

    public function edit($id) {
        $client = Client::find($id);
        //dd($clients);
        return view('clients.edit',compact('client'));
    }

    public function update(ClientRequest $request, $id) {
        $input = $request->all();
        $update = Client::where('id',$id)->update([
            'name' =>$input['name'],
            'status' =>$input['status'],
            'date' =>$input['date'],
        ]);
        return redirect()->route('clients.index');
    }

    public function delete($id){
        $delete = Client::where('id',$id)->delete();
        return redirect()->route('clients.index');
    }

}
