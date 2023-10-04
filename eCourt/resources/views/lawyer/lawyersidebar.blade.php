
<div class="sidebar" style="position: absolute; height:1000px">

      <!-- Sidebar Menu -->
      <nav>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <div class="card-body box-profile">
                  <div class="text-center">
                    <img src="{{asset('storage/eCourt/'.auth('lawyer')->user()->profile_photo)}}" id="clientPhoto" class="profile-user-img img-fluid img-circle">
                    <h6 style="color: white;">{{auth('lawyer')->user()->name}}</h6>
                  </div>
               </div>
          <div class="text-center">
          <li class="nav-item">
                <a href="#" class="nav-link" style="color: white;">
                    <a style="color: white;" href="{{route('lawyer.dashboard')}}" method="get" class="{{ Request::is('lawyer-dashboard') ? 'active' : '' }}"> Dashboard</a>
                </a>
              </li>
          <li class="nav-item">
            <a href="../widgets.html" style="color: white;"  class="nav-link">
                <a style="color: white;" href="{{route('lawyer.case.requests')}}" class="{{ Request::is('lawyer-case-requests') ? 'active' : '' }}" method="get" > Case Requests</a>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" style="color: white;">
                <a style="color: white;" href="{{route('lawyer.active.cases')}}" method="get" class="{{ Request::is('lawyer-active-cases') ? 'active' : '' }}" > Active Cases</a>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" style="color: white;">
                <a style="color: white;" href="{{route('lawyer.closing.requests')}}" method="get" class="{{ Request::is('lawyer-closing-requests') ? 'active' : '' }}" > Closing Requests</a>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" style="color: white;">
                <a style="color: white;" href="{{route('lawyer.closed.cases')}}" method="get" class="{{ Request::is('lawyer-closed-cases') ? 'active' : '' }}"> Closed Cases</a>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" style="color: white;">
                <a style="color: white;" href="{{route('lawyer.case.schedule')}}" method="get" class="{{ Request::is('lawyer-case-schedule') ? 'active' : '' }}"> Case Schedule</a>
            </a>
          </li>
        </ul>
      </nav>
    </div>
