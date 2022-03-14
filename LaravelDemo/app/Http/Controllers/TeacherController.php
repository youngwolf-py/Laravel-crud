<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class TeacherController extends Controller
{
    
    public function index(){
        $teachers = Teacher::all(); 

        // dd($teachers);
        return view('teachers.index',compact('teachers'));
    }

    public function create(){
        return view('teachers.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        $input = $request->all();
        // dd($input);
        
        $store = Teacher::create([
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'contact' => $input['contact'],
            'email' => $input['email'],
            'subject' => $input['subject']
        ]);

        return redirect()->route('teachers.index');
    }

    public function edit($id){
        $teacher = Teacher::find($id);
        // dd($teacher);
        return view('teachers.edit',compact('teacher'));
    }

    public function update(Request $request, $id){
        $input = $request->all();
        $update = Teacher::where('id',$id)->update([
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'contact' => $input['contact'],
            'email' => $input['email'],
            'subject' => $input['subject']
        ]);

        return redirect()->route('teachers.index');
    }

    public function delete($id){
        $delete = Teacher::where('id',$id)->delete();
        return redirect()->route('teachers.index');
    }
}
