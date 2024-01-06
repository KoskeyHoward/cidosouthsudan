@include('dashboard.dash-head')
<body>
    <header id="head">
        <div class="header-left">
            <!-- logo  -->
            <div class="logo text-center">
                <a href=""><img class="mt-4" src="{{URL('images/CIDO-logo.png')}}" alt="cido-logo"></a>
            </div>
            <!-- dashboard/title  -->
            <div class=" text-light p-4 pt-5">
                <h3>Projects</h3>
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/dash-projects" style="color: #BFC7F4;">Projects /</a><a href="{{url('edit-project/'.$project->id)}}" class="text-light"> Edit-Project</a></p>
            </div>
        </div>
        <!-- profile  -->
        @include('dashboard.dash-drawer')
    </header>
    <!-- content  -->
    <div class="content">
        <!-- side-bar  -->
        @include('dashboard.sidebar')

        <main class="programs-main p-4 pt-0">
            <div class="card" style="border: none;">
                <div class="mb-4 p-3 rounded-3" style="background-color: #E8E8E8;">
                    <h3>Edit Project</h3>
                </div>

                @if (session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif
                <div class="p-5 pt-0">                    
                <form action="{{url('update-project/'.$project->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')    
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="mb-2 fw-bold" for=""> Image</label>
                                    <input type="file" name="project_image" class="form-control"> 
                                </div>
                                <div class="col-lg-6">
                                    <img src="{{asset('images/projects/'.$project->project_image)}}" class="" width="100px" height="100px" alt="project-image">
                                </div>
                            </div>                                                        
                        </div>  

                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Title</label>
                            <input type="text" name="title" value="{{ $project->title }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Category</label>
                            <input type="text" name="category" value="{{$project->category}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Description</label>
                            <textarea type="text" name="description" value="{{$project->description}}" class="form-control"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">                            
                                <div class="form-group mb-3">
                                    <label class="mb-2 fw-bold" for=""> Image 1 description</label>
                                    <input type="text" name="image1_description" value="{{$project->image1_description}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">                            
                                <div class="form-group mb-3">
                                    <label class="mb-2 fw-bold" for=""> Image1</label>
                                    <input type="file" name="image1" class="form-control">
                                    <img src="{{asset('images/projects/'.$project->image1)}}" class="mt-3" width="100px" height="100px" alt="project-image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">                            
                                <div class="form-group mb-3">
                                    <label class="mb-2 fw-bold" for=""> Image 2 description</label>
                                    <input type="text" name="image2_description" value="{{$project->image2_description}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">                            
                                <div class="form-group mb-3">
                                    <label class="mb-2 fw-bold" for=""> Image2</label>
                                    <input type="file" name="image2" class="form-control">
                                    <img src="{{asset('images/projects/'.$project->image2)}}" class="mt-3" width="100px" height="100px" alt="project-image">
                                </div>
                            </div>
                        </div>
            
                        <p class="text-secondary fw-bold">Supported format: PNG,SVG</p>           
                            <a href="/dash-projects" class="btn" style="border: 1px solid #F58220; color:#F58220;">Cancel</a>
                            <button type="submit" class="btn ms-4" style="background-color: #F58220; color:white;">Update</button>
                    </form>
                </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
</body>
</html>