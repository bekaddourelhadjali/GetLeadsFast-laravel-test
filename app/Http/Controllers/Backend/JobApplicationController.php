<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class JobApplicationController extends Controller
{
    public function index(Request $request){
        $data = $request->all();
        $perPage= 10;
        $jobApplications = DB::table("job_applications");
        $jobApplications->whereNull('deleted_at');
        $search =  $request->input('search');
        $status =  $request->input('status');
        if(!in_array($status,["Approved","In process","Denied"])){
            $status = "";
        }
        if($search!=""){
            $jobApplications->where(function ($query) use ($search){
                $query->where('first_name', 'like', '%'.$search.'%')
                    ->orWhere('last_name', 'like', '%'.$search.'%')
                    ->orWhere('email', 'like', '%'.$search.'%')
                    ->orWhere('phone', 'like', '%'.$search.'%');
            });
        }
        if($status!=""){
            $jobApplications->where("status",$status);
        }
            $jobApplications->paginate($perPage);
        return view('backend.job-application.index', compact('jobApplications','status','search','perPage','data'));

    }
    public function update(Request $request,$id){
        $jobApplication = JobApplication::findOrFail($id);
        $jobApplication->status = $request->input("status");
        $jobApplication->save();
        return redirect()->route("list-job-application");

    }
    public function delete($id){
        $jobApplication = JobApplication::findOrFail($id);
        $jobApplication->delete();
        return redirect()->route("list-job-application");
    }
}
