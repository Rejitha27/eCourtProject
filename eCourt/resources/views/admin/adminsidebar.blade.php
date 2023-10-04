    <!-- Sidebar -->
    <div class="sidebar" style="position: absolute; height:1000px">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('ecourt/Lip21_person_6.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>

      </div>




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{route('caseschedule')}}"  class="{{ Request::is('caseschedule') ? 'active' : '' }}">

              <p style="color: white;">
              Case Schedule

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('closingrequests')}}" class="nav-link" class="{{ Request::is('closingrequests') ? 'active' : '' }}">

              <p style="color: white;">
              Closing Requests

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('casestatus')}}" class="nav-link" class="{{ Request::is('casestatus') ? 'active' : '' }}">

              <p style="color: white;">
              Case Status

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('clientdetails')}}" class="nav-link" class="{{ Request::is('clientdetails') ? 'active' : '' }}">

              <p style="color: white;">
              Client Details

              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{route('lawyerdetails')}}" class="nav-link" class="{{ Request::is('lawyerdetails') ? 'active' : '' }}">

              <p style="color: white;">
                Lawyer Details

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('crimerate')}}" class="nav-link" class="{{ Request::is('crimerate') ? 'active' : '' }}">

              <p style="color: white;">
                Crime Rate

              </p>
            </a>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
