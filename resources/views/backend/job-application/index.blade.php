@extends('layouts.backend-app')
@section('title', 'Job Applications')
@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <h2>Job Applications management</h2>

        <br>
        <br>
        <br>
        <div class="float-end">
            <form class="form-inline" action="{{route("list-job-application")}}">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="status" class="col-form-label">Filter by status</label>
                    </div>
                    <div class="col-auto">
                        <select id="status" class="form-control" name="status" >
                            <option value="All" {{$status == "" ? "selected" : ""}} >All</option>
                            <option value="In process" {{$status == "In process" ? "selected" : ""}} >In process</option>
                            <option value="Denied" {{$status == "Denied" ? "selected" : ""}} >Denied</option>
                            <option value="Approved" {{$status == "Approved" ? "selected" : ""}} >Approved</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <label for="search" class="col-form-label">Search by any field</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" class="form-control" name="search" id="search" value="{{$search}}">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-default">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <br>
        <hr>


        <div class="table-responsive">
            <table  class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Submited Date</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date of Birth</th>
                    <th>Job</th>
                    <th>Previous experience</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($jobApplications->get() as $jobApplication)
                    <tr >
                        <td>{{$jobApplication->id}}</td>
                        <td>{{$jobApplication->created_at}}</td>
                        <td>{{$jobApplication->first_name}}</td>
                        <td>{{$jobApplication->last_name}}</td>
                        <td>{{$jobApplication->email}}</td>
                        <td>{{$jobApplication->phone}}</td>
                        <td>{{$jobApplication->date_birth}}</td>
                        <td>{{$jobApplication->job}}</td>
                        <td>{{$jobApplication->prev_experience ? "Yes" : "No"}}</td>
                        <td class="{{$jobApplication->status=="Denied" ? "text-danger": (($jobApplication->status=="Approved") ? "text-success" : "") }}">{{$jobApplication->status}}</td>
                        <td>
                            @if($jobApplication->status!="Denied")
                                <form method="POST" action="{{route("update-job-application",["id"=>$jobApplication->id])}}" >
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status"  value="Denied">
                                            <button type="submit" class="btn btn-warning">Deny</button>
                                </form>
                            @endif
                            @if($jobApplication->status!="Approved")
                                <form method="POST" action="{{route("update-job-application",["id"=>$jobApplication->id])}}" >
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="Approved">
                                    <button type="submit" class="btn btn-success">Approve</button>
                                </form>
                             @endif
                            <form action="{{route("delete-job-application",["id"=>$jobApplication->id])}}" id="delete-task-form" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                            </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

    </div>
    <br>
    <div class="float-end " >
        {!! $jobApplications->paginate($perPage)->appends($data)->links() !!}
    </div>
</div>
@endsection
