@include('dashboard.dash-head')
<body>
    <header class="d-flex justify-content-between ps-5 p-4 pb-0" id="head">
        <div class="header-left d-flex">
            <!-- logo  -->
            <div class="logo text-center">
                <a href=""><img class="mt-4" src="{{URL('images/CIDO-logo.png')}}" alt="cido-logo"></a>
            </div>
            <!-- dashboard/title  -->
            <div class=" text-light p-5 ps-4">
                <h3>Programs</h3>
                <p>Dashboard / <span style="color: #BFC7F4;">Programs</span></p>
            </div>
        </div>
        <!-- profile  -->
        <div class="profile text-light p-5">
            <p><i class="fa fa-user"></i> Super Admin <i class="fa fa-caret-down"></i></p>
        </div>
    </header>
    <!-- content  -->
    <div class="content d-flex pt-0 p-5 pe-2">
        <!-- side-bar  -->
        <div class="sidebar pt-4 ps-5 pe-5">
            <ul class="text-light">
                <li><a href="/dashboard"><i class="material-icons">speed</i> Dashboard</a></li>
                <li><a href="/dash-programs"><i class="material-icons">layers</i> Programs</a></li>
                <li><a href="/user-management"><i class="material-icons">person</i> User Management</a></li>                
                <li><a href="/dash-projects"><i class="material-icons">layers</i> Projects</a></li>
            </ul>
        </div>

        <main style="width: 75%;">
            <div class="card p-5 pt-3 pb-2 m-4 mb-0 mt-0">
                <h3 class="p-3 ps-0">Programs</h3>
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="card p-2 pb-0 text-light" style="background-color: #5E72E4; border:none;">
                            <h4>200</h4>
                            <p>PROGRAMS</p>
                        </div>
                        <div class="p-2 ps-0">
                            <p>Show 5 <i class="fa fa-caret-down"></i> entries of 25</p>
                        </div>
                    </div>

                    <div>
                        <div class="mb-3 mt-2">
                            <button class="btn p-3" style="background-color: #F58220;"><a href="/new-program" style="text-decoration: none; color:white;">ADD NEW PROGRAM</a></button>
                        </div>
                        <form class="box">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="search" placeholder="Search...">
                        </form>
                    </div>
                </div>

                <table class="table table-hover table-bordered border-secondary">
                    <thead class="table-active">
                        <tr>
                            <th scope="col">Program Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"><a href="">Women Rights and...</a></td>
                            <td>CIDO is working in...</td>
                            <td>30/10/2023</td>
                            <td>Edit <i class="fa fa-trash"></i></td>
                        </tr>

                        <tr>
                            <td scope="row"><a href="">Access To Justice</a></td>
                            <td>CIDO is working in...</td>
                            <td>30/10/2023</td>
                            <td>Edit <i class="fa fa-trash"></i></td>
                        </tr>

                        <tr>
                            <td scope="row"><a href="">Peace and Security</a></td>
                            <td>CIDO is working in...</td>
                            <td>30/10/2023</td>
                            <td>Edit <i class="fa fa-trash"></i></td>
                        </tr>

                        <tr>
                            <td scope="row"><a href="">Health and Nutrition</a></td>
                            <td>CIDO is working in...</td>
                            <td>30/10/2023</td>
                            <td>Edit <i class="fa fa-trash"></i></td>
                        </tr>

                        <tr>
                            <td scope="row"><a href="">Women Empowerement</a></td>
                            <td>CIDO is working in...</td>
                            <td>30/10/2023</td>
                            <td>Edit <i class="fa fa-trash"></i></td>
                        </tr>
                        
                    </tbody>
                </table>

                <div class="d-flex justify-content-between">
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
</body>
</html>