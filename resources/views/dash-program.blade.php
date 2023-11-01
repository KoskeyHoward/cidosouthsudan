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
                <p>Dashboard / <span style="color: #BFC7F4;">Programs / Program</span></p>
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
                    <div class="card p-2 pb-0 mb-3 text-light" style="background-color: #5E72E4; border:none; width:25%">
                        <h4>200</h4>
                        <p>PROGRAMS</p>
                    </div>   
                    
                    <div class="card p-4 mb-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <img src="{{URL('images/CIDO-logo.png')}}" alt="" width="210px">
                            </div>
                            <div class="ms-5">
                                <h3>Access to justice</h3>
                                <p>CIDO works with a team of lawyers and paralegals to ensure that vulnerable communities access Justice through Legal information and counselling, pro Bono services...</p>
                                <div class="d-flex justify-content-between">
                                    <p class="text-secondary"> Date created May 22, 2022</p>
                                    <button class="btn bg-light"> <a href=""><i class="fa fa-trash"></i> Remove</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </main>

    </div>
</body>
</html>