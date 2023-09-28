@extends('layouts.default')

@section('page-content')

<section class="about-us">
        <!-- title-img  -->
        <div class="about-top mb-1">
          <img src="images/cso.jpg" alt="board">
          <div class="about-shade"></div>
          <div class="about-top-text text-center">
            <h1>About Us </h1>
            <h3>Support to Local Solutions</h3>
          </div>
        </div>

        <!-- who we are  -->
        <div class="who-we-are mb-4">
          <h1 class="text-center text-black">WHO WE ARE</h1>
          <p>CIDO is a non-partisan, non-profit making organization conceived in 2013 and formally registered in South Sudan in 2016 to support local solutions on critical areas of social and economic development. The agency places emphasis on promotion of Peace and peaceful co-existence among communities as the benchmark for socio-economic prosperity.  </p>
          <p>CIDO was formed by a group of female youth and women who were living in a protection of civilian site in South Sudan after the outbreak of the 2013 South Sudan political crisis that led to deaths of over 1 million people and displacement of over 5 million people. These women sat together and pondered over their predicament amidst thousands of vulnerable women and children and they desired change. There was need for a paradigm shift from the violent environment and the loss of human dignity. These heartfelt needs led to the formation of CIDO, an organization that believes youth and women capabilities to create a desired environment that enables social justice to thrive. CIDO believes in employing community-based approaches and community managed initiatives in achieving sustainable socio- economic prosperity. In nut shell a nation where everyone thrives and has hope for a better tomorrow. </p>
          <p>Notably, South Sudan gained Independence in July 2011 and is one of the poorest countries in the world, faced with social, political and economic challenges. In order to address these challenges, CIDO relies on the strength of the knowledge of the local context and the way the people know each other and how they can use their relations to develop local capacities for socio-economic transformation. The core purpose of CIDO is to meet the needs and aspirations of communities, in both urban and rural setting, with special emphasis on conflict mitigation and resolution as a prerequisite to socio- economic prosperity. </p>
          <p>The organization is headed by an Executive Director and governed by a 7member Board of Directors who meets thrice a year and on ad hoc basis. </p>
          <p></p>
        </div>

        <div class="mv mb-4">
          <!-- mission  -->
          <div class="container row mission mb-4">
            <!-- image  -->
            <div class="col-md-6 mb-2 mb-md-0">
              <img src="images/SNFI.jpeg" class="mission-img" alt="mission" width="200px">
            </div>
            <!-- text  -->
            <div class="col-md-6">
              <h2 class="text-start" style="color: #00A651;">Our Mission</h2>
              <p class="text-black text-start">CIDO exists to mobilize and organize communities to harness their resources, plan effectively and generate solutions for socio-economic advancement.</p>
            </div>
          </div>

          <!-- vision  -->
          <div class="container row vision text-end mb-4">
            <!-- text  -->
            <div class="col-md-6 ">
              <h2 class="text-start" style="color: #f58220;">Our Vision</h2>
              <p class="text-light text-start">A society that is free ,just , peaceful and economically advanced</p>
            </div>
            <!-- image  -->
            <div class="col-md-6">
              <img src="images/Peacebuilding.jpeg" class="mission-img" alt="mission" width="200px">
            </div>
          </div>

          <!-- objectives  -->
          <div class="container row mission mb-4">
            <!-- image  -->
            <div class="col-md-6 mb-2 mb-md-0">
              <img src="images/SNFI.jpeg" class="mission-img" alt="mission" width="200px">
            </div>
            <!-- text  -->
            <div class="col-md-6">
              <h2 class="text-start" style="color: #00A651;">Our Objectives</h2>
              <ul>
                <li>To improve the capacity of the Youth and women in creating local solutions for Socio-economic transformation. </li>
                <li>To conduct research, lobbying and advocacy on and creation of social systems that serve socio-economic concerns.</li>
                <li>To support communities affected by emergencies in response and recovery. </li>
              </ul>
            </div>
          </div>

          <!-- Core values  -->
          <div class="container row vision text-end mb-4">
            <!-- text  -->
            <div class="col-md-6 ">
              <h2 class="text-start" style="color: #f58220;">Core Values </h2>
              <div class="values text-start d-flex justify-content-between">
                <div>
                  <p>Impartiability</p>
                  <p>Human rights</p>
                  <p>Justice</p>
                </div>
                <div>
                  <p>Partnership</p>
                  <p>Respect</p>
                  <p>Diligence</p>
                </div>
                <div>
                  <p>Integrity</p>
                  <p>Accountability</p>
                  <p>Transparency</p>
                </div>
              </div>
            </div>
            <!-- image  -->
            <div class="col-md-6">
              <img src="images/Peacebuilding.jpeg" class="mission-img" alt="mission" width="200px">
            </div>
            
          </div>
        </div>

        
    </section>

    <!-- theme focus  -->
    <section>
      <div class="theme-focus-title d-flex justify-content-center mb-4">
        <h1 style="color: #00A651;">CORE THEMATIC </h1>
        <h1 class="ms-3 text-black">FOCUS AREAS</h1>
      </div>

      <div class="row theme-focus-about ps-5 pe-5 mb-4">
        <div class="col-md-3 text-center mb-4 mb-md-0">
          <img src="images/settings_2881031.png" alt="Governance" width="70px">
          <h3>GOVERNANCE</h3>
          <p>Human security, Acess to Justice, Civic Education</p>
        </div>
        <div class="col-md-3 text-center mb-4 mb-md-0">
          <img src="images/diamond_1664462.png" alt="NATURAL RESOURCES MANAGEMENT" width="70px">
          <h3>NATURAL RESOURCES MANAGEMENT</h3>
          <p>Food security and livelihood, Wildlife conservation, WASH, Oil resource monitoring</p>
        </div>
        <div class="col-md-3 text-center mb-4 mb-md-0">
          <img src="images/service-50.png" alt="ESSENTIAL SERVICES" width="70px">
          <h3>ESSENTIAL SERVICES</h3>
          <p>Adult Literacy, Basic Education, Nutrition.</p>
        </div>
        <div class="col-md-3 text-center mb-4 mb-md-0">
          <img src="images/balance.gif" alt="HUMAN RIGHTS">
          <h3>HUMAN RIGHTS</h3>
          <p>Human Rights Advocacy, Protection, Women Empowerment.</p>
        </div>
      </div>

      <div class="row text-center bg-secondary pt-3 pb-3">
        <div class="col-md-3 mb-4 mb-md-0">
          <img src="images/volunteer.png" alt="volunteer">
          <h3 class="counter-count text-light">230</h3>
          <h3 class="text-black">Volunteers</h3>
        </div>
        <div class="col-md-3 mb-4 mb-md-0">
          <img src="images/philanthropy-100.png" alt="Donations" width="100px">
          <h3 class="counter-count text-light">95425</h3>
          <h3 class="text-black">Donations</h3>
        </div>
        <div class="col-md-3 mb-4 mb-md-0">
          <img src="images/projects-100.png" alt="Projects" width="100px">
          <h3 class="counter-count text-light">47</h3>
          <h3 class="text-black">Projects</h3>
        </div>
        <div class="col-md-3 mb-4 mb-md-0">
          <img src="images/awards-100.png" alt="Awards" width="100px">
          <h3 class="counter-count text-light">10</h3>
          <h3 class="text-black">Awards</h3>
        </div>
      </div>
    </section>

    <!-- team  -->
    <section>
      <H1 class="text-black ms-4">Our Team</H1>
      <div class="row ps-4 pe-3 pt-3 pb-4 mb-4">
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
              <img src="images/Testimonial-icon.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">name</h5>
                <p class="card-text">Role</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>  
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
              <img src="images/Testimonial-icon.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">name</h5>
                <p class="card-text">Role</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>  
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
              <img src="images/Testimonial-icon.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">name</h5>
                <p class="card-text">Role</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>  
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
              <img src="{{URL('images/Testimonial-icon.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">name</h5>
                <p class="card-text">Role</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>  
          </div>
        </div>
      </div>
    </section>


@endsection