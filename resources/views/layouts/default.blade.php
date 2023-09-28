<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cido</title>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
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
              <li><a class="nav-link" href="/">HOME</a></li>
              <li><a class="nav-link" href="/programs">PROGRAMS</a></li>
              <li><a class="nav-link" href="/projects">PROJECTS</a></li>
              <li><a class="nav-link" href="/projects">VOLUNTEERS</a></li>
              <li><a class="nav-link" href="/about">ABOUT US</a></li>
              <li><a class="nav-link" href="/contact">CONTACT</a></li>
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

    <main>
        @yield('page-content')
    </main>

    <!-- footer  -->
    <footer class="d-flex justify-content-around pt-3 pb-3 bg-black">
      <div>
        <h5 style="color: #f58220;"> &copy; CIDO South Sudan | All rights reserved</h5>
      </div>
      <div>
        <a href="" class="fa fa-facebook" style="text-decoration: none;"></a>
        <a href="" class="fa fa-twitter ms-4" style="text-decoration: none;"></a>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
      
    </script>
</body>
</html>