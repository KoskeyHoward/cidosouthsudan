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
                <h3>Programs</h3>
                <p>Dashboard / <span style="color: #BFC7F4;">User</span></p>
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
                <li><a href="/dashboard"><i class="material-icons">speed</i> Dashboard</a></li>
                <li><a href="/dash-programs"><i class="material-icons">layers</i> Programs</a></li>
                <li><a href="/user-management"><i class="material-icons">person</i> User Management</a></li>                
                <li><a href="/dash-projects"><i class="material-icons">layers</i> Projects</a></li>
            </ul>
        </div>

        <main class="programs-main p-4 pt-0">
            <div class="card " style="border: none;">
                <div class="pb-4 p-5">
                    <h2>Create User</h2>
                </div>

                <div class="p-5 pt-0">                    
                    <form method="" action="" class="">
                        <div class="">                      
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">First name</label>
                                <input type="name" class="form-control" placeholder="enter first name" id="exampleInputPassword1">
                            </div>            
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Last Name</label>
                                <input type="name" class="form-control" placeholder="enter first name">
                            </div>            
                            <div class="mb-3">
                                <label for="role" class="form-label fw-bold">Role</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div> 

                            <button type="submit" class="btn" style="background-color: #F58220; color:white;">Create User</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
</body>
</html>