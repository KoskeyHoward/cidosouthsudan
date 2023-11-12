@include('dashboard.dash-head')
<body>
    <header  id="head">
        <div class="header-left">
            <!-- logo  -->
            <div class="logo text-center">
                <a href=""><img class="mt-4" src="{{URL('images/CIDO-logo.png')}}" alt="cido-logo"></a>
            </div>
            <!-- dashboard/title  -->
            <div class=" text-light p-4 pt-5">
                <h3>Programs</h3>
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/dash-programs" style="color: #BFC7F4;">Programs /</a><a href="{{url('edit-program/'.$program->id)}}" class="text-light"> Edit-Project</a></p>
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
            <div class="card " style="border: none;">
                <div class="mb-4 p-3 rounded-3" style="background-color: #E8E8E8;">
                    <h3>Edit Program</h3>
                </div>

                @if (session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif
                <div class="p-5 pt-0">                    
                <form action="{{url('update-program/'.$program->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')                       
                        <div class="form-group mb-3">
                            <label for=""> Title</label>
                            <input type="text" name="title" value="{{ $program->title }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> description</label>
                            <input type="text" name="description" value="{{$program->description}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Partners</label>
                            <input type="text" name="partners" value="{{$program->description}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> start date</label>
                            <input type="date" name="start_date" value="{{$program->start_date}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> End date</label>
                            <input type="date" name="end_date" value="{{$program->end_date}}"  class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Image</label>
                            <input type="file" name="program_image" class="form-control">
                            <img src="{{asset('images/programs/'.$program->program_image)}}" width="100px" height="100px" alt="program-image">
                        </div>
            
                        <p class="text-secondary fw-bold">Supported format: PNG,SVG</p>           
                            <a href="/dash-programs" class="btn" style="border: 1px solid #F58220; color:#F58220;">Cancel</a>
                            <button type="submit" class="btn ms-4" style="background-color: #F58220; color:white;">Update</button>
                    </form>
                </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
</body>
</html>