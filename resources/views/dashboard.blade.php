@include('dashboard.dash-head')
<body>
    <header class="" id="head">
        <div class="header-left">
            <!-- logo  -->
            <div class="logo text-center">
                <a href=""><img class="mt-4" src="{{URL('images/CIDO-logo.png')}}" alt="cido-logo"></a>
            </div>
            <!-- dashboard/title  -->
            <div class=" text-light p-5 ps-4">
                <h3>Dashboard</h3>
                <p>Dashboard</p>
            </div>
        </div>
        <!-- profile  -->
        @include('dashboard.dash-drawer')

    </header>
    <!-- content  -->
    <div class="content">
        <div class="sidebar pt-4 ps-5 pe-5">
            <ul class="text-light">
                <li><a href="/dashboard"><i class="material-icons active">speed</i> Dashboard</a></li>
                <li><a href="/dash-programs"><i class="material-icons">layers</i> Programs</a></li>
                <li><a href="/user-management"><i class="material-icons">person</i> User Management</a></li>                
                <li><a href="/dash-projects"><i class="material-icons">layers</i> Projects</a></li>
            </ul>
        </div>

        <main class="main p-5 pt-0 ">
            <div class="stats row">
                <div class="col-md-6">
                    <div class="row">
                    <!-- donations  -->
                    <div class="col-md-6 card" >
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h5 class="card-title text-secondary">DONATIONS</h5>
                                <h6 class="card-subtitle mb-2 fs-3 fw-bold text-body-secondary">$2,000</h6>
                                <p class="card-text"> <span>+55%</span> since yesterday</p>
                            </div> 
                            <div class="card-icon">
                                <div class="container" style="background-color: #6C6AE4;">
                                    <i class="material-icons" >layers</i> 
                                </div>
                            </div>                   
                        </div>
                    </div> 

                    <!-- programs  -->
                    <div class="col-md-6 card " >
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h5 class="card-title text-secondary">PROGRAMS</h5>
                                <h6 class="card-subtitle mb-2 fs-3 fw-bold text-body-secondary">200</h6>
                                <p class="card-text"><span>+55%</span> since yesterday</p>
                            </div> 
                            <div class="card-icon">
                                <div class="container" style="background-color: #F5474E;">
                                    <i class="material-icons" >layers</i> 
                                </div>
                            </div>                   
                        </div>
                    </div> 
                    </div> 
                </div>      
                      
                <div class="col-md-6">
                    <div class="row">
                    <!-- projects  -->
                    <div class="col-md-6 card " >
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h5 class="card-title text-secondary">PROJECTS</h5>
                                <h6 class="card-subtitle mb-2 fs-3 fw-bold text-body-secondary">200</h6>
                                <p class="card-text"><span>+55%</span> since yesterday</p>
                            </div> 
                            <div class="card-icon">
                                <div class="container" style="background-color: #2DCFB8;">
                                    <i class="material-icons" >layers</i> 
                                </div>
                            </div>                   
                        </div>
                    </div>        
                            
                    <!-- volunteers  -->
                    <div class="col-md-6 card " >
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h5 class="card-title text-secondary">VOLUNTEERS</h5>
                                <h6 class="card-subtitle mb-2 fs-3 fw-bold text-body-secondary">200</h6>
                                <p class="card-text"><span>+55%</span> since yesterday</p>
                            </div> 
                            <div class="card-icon">
                                <div class="container" style="background-color: #FB7E40;">
                                    <i class="material-icons" >layers</i> 
                                </div>
                            </div>                   
                        </div>
                    </div> 
                    </div>
                </div>       
                            
            </div>

            <!-- activities  -->
            <div class="card activities mt-4 p-4" style="width: 100%;">
                <h3>All Activities</h3>
                <div class="table-responsive">
                <table class="table table-hover" style="width: vw;">
                    <thead>
                        <tr>
                        <th scope="col">Activity Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">Program</th>
                        <td>CIDO is working in...</td>
                        <td>30/10/2023</td>
                        <td><a href="/edit-dashprograms">Edit</a> <i class="fa fa-trash"><a href=""></a></i></td>
                        </tr>
                        <tr>
                        <th scope="row">Project</th>
                        <td>CIDO is working in...</td>
                        <td>30/10/2023</td>
                        <td><a href="/edit-dashprojects">Edit</a> <i class="fa fa-trash"><a href=""></a></i></td>
                        </tr>
                        <tr>
                        <th scope="row">Program</th>
                        <td>CIDO is working in...</td>
                        <td>30/10/2023</td>
                        <td><a href="/edit-dashprograms">Edit</a> <i class="fa fa-trash"><a href=""></a></i></td>
                        </tr>
                        
                    </tbody>
                </table>
                </div>
            </div>
        </main>
    </div>
    @include('dashboard.dash-footer')
</body>
</html>