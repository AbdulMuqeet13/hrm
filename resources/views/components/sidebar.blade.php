
<aside class="main-sidebar sidebar-dark-primary elevation-3 h-100 ">
  <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
      
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a> --}}

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    
      <div class="info">
        <h1 class="d-block "> HRM</h1>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          
          <ul class="nav nav-treeview">
            <li class="nav-item">
             
            </li>
              <li class="nav-item">
                <a href="{{ route('user.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users Data</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ route('staff.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Staff Data</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ route('attendence.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Attendance</p>
                </a>
              </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Simple Link
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>