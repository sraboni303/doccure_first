<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> 
                    <span>Main</span>
                </li>
                <li class="active"> 
                    <a href="{{ route('home') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>

                <li> 
                    <a href="{{ route('doctor.index') }}"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
                </li>

                <li> 
                    <a href="{{ route('settings') }}"><i class="fe fe-vector"></i> <span>Settings</span></a>
                </li>

                <li> 
                    <a href="{{ route('profile') }}"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
                </li>


            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->