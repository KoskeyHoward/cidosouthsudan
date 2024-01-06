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
                <h3>Programs</h3>
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/dash-programs" style="color: #BFC7F4;">Programs /</a><a href="{{url('dash-programItem/'.$program->id)}}" class="text-light">Program</a>
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

        <main class="programs-main p-4 pt-0">
            <div class="card pt-3 pb-2 mb-0 mt-0">
                <h3 class="p-3 ps-0">Programs</h3>
                    <div class="card p-2 pb-0 mb-3 text-light" style="background-color: #00A651; border:none; width: 180px; margin-left:0">
                        <h4>{{$programCount}}</h4>
                        <p>PROGRAMS</p>
                    </div>   
                    
                    <div class="card p-4 mb-3">
                    @if(isset($program))
                        <div class="top">
                            <div>
                                <img src="{{asset('images/programs/'.$program->program_image)}}" alt="" width="210px">
                            </div>
                            <div class="ms-5 mt-3">
                                <h3>{{$program->title}}</h3>
                                <p>{{$program->description}}</p>
                                <div class="page-numbers">
                                    <p class="text-secondary"> Duration:  {{$program->start_date}} To {{$program->end_date}}</p>
                                    <a href="{{url('delete-program/'.$program->id)}}" class="btn p-2 text-light" style="background-color: #f58220;" ><i class="fa fa-trash"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        @else
                        <p>No program available.</p>
                    @endif
                    </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
</body>
</html>