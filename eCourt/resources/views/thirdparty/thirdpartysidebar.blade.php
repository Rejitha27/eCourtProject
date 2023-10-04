<!-- Sidebar -->
<div class="sidebar" style="position: absolute; height:1000px">
    <nav>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                    src="{{asset('storage/ecourt/defaultPhoto.jpg')}}"
                    alt="User profile picture">
                    <h6 style="color: white;">{{auth('thirdparty')->user()->name}}</h6>
                </div>
            </div>
            <div class="text-center">
                <li class="nav-item">
                    <h6 style="color: white; text-decoration:underline;">Dashboard</h6>
                </li>
            </div>
        </ul>
    </nav>
</div>
