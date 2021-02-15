@extends('layouts.app')

@section('content')
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        @include('layouts.header')
        @include('layouts.menu')
        
        <!-- Page Wrapper -->
        <div class="page-wrapper">                  
            <div class="content container-fluid">  

                @if (Session::has('notice'))
                    <p class="alert alert-info">{{ Session::get('notice') }} <button class="close" data-dismiss="alert">&times;</button></p>                            
                @endif

                <a href="{{ route('doctor.create') }}" class="btn btn-info mb-2">Add New</a>                             

                <div class="row">
                    <div class="col-md-12">
                    
                        <!-- Recent Orders -->
                        <div class="card card-table flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">Doctors List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Doctor Name</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                                <th>Joined</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($all_doctor as $doctors)
                                                
                                            
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="{{ route('doctor.show', $doctors -> id) }}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ URL::to('')}}/admin/media/doctors/{{ $doctors -> photo }} " alt="User Image"></a>
                                                        <a href="{{ route('doctor.show', $doctors -> id) }}">{{ $doctors -> name }}</a>
                                                    </h2>
                                                </td>
                                                <td>{{ $doctors -> email }}</td>
                                                <td>{{ $doctors -> uname }}</td>
                                                <td>{{ $doctors -> role }}</td>
                                                <td>{{ date('F d, Y', strtotime($doctors -> created_at)) }}</td>
                                                <td>
                                                    <a href="{{ route('doctor.edit', $doctors -> id) }}" class="btn btn-success">Edit</a>

                                                    <form style="display: inline" action="{{ route('doctor.destroy', $doctors -> id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-success">Delete</button>
                                                    </form>

                                                    
                                                </td>
                                                
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /Recent Orders -->
                        
                    </div>
                </div>



            </div>			
        </div>
        <!-- /Page Wrapper -->
    
    </div>
    <!-- /Main Wrapper -->
@endsection