@extends('layouts.app')
@section('title', 'Job Application')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Job Title : {{ $jobApplication->job }} </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">First Name : {{ $jobApplication->first_name }}</li>
                        <li class="list-group-item">Last Name : {{ $jobApplication->last_name }}</li>
                        <li class="list-group-item">Email : {{ $jobApplication->email }}</li>
                        <li class="list-group-item">Phone : {{ $jobApplication->phone }}</li>
                        <li class="list-group-item">Date of birth : {{ $jobApplication->date_birth }}</li>
                        <li class="list-group-item">Prev Experience : {{ $jobApplication->prev_experience ? "Yes" : "No" }}</li>
                        <li class="list-group-item">Status : {{ $jobApplication->status }}</li>
                        <li class="list-group-item">Submited Date : {{ $jobApplication->created_at }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
