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
                <p>Dashboard / <span style="color: #BFC7F4;">Programs / Program</span></p>
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
            <div class="card pt-3 pb-2 mb-0 mt-0">
                <h3 class="p-3 ps-0">Programs</h3>
                    <div class="card p-2 pb-0 mb-3 text-light" style="background-color: #5E72E4; border:none;">
                        <h4>200</h4>
                        <p>PROGRAMS</p>
                    </div>   
                    
                    <div class="card p-4 mb-3">
                        <div class="top">
                            <div>
                                <img src="{{URL('images/CIDO-logo.png')}}" alt="" width="210px">
                            </div>
                            <div class="ms-5 mt-3">
                                <h3>Access to justice</h3>
                                <p>CIDO works with a team of lawyers and paralegals to ensure that vulnerable communities access Justice through Legal information and counselling, pro Bono services...</p>
                                <div class="page-numbers">
                                    <p class="text-secondary"> Date created May 22, 2022</p>
                                    <button class="btn bg-light"> <a href=""><i class="fa fa-trash"></i> Remove</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
</body>
</html>