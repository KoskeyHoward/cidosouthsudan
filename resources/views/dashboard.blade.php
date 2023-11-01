@include('dashboard.dash-head')
<body>
    <header class="d-flex justify-content-between ps-5 p-4 pb-0" id="head">
        <div class="header-left d-flex">
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
        <div class="profile text-light p-5">
            <p><i class="fa fa-user"></i> Super Admin <i class="fa fa-caret-down"></i></p>
        </div>
    </header>
    <!-- content  -->
    <div class="content d-flex pt-0 p-5 pe-2">
        <div class="sidebar pt-4 ps-5 pe-5">
            <ul class="text-light">
                <li><a href="/dashboard"><i class="material-icons active">speed</i> Dashboard</a></li>
                <li><a href="/dash-programs"><i class="material-icons">layers</i> Programs</a></li>
                <li><a href="/user-management"><i class="material-icons">person</i> User Management</a></li>                
                <li><a href="/dash-projects"><i class="material-icons">layers</i> Projects</a></li>
            </ul>
        </div>

        <main class="main p-5 pt-0 pe-0 ps-4">
            <div class="stats d-flex">
                <!-- donations  -->
                <div class="card" style="width: 230px;">
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

                <div class="card ms-2" style="width: 230px;">
                    <div class="card-body d-flex justify-content-between">
                        <div>
                            <h5 class="card-title text-secondary">PROGRAMS</h5>
                            <h6 class="card-subtitle mb-2 fs-3 fw-bold text-body-secondary">$2,000</h6>
                            <p class="card-text"><span>+55%</span> since yesterday</p>
                        </div> 
                        <div class="card-icon">
                            <div class="container" style="background-color: #F5474E;">
                                <i class="material-icons" >layers</i> 
                            </div>
                        </div>                   
                    </div>
                </div>        
                            
                <div class="card ms-2" style="width: 230px;">
                    <div class="card-body d-flex justify-content-between">
                        <div>
                            <h5 class="card-title text-secondary">PROJECTS</h5>
                            <h6 class="card-subtitle mb-2 fs-3 fw-bold text-body-secondary">$2,000</h6>
                            <p class="card-text"><span>+55%</span> since yesterday</p>
                        </div> 
                        <div class="card-icon">
                            <div class="container" style="background-color: #2DCFB8;">
                                <i class="material-icons" >layers</i> 
                            </div>
                        </div>                   
                    </div>
                </div>        
                            
                <div class="card ms-2" style="width: 230px;">
                    <div class="card-body d-flex justify-content-between">
                        <div>
                            <h5 class="card-title text-secondary">VOLUNTEERS</h5>
                            <h6 class="card-subtitle mb-2 fs-3 fw-bold text-body-secondary">$2,000</h6>
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

            <!-- activities  -->
            <div class="card activities mt-4 p-4" style="width: 100%;">
                <h3>All Activities</h3>
                <table class="table table-hover">
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
                        <td>Edit <i class="fa fa-trash"></i></td>
                        </tr>
                        <tr>
                        <th scope="row">Project</th>
                        <td>CIDO is working in...</td>
                        <td>30/10/2023</td>
                        <td>Edit <i class="fa fa-trash"></i></td>
                        </tr>
                        <tr>
                        <th scope="row">Program</th>
                        <td>CIDO is working in...</td>
                        <td>30/10/2023</td>
                        <td>Edit <i class="fa fa-trash"></i></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>