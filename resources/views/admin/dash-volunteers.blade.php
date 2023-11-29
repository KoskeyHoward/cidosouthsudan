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
                <h3>Volunteers</h3>
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/dash-volunteers" class="text-light">Volunteers</a></p>
            </div>
        </div>
        <!-- profile  -->
        @include('dashboard.dash-drawer')
    </header>
    <!-- content  -->
    <div class="content ">
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
                <h3 class="p-3 ps-0">Volunteers</h3>
                <div class="top">
                    <div>
                        <!-- <div class="card p-2 pb-0 text-light" style="background-color: #5E72E4; border:none;">
                            <h4>200</h4>
                            <p>USERS</p>
                        </div> -->
                        <!-- <div class="p-2 ps-0 ">
                            <p class="fw-bold text-secondary">All Users</p>
                        </div> -->
                    </div>

                    <div>
                        <div class="mb-3 mt-2">
                            <a href="/new-volunteer" class="btn text-light ps-5 pe-5" style="text-decoration: none; background-color:#F58220">ADD VOLUNTEER</a>
                        </div>
                        <form class="box">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="search" placeholder="Search...">
                        </form>
                    </div>
                </div>
                <hr>

                <div class="table-responsive">
                <table class="table table-hover table-bordered border-secondary">
                    <thead class="table-active">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">Profession</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($volunteer as $item)
                        <tr>
                            <td scope="row"><a href="{{url('dash-volunteerItem/'.$item->id)}}">{{$item->name}}</a></td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->gender}}</td>
                            <td>{{$item->phone_number}}</td>
                            <td>{{$item->profession}}</td>
                            <td><a href="{{url('edit-volunteer/'.$item->id)}}"><i class="fa fa-edit me-3"></i></a> <a href="{{url('delete-volunteer/'.$item->id)}}"><i class="fa fa-trash"></i></a></td>
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