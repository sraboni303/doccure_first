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
                        <form action="{{ route('doctor.update', $doc_edit -> id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Name</label>
                                <input class="form-control" type="text" name="name" value="{{ $doc_edit -> name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input class="form-control" type="email" name="email" value="{{ $doc_edit -> email }}">
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input class="form-control" type="text" name="uname" value="{{ $doc_edit -> uname }}">
                            </div>
                            <select class="custom-select mb-3" name="role">
                                <option disabled>-Select Role-</option>
                                <option @if($doc_edit->role == 'Dental') selected @endif value="Dental">Dental</option>
                                <option @if($doc_edit->role == 'Dermatologists') selected @endif value="Dermatologists">Dermatologists</option>
                                <option @if($doc_edit->role == 'Endocrinologists') selected @endif value="Endocrinologists">Endocrinologists</option>
                                <option @if($doc_edit->role == 'Gastroenterologists') selected @endif value="Gastroenterologists">Gastroenterologists</option>
                                <option @if($doc_edit->role == 'Allergists') selected @endif value="Allergists">Allergists</option>
                                <option @if($doc_edit->role == 'Cardiologists') selected @endif value="Cardiologists">Cardiologists</option>
                                <option @if($doc_edit->role == 'Nephrologists') selected @endif value="Nephrologists">Nephrologists</option>
                              </select>

                            <div class="form-group">
                                <input name="old_photo" type="hidden">
                                <input name="new_photo" class="form-control-file" type="file">
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