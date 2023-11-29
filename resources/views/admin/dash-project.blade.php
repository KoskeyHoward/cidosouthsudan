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
                
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/dash-projects" style="color: #BFC7F4;">Projects /</a><a href="{{url('dash-projectItem/'.$project->id)}}" class="text-light">Project</a>
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

        <main class="programs-main p-4 pt-0">
            <div class="card pt-3 pb-2 mb-0 mt-0">
                    <div class="card p-2 pb-0 mb-3 text-light" style="background-color: #00A651; border:none; width: 180px; margin-left:0">
                        <h4>100</h4>
                        <p>PROJECTS</p>
                    </div>   
                    
                    <div class="card p-4 mb-3">
                    @if(isset($project))                        
                        <div class="top">
                            <div>
                                <img src="{{asset('images/projects/'.$project->project_image)}}" alt="project" width="210px">
                            </div>
                            
                            <div class="ms-5 mt-3">
                            
                                <h5>{{$project->title}}</h5>
                                <p>{{$project->description}}</p>
                                <div class="page-numbers">
                                    <p class="text-secondary">Duration:  {{$project->start_date}} To {{$project->end_date}}</p>
                                    <a href="{{url('delete-project/'.$project->id)}}" class="btn p-2 text-light" style="background-color: #f58220;" ><i class="fa fa-trash"></i> Remove</a>
                                </div>
                            
                            </div>
                            
                        </div>
                    @else
                        <p>No projects available.</p>
                    @endif
                    </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
</body>
</html>