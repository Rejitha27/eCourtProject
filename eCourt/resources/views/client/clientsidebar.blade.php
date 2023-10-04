<!-- Sidebar -->
<div class="sidebar" style="position: absolute; height:1000px">

      <!-- Sidebar Menu -->
      <nav>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <div class="card-body box-profile">
                <div class="text-center">
                <img src="{{asset('storage/eCourt/'.auth('client')->user()->profile_photo)}}" id="clientPhoto" class="profile-user-img img-fluid img-circle">
                <h6 style="color: white;">{{auth('client')->user()->name}}</h6>
                </div>
            </div>
          <div class="text-center">
            <li class="nav-item">
                <a href="#" class="nav-link" style="color: white;">
                    <a style="color: white;" href="{{route('client.dashboard')}}" method="get" class="{{ Request::is('client-dashboard') ? 'active' : '' }}"> Dashboard</a>
                </a>
            </li>
          <li class="nav-item">
            <a href="../widgets.html" style="color: white;"  class="nav-link">
              <a style="color: white;" href="{{route('client.filecase')}}" method="get" class="{{ Request::is('client-filecase') ? 'active' : '' }}"> File A Case</a>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" style="color: white;">
              <a style="color: white;" href="{{route('client.casestatus')}}" method="get" class="{{ Request::is('client-casestatus') ? 'active' : '' }}"> Case Status </a>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" style="color: white;">
              <a style="color: white;" href="{{route('client.caseschedule')}}" method="get" class="{{ Request::is('client-caseschedule') ? 'active' : '' }}">Case Schedule</a>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" style="color: white;">
              <a style="color: white;" href="{{route('client.caseclosing')}}" method="get" class="{{ Request::is('client-caseclosing') ? 'active' : '' }}">Case Closing</a>
            </a>
          </li>

        </ul>
      </nav>
    </div>
</div>

<script>
    function readURL(input)
    {
        if(input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function(e)
            {
                $('clientPhoto')
                .attr(src,e.target.result)
                .width(100)
                .height(100);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
