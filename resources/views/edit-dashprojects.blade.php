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
                <p>Dashboard / <span style="color: #BFC7F4;">Projects / Project</span></p>
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
            <div class="card" style="border: none;">
                <div class="mb-4 p-3 rounded-3" style="background-color: #E8E8E8;">
                    <h3>Edit Project</h3>
                </div>

                <div class="p-5 pt-0">                    
                    <form method="" action="" class="">
                        <div class="">                      
                            <div class="mb-3">
                                <label for="title" class="form-label fw-bold">Title</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>            
                            <div class="mb-3">
                                <label for="Description" class="form-label fw-bold">Description</label>
                                <textarea class="form-control" id="exampleInputPassword1"></textarea>
                            </div>            
                            <div class="mb-3">
                                <label for="image" class="form-label fw-bold">Upload Image</label>
                                <input type="file" class="form-control" id="exampleInputPassword1">
                            </div> 

                            <p class="text-secondary fw-bold">Supported format: PNG,SVG</p>           
                            <button class="btn" style="border: 1px solid #F58220; color:#F58220;">Cancel</button>
                            <button type="submit" class="btn ms-4" style="background-color: #F58220; color:white;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
</body>
</html>