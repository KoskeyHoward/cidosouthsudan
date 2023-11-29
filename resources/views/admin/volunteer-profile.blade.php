@include('dashboard.dash-head')
<body>
    <header class="" id="head">
        <div class="header-left ">
            <!-- logo  -->
            <div class="logo text-center">
                <a href=""><img class="mt-4" src="{{URL('images/CIDO-logo.png')}}" alt="cido-logo"></a>
            </div>
            <!-- dashboard/title  -->
            <div class=" text-light p-4 pt-5">
                <h3>Volunteers</h3>
                
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/dash-volunteers" style="color: #BFC7F4;">Volunteers / </a><a href="{{url('dash-volunteerItem/'.$volunteer->id)}}" class="text-light">Volunteer Profile</a>
            </p>
            </div>
        </div>
        <!-- profile  -->
        @include('dashboard.dash-drawer')
    </header>
    <!-- content  -->
    <div class="content">
        <!-- side-bar  -->
        <div class="sidebar pt-4 ps-5 pe-5">
            <ul class="text-light">
                <li><a href="/dashboard"><i class="material-icons active">speed</i> Dashboard</a></li>
                <li><a href="/dash-programs"><i class="material-icons">layers</i> Programs</a></li>
                <li><a href="/dash-projects"><i class="material-icons">layers</i> Projects</a></li>
                <li><a href="/user-management"><i class="material-icons">person</i> Users</a></li>
                <li><a href="/dash-volunteers"><i class="material-icons">person</i> volunteers</a></li>
            </ul>
        </div>

        <main class="programs-main p-1 pt-0">
            <div class="card pt-1 pb-2 mb-0 mt-0">
                <h3 class="p-1 ps-0">Profile</h3>
                    <div class="card p-2 pb-0 mb-3 text-light" style="background-color: #00A651; border:none; width: 180px; margin-left:0">
                        <h4>10</h4>
                        <p>Users</p>
                    </div>   
                    
                    <div class="card p-4 mb-3">
                    @if(isset($volunteer))                                          
                        <div class="top">                            
                            <div class="">
                                <img src="{{asset('images/volunteers/'.$volunteer->volunteer_image)}}" alt="profile" width="110px"> 
                            </div>                               
                                                        
                            <div class="ms-1 mt-3">                      
                        
                                <div class="page-numbers">
                                    <a class="btn text-light" href="{{url('edit-volunteer/'.$volunteer->id)}}" style="background-color: #f58220;"> Edit Profile</a>
                                </div>                            
                            </div>                            
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-3">
                                <div class="mb-4">
                                    <h5 class="card">Name: {{$volunteer->name}}</h5>
                                </div>
                                <div class="">
                                    <h5 class="card">Email: {{$volunteer->email}}</h5>
                                </div>                                    
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="mb-4">
                                    <h5 class="card">Gender: {{$volunteer->gender}}</h5>
                                </div>
                                <div class="">
                                    <h5 class="card">Phone: {{$volunteer->phone_number}}</h5>
                                </div>                                    
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <div class="">
                                    <h5 class="card">Profession: {{$volunteer->profession}}</h5>
                                </div>                                    
                            </div>
                            
                            <div class=" socials">
                                <a class="me-3" href=""><i class="fa fa-facebook"> {{$volunteer->facebook}}</i></a>
                                <a class="me-3" href=""><i class="fa fa-instagram"> {{$volunteer->instagram}}</i></a>
                                <a href=""><i class="fa fa-twitter"> {{$volunteer->twitter}}</i></a>
                            </div>                            
                        </div>  
                    @else
                        <p>No Volunteer available.</p>
                    @endif                     
                    </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
</body>
</html>