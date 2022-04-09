@extends('layouts.app')
@section('title', 'Job Application')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Job Application') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('new-job-application') }}">
                    @csrf
                    <div class="row mb-3">
                        <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('First name') }}</label>

                        <div class="col-md-6">
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ Auth::check() ? Auth::user()->first_name : old('first_name') }}" required autocomplete="first_name"  autofocus>

                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>


                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ Auth::check() ? Auth::user()->last_name : old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::check() ? Auth::user()->email : old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="date_birth" class="col-md-4 col-form-label text-md-end">{{ __('Date of birth') }}</label>

                            <div class="col-md-6">
                                <input id="date_birth" type="date" class="form-control @error('date_birth') is-invalid @enderror" name="date_birth" value="{{ old('date_birth') }}" required>

                                @error('date_birth')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="job" class="col-md-4 col-form-label text-md-end">{{ __('Job') }}</label>

                            <div class="col-md-6">
                                <select id="job" class="form-control @error('job') is-invalid @enderror" name="job" required>
                                    <option value="Manager" {{old('job')=='Manager' ? "selected" : ""}}>Manager</option>
                                    <option value="Programmer" {{old('job')=='Programmer' ? "selected" : ""}}>Programmer</option>
                                    <option value="HR" {{old('job')=='HR' ? "selected" : ""}}>HR</option>
                                    <option value="Support" {{old('job')=='Support' ? "selected" : ""}}>Support</option>

                                </select>
                                @error('job')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="prev_experience" class=" col-md-4 col-form-label text-md-end">{{ __('Previous Experience') }}</label>

                            <div class="col-md-6">
                                <input id="prev_experience" type="checkbox" class="form-check-input @error('prev_experience') is-invalid @enderror" name="prev_experience" value="{{ old('prev_experience') }}"  >

                                @error('prev_experience')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="float-md-end btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
