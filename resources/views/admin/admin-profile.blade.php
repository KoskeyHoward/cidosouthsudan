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
                <h3>Admin Profile</h3>
                
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/admin-profile" class="text-light">admin Profile/</a>
                <!-- <a href="/dash-project" class="text-light">Project</a> -->
            </p>
            </div>
        </div>
        <!-- profile  -->
        @include('dashboard.dash-drawer')
    </header>
    <!-- content  -->
    <div class="content">
        <!-- side-bar  -->
        @include('dashboard.sidebar')

        <main class="programs-main p-1 pt-0">
            <div class="card pt-1 pb-2 mb-0 mt-0">
                <h3 class="p-1 ps-0">Profile</h3>
                    <div class="card p-2 pb-0 mb-3 text-light" style="background-color: #00A651; border:none; width: 180px; margin-left:0">
                        <h4>{{$userCount}}</h4>
                        <p>Users</p>
                    </div>   
                    
                    <div class="card p-4 mb-3">                                          
                        <div class="top"> 
                            @if($user->profile_image)                           
                            <div class="">
                                <img src="{{asset('images/users/'.$user->profile_image)}}" alt="profile" width="110px">                                
                            </div>
                            @endif                               
                                                        
                            <div class="ms-1 mt-3">                      
                        
                                <div class="page-numbers">
                                    <a class="btn text-light" href="{{url('edit-admin/'.$user->id)}}" style="background-color: #f58220;"> Edit Profile</a>
                                </div>                            
                                <div class="page-numbers mt-3">
                                    <a class="btn text-light" href="/change-password" style="background-color: #f58220;"> Change Password</a>
                                </div>                            
                            </div>                            
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-3">
                                <div class="mb-4">
                                    <h5 class="card">Name: {{$user->name}}</h5>
                                </div>
                                <div class="">
                                    <h5 class="card">Email: {{$user->email}}</h5>
                                </div>                                    
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="mb-4">
                                    <h5 class="card">Gender: {{$user->gender}}</h5>
                                </div>
                                <div class="">
                                    <h5 class="card">Phone: {{$user->phone_number}}</h5>
                                </div>                                    
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="mb-1">
                                    <h5 class="card">Profession: {{$user->profession}}</h5>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="">
                                    <h5 class="card">Role: {{$roleName}}</h5>
                                </div>                                    
                            </div>
                            
                            <!-- <div class=" socials">
                                <a class="me-3" href=""><i class="fa fa-facebook"> @johndoe</i></a>
                                <a class="me-3" href=""><i class="fa fa-instagram"> @johndoe</i></a>
                                <a href=""><i class="fa fa-twitter"> @john_doe</i></a>
                            </div>                             -->
                        </div>                       
                    </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
</body>
</html>