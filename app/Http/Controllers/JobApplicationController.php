<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;
use \App\Http\Requests\JobApplicationCreateRequest;
use Illuminate\Support\Facades\Auth;

class JobApplicationController extends Controller
{
    public function index(){
        if(Auth::check()){
            $submittedJobApp = JobApplication::where('email',Auth::user()->email) -> first();
            if($submittedJobApp !== null){
                return redirect()->route('show-job-application', ['id' =>$submittedJobApp->id]);
            }
        }
        return view('frontend/job-application/index');
    }

    public function store(JobApplicationCreateRequest $request){
        if(Auth::check()){
            $submittedJobApp = JobApplication::where('email',Auth::user()->email) -> first();
            if($submittedJobApp !== null){
                return redirect()->route('show-job-application', ['id' =>$submittedJobApp->id]);
            }
        }
        $jobApplication = JobApplication::create($request->all("first_name","last_name","email","phone","date_birth","job")+["prev_experience"=>$request->has("prev_experience")]);
        return redirect()->route('show-job-application', ['id' =>$jobApplication->id]);
    }


    public function show(Request $request, $id){
            $jobApplication = JobApplication::findOrFail($id);
            if($jobApplication->email===Auth::user()->email ){
                return  view('frontend/job-application/show')->with('jobApplication', $jobApplication);
            }
        return response('Unauthorized.', 401);
    }

}
