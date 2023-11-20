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
                <h3>Projects</h3>
                
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/user-profile" class="text-light">User Profile/</a>
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
            <div class="card pt-3 pb-2 mb-0 mt-0">
                <h3 class="p-3 ps-0">Profile</h3>
                    <div class="card p-2 pb-0 mb-3 text-light" style="background-color: #00A651; border:none;">
                        <h4>10</h4>
                        <p>Users</p>
                    </div>   
                    
                    <div class="card p-4 mb-3">                                          
                        <div class="top">                            
                            <div class="">
                                <img src="{{URL('images/testimonial-icon.webp')}}" alt="profile" width="110px">

                                
                            </div>                               
                                                        
                            <div class="ms-1 mt-3">                      
                        
                                <div class="page-numbers">
                                    <button class="btn bg-success text-light"> <a href="/edit-profile"> Edit Profile</a></button>
                                </div>                            
                            </div>                            
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-3">
                                <div class="mb-4">
                                    <h5 class="card">Name: John Doe</h5>
                                </div>
                                <div class="">
                                    <h5 class="card">Email: johndoe@gmail.com</h5>
                                </div>                                    
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="mb-4">
                                    <h5 class="card">Gender: Male</h5>
                                </div>
                                <div class="">
                                    <h5 class="card">Phone: +254712345678</h5>
                                </div>                                    
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="mb-1">
                                    <h5 class="card">Category: Employee</h5>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="">
                                    <h5 class="card">Role: General Manager</h5>
                                </div>                                    
                            </div>
                            
                            <div class=" socials">
                                <a class="me-3" href=""><i class="fa fa-facebook"> @johndoe</i></a>
                                <a class="me-3" href=""><i class="fa fa-instagram"> @johndoe</i></a>
                                <a href=""><i class="fa fa-twitter"> @john_doe</i></a>
                            </div>                            
                        </div>                       
                    </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
</body>
</html>