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
                            <h1>Add New</h1>
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
                                    <input class="form-control" type="text" placeholder="Username" name="uname">
                                </div>   
                                <select class="custom-select mb-3" name="role">
                                    <option selected>-Select Role-</option>
                                    <option value="Subscriber">Subscriber</option>
                                    <option value="Author">Author</option>
                                    <option value="Moderator">Moderator</option>
                                    <option value="Admin">Admin</option>
                                  </select>                             
                                <div class="form-group">
                                    <input class="form-control-file" type="file" name="photo">
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                                </div>
                            </form>
                            <!-- /Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
@endsection