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
                            <h3 class="page-title">{{$doc_profile -> name }}</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">{{$doc_profile -> name }} Profile</li>
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
                                        <img class="rounded-circle" alt="User Image" src="{{ URL::to('')}}/admin/media/doctors/{{ $doc_profile->photo }}">
                                    </a>
                                </div>
                                <div class="col ml-md-n2 profile-user-info">
                                    <h4 class="user-name mb-0">{{ $doc_profile ->name }}</h4>
                                    <h6 class="text-muted">{{ $doc_profile ->email }}</h6>
                                    <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                </div>
                                <div class="col-auto profile-btn">
                                    
                                    <a href="{{ route('doctor.index') }}" class="btn btn-primary">
                                        Back
                                    </a>
                                </div>
                            </div>
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
                                                    <p class="col-sm-10">{{ $doc_profile->name }}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
                                                    <p class="col-sm-10">{{ $doc_profile->email }}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Username</p>
                                                    <p class="col-sm-10">{{ $doc_profile->uname }}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Role</p>
                                                    <p class="col-sm-10">{{ $doc_profile->role }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                
                                </div>
                                <!-- /Personal Details -->

                            </div>
                            <!-- /Personal Details Tab -->
                            
                         
                            
                        </div>
                    </div>
                </div>
            
            </div>			
        </div>
        <!-- /Page Wrapper -->
    
    </div>
    <!-- /Main Wrapper -->
@endsection

