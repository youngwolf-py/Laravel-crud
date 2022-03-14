<?php

namespace App\Http\Controllers;
use App\Http\Requests\JobRequest;
use Illuminate\Http\Request;
use App\Models\Job;
class JobController extends Controller
{
    public function index(){
        $jobs = Job::all();

        //dd($jobs);
        return view('jobs.index',compact('jobs'));
    }
    public function create(){
        return view('jobs.create');
    }

    public function store(JobRequest $request){
        $input = $request->all();
        // dd($input);

        $store = Job::create([
            'job' => $input['job'],
            'experience' => $input['experience'],
            'skills' => $input['skills'],
            'lastdate' => $input['lastdate'],
            'submission' => $input['submission'],
            'salary' => $input['salary'],
        ]);

        return redirect()->route('jobs.index');
    }

    public function edit($id) {
        $job = Job::find($id);
        // dd($jobs);

         return view('jobs.edit',compact('job'));
    }

    public function update(JobRequest $request, $id) {
        $input = $request->all();
        $update = Job::where('id',$id)->update([
            'job' => $input['job'],
            'experience' => $input['experience'],
            'skills' => $input['skills'],
            'lastdate' => $input['lastdate'],
            'submission' => $input['submission'],
            'salary' => $input['salary'],
        ]);

        return redirect()->route('jobs.index');
    }

    public function delete($id){
        $delete = Job::where('id',$id)->delete();
        return redirect()->route('jobs.index');
    }

}
