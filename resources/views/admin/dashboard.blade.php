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
                <p><a href="/dashboard" >Dashboard </a></p>
            </div>
        </div>
        <!-- profile  -->
        @include('dashboard.dash-drawer')

    </header>
    <!-- content  -->
    <div class="content">
        @include('dashboard.sidebar')

        <main class="main p-5 pt-0 ">
            <div class="stats row">
                <div class="col-md-6">
                    <div class="row">
                    <!-- users  -->
                    
                    <div class="col-md-6 card" >
                    <a href="/user-management">
                        <div class="card-body d-flex justify-content-between mb-4">
                            <div>
                                <h5 class="card-title text-secondary">USERS</h5>
                                <h6 class="card-subtitle mb-2 fs-3 fw-bold text-body-secondary">{{$userCount}}</h6>
                                <!-- <p class="card-text"> <span>+55%</span> since yesterday</p> -->
                            </div> 
                            <div class="card-icon">
                                <div class="container" style="background-color: #6C6AE4;">
                                    <i class="material-icons" >layers</i> 
                                </div>
                            </div>                   
                        </div>
                        </a>
                    </div> 
                    

                    <!-- programs  -->
                    <div class="col-md-6 card " >
                    <a href="/dash-programs">
                        <div class="card-body d-flex justify-content-between mb-4">
                            <div>
                                <h5 class="card-title text-secondary">PROGRAMS</h5>
                                <h6 class="card-subtitle mb-2 fs-3 fw-bold text-body-secondary">{{$programCount}}</h6>
                                <!-- <p class="card-text"><span>+55%</span> since yesterday</p> -->
                            </div> 
                            <div class="card-icon">
                                <div class="container" style="background-color: #F5474E;">
                                    <i class="material-icons" >layers</i> 
                                </div>
                            </div>                   
                        </div>
                    </a>
                    </div> 
                    </div> 
                </div>      
                      
                <div class="col-md-6">
                    <div class="row">
                    <!-- projects  -->
                    <div class="col-md-6 card " >
                    <a href="/dash-projects">
                        <div class="card-body d-flex justify-content-between mb-4">
                            <div>
                                <h5 class="card-title text-secondary">PROJECTS</h5>
                                <h6 class="card-subtitle mb-2 fs-3 fw-bold text-body-secondary">{{$projectCount}}</h6>
                                <!-- <p class="card-text"><span>+55%</span> since yesterday</p> -->
                            </div> 
                            <div class="card-icon">
                                <div class="container" style="background-color: #2DCFB8;">
                                    <i class="material-icons" >layers</i> 
                                </div>
                            </div>                   
                        </div>
                    </a>
                    </div>        
                            
                    <!-- volunteers  -->
                    <div class="col-md-6 card " >
                        <a href="/dash-volunteers">
                        <div class="card-body d-flex justify-content-between mb-4">
                            <div>
                                <h5 class="card-title text-secondary">VOLUNTEERS</h5>
                                <h6 class="card-subtitle mb-2 fs-3 fw-bold text-body-secondary">{{$volunteerCount}}</h6>
                                <!-- <p class="card-text"><span>+55%</span> since yesterday</p> -->
                            </div> 
                            <div class="card-icon">
                                <div class="container" style="background-color: #FB7E40;">
                                    <i class="material-icons" >layers</i> 
                                </div>
                            </div>                   
                        </div>
                        </a>
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
                        @foreach($program as $item)
                        <tr>
                            <th scope="row">Program</th>
                            <td>{{$item->description}}</td>
                            <td>{{$item->created_at}}</td>
                            <td><a href="{{url('edit-program/'.$item->id)}}" class="text-success"><i class="fa fa-edit me-3"></i></a> <a href="{{url('delete-program/'.$item->id)}}"  class="text-danger"><i class="fa fa-trash"></i></a></td> 
                        </tr>
                        @endforeach

                        @foreach($project as $item)
                        <tr>
                            <th scope="row">Project</th>
                            <td>{{$item->description}}</td>
                            <td>{{$item->created_at}}</td>
                            <td><a href="{{url('edit-project/'.$item->id)}}" class="text-success"><i class="fa fa-edit me-3"></i></a> <a href="{{url('delete-project/'.$item->id)}}"  class="text-danger"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h6>See more <a href="/dash-programs" style="color: #f58220;">Programs</a> and <a href="dash-projects" style="color: #f58220;">Projects</a></h6>
                </div>
            </div>
        </main>
    </div>
    @include('dashboard.dash-footer')
</body>
</html>