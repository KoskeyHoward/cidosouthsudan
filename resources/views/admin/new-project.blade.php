@include('dashboard.dash-head')
<body>
    <header class="" id="head">
        <div class="header-left">
            <!-- logo  -->
            <div class="logo text-center">
                <a href=""><img class="mt-4" src="{{URL('images/CIDO-logo.png')}}" alt="cido-logo"></a>
            </div>
            <!-- dashboard/title  -->
            <div class=" text-light p-4 pt-5">
                <h3>Projects</h3>
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/dash-projects" style="color: #BFC7F4;">Projects /</a><a href="/new-project" class="text-light"> New-Project</a></p>
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
            <div class="card" style="border: none;">
                <div class="pb-4 p-5">
                    <h3>Create Project</h3>
                    <!-- <p>These are projects provided by CIDO.</p> -->
                </div>

                @if (session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif
                <div class="p-5 pt-0">                    
                <form action="{{url('new-project')}}" method="POST" enctype="multipart/form-data">
                        @csrf   
                        <!-- project image  -->
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for="">Project Image</label>
                            <input type="file" name="project_image" class="form-control">
                        </div>       
                        <!-- title -->
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <!-- category  -->
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Category</label>
                            <input type="text" name="category" class="form-control">
                        </div>
                        <!-- description  -->
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Description</label>
                            <textarea type="text" name="description" class="form-control"></textarea>
                        </div>
                        <!-- images and description  -->
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for="">Image 1</label>
                            <input type="file" name="image1" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Image 1 description</label>
                            <input type="text" name="image1_description" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for="">Image 2</label>
                            <input type="file" name="image2" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Image 2 description</label>
                            <input type="text" name="image2_description" class="form-control">
                        </div>
                        <!-- dates  -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label class="mb-2 fw-bold" for=""> Start date</label>
                                    <input type="date" name="start_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label class="mb-2 fw-bold" for=""> End date</label>
                                    <input type="date" name="end_date" class="form-control">
                                </div>
                            </div>
                        </div>                       
            
                        <p class="text-secondary fw-bold">Supported format: PNG,SVG</p>           
                            <button class="btn" style="border: 1px solid #F58220; color:#F58220;">Cancel</button>
                            <button type="submit" class="btn ms-4" style="background-color: #F58220; color:white;">Submit</button>
                    </form>
                </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
</body>
</html>