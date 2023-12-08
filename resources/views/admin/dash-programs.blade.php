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
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/dash-programs" class="text-light">Programs</a></p>
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

        <main class="programs-main p-4 pt-0 ">
            <div class="card pt-3 pb-2 mb-0 mt-0">
                <h3 class="p-3 ps-0">Programs</h3>
                <div class="top ">
                    <div>
                        <div class="card p-2 pb-0 text-light" style="background-color: #00A651; border:none;">
                            <h4>{{$programCount}}</h4>
                            <p>PROGRAMS</p>
                        </div>
                        <div class="p-2 ps-0">
                            <p>Show 5 <i class="fa fa-caret-down"></i> entries of 25</p>
                        </div>
                    </div>

                    <div>
                        <div class="mb-3 mt-2">
                            <a href="/new-program" class="btn text-light ps-5 pe-5" style="text-decoration: none; background-color:#F58220">ADD PROGRAM</a>
                        </div>
                        <form class="box">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="search" placeholder="Search...">
                        </form>
                    </div>
                </div>

                <div class="table-responsive mt-3">
                <table class="table activities-table table-bodered table-striped">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Title</th>
                            <th>Description</th>
                            <!-- <th>Image</th> -->
                            <th>Partners</th>
                            <th> Start Date</th>
                            <th> End Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($program as $item)            
                    <tr> 
                    <!-- <td> {{$item->id}}</td> -->
                        <td><a href="{{url('dash-programItem/'.$item->id)}}"> {{$item->title}} </a></td>
                        <td width="30%">{{$item->description}}</td>
                        <!-- <td><img src="{{asset('images/program/'.$item->program_image)}}" width="70px" height="70px" alt=""></td> -->
                        <td>{{$item->partners}}</td>
                        <td>{{$item->start_date}}</td>
                        <td>{{$item->end_date}}</td>
                        <td><a href="{{url('edit-program/'.$item->id)}}" class="text-success"><i class="fa fa-edit me-3"></i></a> <a href="{{url('delete-program/'.$item->id)}}"  class="text-danger"><i class="fa fa-trash"></i></a></td> 
                    </tr>                                    
                    </tbody>
                    @endforeach
                </table>
                </div>

                <div class="page-numbers">
                    <p>Showing 1 to 10 of 57 entries</p>
                    <div class="pages">
                        <p>
                            <a href="">Previous</a>
                            <a href="">1</a>
                            <a href="">2</a>
                            <a href="">3</a>
                            <a href="">4</a>
                            <a href="">5</a>
                            <a href="">Next</a>
                        </p>
                    </div>
                </div>

            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
</body>
</html>