
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: 1050px">
  <!-- Brand Logo -->
  <b  class="brand-link">
    <img src="../../assets/img/dds4.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
    <a style="color:rgb(215, 220, 228)">ReserviQ</a>
  </b>
<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../assets/img/download1.jpg" class="img-circle elevation-2" style="height: 80%" alt="User Image">
      </div>
      <div class="info" style="color: white;font-size:20px">
    {{ Auth::user('')->name }} 
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline"  style="color: white">
      <div class="input-group" data-widget="sidebar-search" >
        <input class="form-control form-control-sidebar" style="background-color: white" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append" >
          <button class="btn btn-sidebar" >
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="{{request()->is('/*'? 'display:block;' :'display:none;')}}">
        @if(Auth::user('')->role==0)
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-home"></i>
            <p>
             Home
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('reservation')}}" class="nav-link">
            <i class="fa fa-table nav-icon "></i>
            <p>
            Reservation
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../widgets.html" class="nav-link">
            <i class="fas fa-hamburger nav-icon  "></i>
            <p>
            Menu 
            </p>
          </a>
        </li>
       
        
        <li class="nav-item">
          <a href="../widgets.html" class="nav-link">
            <i class="fas fa-bullhorn nav-icon "></i>
            <p>
            Promotions
            </p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{url('feedback')}}" class="nav-link">
            <i class="fas fa-pen-square nav-icon "></i>
            <p>
            Feedbacks
            </p>
          </a>
        </li>
     

        <li class="nav-item">
          <a href="{{url('profile')}}" class="nav-link">
            <i class="fa fa-user nav-icon "></i>
            <p>
            Profile
            </p>
          </a>
        </li>
        @else
        <li class="nav-item">
          <a href="{{url('profile')}}" class="nav-link">
            <i class="fa fa-user nav-icon "></i>
            <p>
            Profile
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('customer')}}"   class="nav-link">
            <i class="fas fa-pen-square nav-icon "></i>
            <p>
        Manage Customer
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('showfeedback')}}"   class="nav-link">
            <i class="fas fa-pen-square nav-icon "></i>
            <p>
        View feedback
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('showreservation')}}" class="nav-link">
            <i class="fas fa-bullhorn nav-icon "></i>
            <p>
           Reservation
            </p>
          </a>
        </li>
       
        @endif
      </ul>
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
    </nav>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
    </div>