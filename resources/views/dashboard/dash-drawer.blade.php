<div class="profile d-flex text-light p-3 pt-5">
            <!-- <p><i class="fa fa-user"></i> Super Admin <i class="fa fa-caret-down"></i></p> -->
            <div class="dropdown">
                <button class="btn dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Super Admin
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Log out</a></li>
                </ul>
            </div>

            <div class="ms-2">
                <!-- drawer -->
                <a data-bs-toggle="offcanvas" href="#offcanvasDrawer" role="button" aria-controls="offcanvasExample" href="#"><i class="fa fa-bars text-light fs-2 d-md-inline-block d-sm-inline-block d-lg-none d-xl-none"></i></a>
                <div class="offcanvas offcanvas-start d-lg-none d-xl-none" style="background-color: #000;" tabindex="-1" id="offcanvasDrawer" aria-labelledby="offcanvasExampleLabel">
                    <!-- drawer header(logo) -->
                    <div class="offcanvas-header">
                    <img src="{{URL('images/logo.png')}}" style="width: 100px;" class="offcanvas-title " id="offcanvasExampleLabel"/>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <!-- drawer body -->
                    <div class="offcanvas-body fs-4 align-items-start ms-0 ps-0">
                    <ul class="text-light">
                        <li><a href="/dashboard"><i class="material-icons active">speed</i> Dashboard</a></li>
                        <li><a href="/dash-programs"><i class="material-icons">layers</i> Programs</a></li>               
                        <li><a href="/dash-projects"><i class="material-icons">layers</i> Projects</a></li>
                        <li><a href="/user-management"><i class="material-icons">person</i> Users</a></li> 
                        <li><a href="/dash-volunteers"><i class="material-icons">person</i> Volunteers</a></li> 
                    </ul>
                    </div>
                </div>
                
            </div>
        </div>