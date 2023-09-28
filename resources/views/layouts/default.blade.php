@include('partial.head')
<body>
    <header>
    <nav class="header bg-dark">
    <div class="container-fluid">
      <div class="row d-flex justify-content-between align-items-center">
        <div class="col-auto">
          <!-- drawer -->
          <a data-bs-toggle="offcanvas" href="#offcanvasDrawer" role="button" aria-controls="offcanvasExample" href="#"><i class="fa fa-bars text-light fs-2 d-md-none d-sm-inline-block d-lg-none d-xl-none"></i></a>
          <div class="offcanvas offcanvas-start d-md-none d-lg-none d-xl-none bg-black" tabindex="-1" id="offcanvasDrawer" aria-labelledby="offcanvasExampleLabel">
            <!-- drawer header(logo) -->
            <div class="offcanvas-header">
              <img src="{{URL('images/logo.png')}}" style="width: 100px;" class="offcanvas-title " id="offcanvasExampleLabel"/>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!-- drawer body -->
            <div class="offcanvas-body fs-4 align-items-start ms-0 ps-0">
              <ul>
              <li><a href="/">HOME</a></li>
              <li><a href="/programs">PROGRAMS</a></li>
              <li><a href="/projects">PROJECTS</a></li>
              <li><a href="/projects">VOLUNTEERS</a></li>
              <li><a href="/about">ABOUT US</a></li>
              <li><a href="/contact">CONTACT</a></li>
                <!-- <div class="dropdown d-inline-block">
                  <a class=" dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;">
                    More
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end bg-black">
                    <li><a class="dropdown-item" href="about.html">About us</a></li>
                    <li><a class="dropdown-item" href="mission.html">Our Mission</a></li>
                    <li><a class="dropdown-item" href="team.html">Our Team</a></li>
                  </ul>
                </div> -->
              </ul>
            </div>
          </div>
          <!-- logo -->
          <a class="logo " href="index.html">
            <img src="{{URL('images/logo.png')}}" class="mt-1 mb-0" alt="logo" >
          </a>
        </div>
        <!-- header right list  -->
        <div class="col-auto d-inline-flex ">
          <div class="header-right-list d-md-block d-none d-lg-block d-xl-block">
            <ul>
              <li><a href="/">HOME</a></li>
              <li><a href="/programs">PROGRAMS</a></li>
              <li><a href="/projects">PROJECTS</a></li>
              <li><a href="/projects">VOLUNTEERS</a></li>
              <li><a href="/about">ABOUT US</a></li>
              <li><a href="/contact">CONTACT</a></li>
              <!-- <div class="dropdown d-inline-block">
                <a class=" dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;">
                  More
                </a>
                <ul class="dropdown-menu dropdown-menu-end bg-black">
                  <li><a class="dropdown-item" href="about.html">About us</a></li>
                  <li><a class="dropdown-item" href="mission.html">Our Mission</a></li>
                  <li><a class="dropdown-item" href="team.html">Our Team</a></li>
                </ul>
              </div> -->
            </ul>
          </div>
          <div class="ms-3">
            <li class="donate text-light"><a href=""><button class="" type="button"> DONATE</button></a></li>
          </div>
        </div>
      </div>
      </div>
    </nav>
    </header>

    <main class="min-vh-100">
        @yield('page-content')
    </main>

    <!-- footer  -->
  @include('partial.footer')
    
</body>
</html>