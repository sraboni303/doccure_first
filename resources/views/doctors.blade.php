@extends('layouts.app')

@section('content')
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        @include('layouts.header')
        @include('layouts.menu')
        
        <!-- Page Wrapper -->
        <div class="page-wrapper">                  
            <div class="content container-fluid">   
                <a href="{{ route('doctoradd') }}" class="btn btn-info mb-2">Add New</a>                             

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
                                                <th>Speciality</th>
                                                <th>Earned</th>
                                                <th>Reviews</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="admin/assets/img/doctors/doctor-thumb-01.jpg" alt="User Image"></a>
                                                        <a href="profile.html">Dr. Ruby Perrin</a>
                                                    </h2>
                                                </td>
                                                <td>Dental</td>
                                                <td>$3200.00</td>
                                                <td>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star-o text-secondary"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="admin/assets/img/doctors/doctor-thumb-02.jpg" alt="User Image"></a>
                                                        <a href="profile.html">Dr. Darren Elder</a>
                                                    </h2>
                                                </td>
                                                <td>Dental</td>
                                                <td>$3100.00</td>
                                                <td>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star-o text-secondary"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="admin/assets/img/doctors/doctor-thumb-03.jpg" alt="User Image"></a>
                                                        <a href="profile.html">Dr. Deborah Angel</a>
                                                    </h2>
                                                </td>
                                                <td>Cardiology</td>
                                                <td>$4000.00</td>
                                                <td>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star-o text-secondary"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="admin/assets/img/doctors/doctor-thumb-04.jpg" alt="User Image"></a>
                                                        <a href="profile.html">Dr. Sofia Brient</a>
                                                    </h2>
                                                </td>
                                                <td>Urology</td>
                                                <td>$3200.00</td>
                                                <td>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star-o text-secondary"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="admin/assets/img/doctors/doctor-thumb-05.jpg" alt="User Image"></a>
                                                        <a href="profile.html">Dr. Marvin Campbell</a>
                                                    </h2>
                                                </td>
                                                <td>Orthopaedics</td>
                                                <td>$3500.00</td>
                                                <td>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star-o text-secondary"></i>
                                                </td>
                                            </tr>
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