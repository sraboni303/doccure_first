@extends('layouts.app')

@section('content')

		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="{{ URL::to('admin/assets/img/logo-white.png') }}" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								@if ( $errors -> any() )
									{{ $errors -> first() }}
								@endif
								
								<!-- Form -->
								<form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Name" name="name">
									</div>
									<div class="form-group">
										<input class="form-control" type="email" placeholder="Email" name="email">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Mobile" name="mobile">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Date of Birth" name="dob">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Address" name="address">
									</div>
									<div class="form-group">
										<input class="form-control" type="password" placeholder="Password" name="password">
									</div>
									<div class="form-group">
										<input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation">
									</div>
									<div class="form-group">
										<input class="form-control-file" type="file" name="photo">
									</div>
									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" type="submit">Register</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								
								<!-- Social Login -->
								<div class="social-login">
									<span>Register with</span>
									<a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
								</div>
								<!-- /Social Login -->
								
								<div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Login</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->

@endsection
