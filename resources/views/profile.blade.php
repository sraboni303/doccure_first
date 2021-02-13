@extends('layouts.app')

@section('content')
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        @include('layouts.header')
        @include('layouts.menu')
	
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">
                
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Profile</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-header">
                            <div class="row align-items-center">
                                <div class="col-auto profile-image">
                                    <a href="#">
                                        <img class="rounded-circle" alt="User Image" src="{{ URL::to('')}}/admin/media/admin/{{ Auth::user()->photo }}">
                                    </a>
                                </div>
                                <div class="col ml-md-n2 profile-user-info">
                                    <h4 class="user-name mb-0">{{ Auth::user()->name }}</h4>
                                    <h6 class="text-muted">{{ Auth::user()->email }}</h6>
                                    <div class="user-Location"><i class="fa fa-map-marker"></i> {{ Auth::user()->address }}</div>
                                    <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                </div>
                                <div class="col-auto profile-btn">
                                    
                                    <a href="{{ route('edit') }}" class="btn btn-primary">
                                        Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="profile-menu">
                            <ul class="nav nav-tabs nav-tabs-solid">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
                                </li>
                            </ul>
                        </div>	
                        <div class="tab-content profile-tab-cont">
                            
                            <!-- Personal Details Tab -->
                            <div class="tab-pane fade show active" id="per_details_tab">
                            
                                <!-- Personal Details -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                                    <p class="col-sm-10">{{ Auth::user()->name }}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                                    <p class="col-sm-10">{{ Auth::user()->dob }}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
                                                    <p class="col-sm-10">{{ Auth::user()->email }}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
                                                    <p class="col-sm-10">{{ Auth::user()->mobile }}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0">Address</p>
                                                    <p class="col-sm-10 mb-0">{{ Auth::user()->address }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                
                                </div>
                                <!-- /Personal Details -->

                            </div>
                            <!-- /Personal Details Tab -->
                            
                            <!-- Change Password Tab -->
                            <div id="password_tab" class="tab-pane fade">
                            
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Change Password</h5>

                                        @if (Session::has('notice'))
                                            <p class="alert alert-info">{{ Session::get('notice') }} <button class="close" data-dismiss="alert">&times;</button></p>                            
                                        @endif

                                        <div class="row">
                                            <div class="col-md-10 col-lg-6">
                                                <form method="POST" action="{{ route('password') }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label>Current Password</label>
                                                        <input type="password" class="form-control" name="old_password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>New Password</label>
                                                        <input type="password" class="form-control" name="password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Confirm Password</label>
                                                        <input type="password" class="form-control" name="password_confirmation">
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Change Password Tab -->
                            
                        </div>
                    </div>
                </div>
            
            </div>			
        </div>
        <!-- /Page Wrapper -->
    
    </div>
    <!-- /Main Wrapper -->
@endsection