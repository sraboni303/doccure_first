@extends('layouts.app')

@section('content')

<!-- Main Wrapper -->
<div class="main-wrapper login-body">
@include('layouts.header')
@include('layouts.menu')

    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Update Profile</h1>
                        
                        {{-- @if ( $errors -> any() )
                            {{ $errors -> first() }}
                        @endif --}}
                        
                        <!-- Form -->
                        <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Name" name="name" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email" name="email" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Mobile" name="mobile" value="{{ Auth::user()->mobile }}">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Date of Birth" name="dob" value="{{ Auth::user()->dob }}">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Address" name="address" value="{{ Auth::user()->address }}">
                            </div>
                            <div class="form-group">
                                <input class="form-control-file" type="file" name="photo" name="new_photo">
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block" type="submit">Update</button>
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