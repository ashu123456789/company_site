<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Models\Job;


class JobController extends Controller
{
    public function index(Request $request)
    {
        //dd("hello");
        if($request->ajax()){
            $job = Job::orderBy('created_at','desc');
            return datatables()->eloquent($job)
            ->editColumn('updated_at', function ($request) {
                return $request->updated_at->format('Y-m-d'); 
              })->toJson();
        }
        else{
        $title = "Job Manager";
        return view('admin.job.index',compact('title'));
        }
    }

    public function create()
    {
        $title = "Job Add";
        $seljob = "";
        return view('admin.job.create',compact('title','seljob'));
    }

    public function store(JobRequest $request)
    {
        $job = new Job();
        $job->slug = $request->slug;
        $job->title = $request->title;
        $job->experience = $request->experience;
        $job->location = $request->location;
        $job->description = $request->description;
        $job->opening = $request->opening;
        $job->skills = $request->skills;
        $job->responsivity = $request->responsivity;
        $job->qualification = $request->qualification;
        $job->salary = $request->salary;
        $job->status = 1;
        $job->save();
        return redirect()->route('admin.jobs')->with('success',' Added Job');
    }

    public function show($id)
    {
        $title = "Job Details";
        $job = Job::where('id', $id)->first();
        return view('admin.job.details', compact('job','title'));
    }
    public function edit($id)
    {
        $title="Edit Job";
        $job = Job::where('id', $id)->first();
        $seljob =  $job->id;
        return view('admin.job.edit', compact('job','title','seljob'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'slug' => 'required|unique:pages,slug,' . $id,
            'title' => 'required',
            'experience' => 'required',
            'location' => 'required',
            'description' => 'required',
            'opening' => 'required',
            //'skills' => 'required',
            //'responsivity' => 'required',
            //'qualification' => 'required',
            //'salary' => 'required',
          ];
          $message = [
            'slug.required' => 'The slug is required',
           // 'experience.required' => 'The experience is required',
            'title.required' => 'The title is required',
            'description.required' => 'The description is required',
            //'opening.required' => 'The opening is required',
            //'skills.required' => 'The skills is requied'
          ];
          $v = Validator::make($request->all(), $rules, $message);
          if ($v->fails()) {
            return redirect::back()
              ->withErrors($v)
              ->withInput();
          }
          else{
        $job = Job::find($id);
        $job->slug = $request->slug;
        $job->title = $request->title;
        $job->experience = $request->experience;
        $job->location = $request->location;
        $job->description = $request->description;
        $job->opening = $request->opening;
        $job->skills = $request->skills;
        $job->responsivity = $request->responsivity;
        $job->qualification = $request->qualification;
        $job->salary = $request->salary;
        $job->status = 1;
        $job->save();
        return redirect()->route('admin.jobs')->with('success','Update Successfully');
          }
    }

    public function delete($id)
    {
        Job::where('id', $id)->delete();
        echo json_encode(['status'=>1,'message'=>'Your job has been deleted']);
    }
}
