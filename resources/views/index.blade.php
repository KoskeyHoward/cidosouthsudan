@extends('layouts.default')

@section('page-content')

    <section id="landing">
      <div id="carousel-hero" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
              <!-- image1 -->
            <div class="carousel-item active c-item" data-bs-interval="10000">
              <img src="{{URL('images/cso.jpg')}}" class="d-block w-100 c-img" alt="...">
              <div class="shade"></div>
              <div class="carousel-caption top-0 mt-4 d-md-block">
                  <p class="mt-5 fs-2" >Support To Local Solutions</p>
                  <h5 class="fw-bolder display-3" >Since 2013 we are helping people around South Sudan & Kenya</h5>
                  <span class=""></span>
                  <button class="btn btn-lg c-btn" type="button"><a href="/programs">View Programs</a></button>
                  <!-- <a class="btn btn-lg c-btn" href="/programs">View Our Programs</a> -->
                  
                </div>
            </div>
            <!-- image2 -->
            <div class="carousel-item c-item" data-bs-interval="7000">
              <img src="{{URL('images/cido.jpg')}}" class="d-block w-100 c-img" alt="...">
              <div class="shade"></div>
              <div class="carousel-caption top-0 mt-4 d-md-block">
                  <p class="mt-5 fs-2" >We are Creating A Brighter Tomorrow</p>
                  <h5 class="fw-bolder display-3" >Make Someone's Life by Giving of Yours.</h5>
                  <button class="btn btn-lg c-btn" type="button"><a href="/projects">View Our Projects</a></button>
                </div>   
              </div>
              <!-- image3 -->
            <div class="carousel-item c-item" data-bs-interval="7000">
              <img src="{{URL('images/volunteer-crl.jpg')}}" class="d-block w-100 c-img" alt="...">
              <div class="shade"></div>
              <div class="carousel-caption top-0 mt-4 d-md-block">
                  <p class="mt-5 fs-2" >Rebuilding Lives for Futures</p>
                  <h5 class="fw-bolder display-3" >There is no Big Thing Than Your Concern</h5>
                  <button class="btn btn-lg c-btn" type="button"><a href="/become-volunteer">Volunteer</a></button>
                </div>
            </div>
            <!-- image4 -->
            <div class="carousel-item c-item" data-bs-interval="7000">
              <img src="{{URL('images/women-empowerment.jpg')}}" class="d-block w-100 c-img" alt="...">
              <div class="shade"></div>
              <div class="carousel-caption top-0 mt-4 d-md-block">
                  <p class="mt-5 fs-2" >Support To Local Solutions</p>
                  <h5 class="fw-bolder display-3" >Since 2013 we are helping people around South Sudan.</h5>
                  <a href="/donationForm" class="btn btn-lg c-btn">Donate</a>
                  
                </div>
            </div>
          </div>
          <!-- arrow buttons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carousel-hero" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carousel-hero" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <!-- carousel-indicators -->
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#carousel-hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carousel-hero" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carousel-hero" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carousel-hero" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
      </div>
    </section>

    <section class="section-2" style="margin: 0 auto;">
      <div class="below-hero text-center bg-black">
        <h1 class="slogan mb-4">Support to Local Solutions</h1>
      </div>

      <!-- who we are  -->
      <div class="row" style="background-color: #f58220;">
        <!-- image  -->
        <div class="container col-md-6 pt-2 ps-4 pb-2 mb-md-0 mb-lg-0" style="height: 100%;">
            <img src="{{URL('images/SV-launch2.webp')}}" alt="who we are" style="width: 100%; height:356px; ;object-fit: cover; border-radius: 8px;">
        </div>
            <!-- who we are text  -->
        <div class="col-md-6 pt-2 pb-2 mb-md-0 mb-lg-0" style="height: 100%">
              <div class="container" style="height: 100%">
                <div class="card" style="height: 100%">
                  <div class="card-body" style="height: 100%">
                    <h5 class="card-title fs-1 mb-lg-3 mb-sm-3  mb-2">Who We Are</h5>
                    <p class="card-text text-secondary mb-lg-4 mb-2 mb-sm-3 fs-5">CIDO is a non-partisan, non-profit making organization conceived in 2013 and formally registered in South Sudan in 2016 to support local solutions on critical areas of social and economic development. The agency places emphasis on promotion of Peace and peaceful co-existence among communities as the benchmark for socio-economic prosperity. </p>
                    <p class="card-text text-swcondary mb-lg-4 mb-2 mb-sm-3 fs-6"></p>
                    <a href="/about" style="text-decoration: none;" class="card-link text-dark"><button type="button" class="btn align-content-center mb-lg-3 mb-0" style="background-color: #f58220;">Learn More</button></a>
                  </div>
                </div>
              </div>
            </div>
      </div>

      <div class="row text-center p-4" style="background-color: #00A651;">
        <div class="col-md-6 text-light mb-4 mb-md-0">
          <h1>Since 2013 we are helping <br> people around the world.</h1>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
              <img src="images/projects-100.png" alt="Projects" width="100px">
              <h3 class="counter-count text-light">30+</h3>
              <h5 class="text-black">Total Projects</h5>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <img src="images/people.png" alt="Projects" width="100px">
              <h3 class="counter-count text-light">3545+</h3>
              <h5 class="text-black">People Reached</h5>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <img src="images/causes.png" alt="Projects" width="100px">
              <h3 class="counter-count text-light">8</h3>
              <h5 class="text-black">Causes</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- programs  -->
    <section class="text-center p-5">
      <div class="cido-programs mb-4 mb-lg-0">
        <h2> CIDO PROGRAMS</h2>
        <h5>Activities of CIDO currently covers Central Equitoria state (kajokeji, Lainya Juba and Yei) <br> with planned extension to Eastern Equitoria ( Torit and Ikotos), Upper Nile ( Panyikang, Tonga, Maban) <br> Jonglei state ( Pigi, and Ayod ).</h5>
      </div>

      <div class="container text-center">
      <div class="row mb-4 mt-4 text-center">
            <div class="col-lg-4 mb-4 mb-lg-0 c-program">
                <div class="card" style="width: 19rem;">
                  <div class="image-container">
                    <div class="overlay d-inline-block" style="padding-top:55px;">
                      <h5 class="text-light mb-3">Peace and Security</h5>
                        <button class="button"><a class="btn" href="/peace-building">View Program</a></button>
                    </div>
                    <img src="{{asset('images/peacebuilding.jpeg')}}" alt="Your Image"id="zoomable-image">
                  </div>
                </div>                   
            </div>                
            <div class="col-lg-4 mb-4 mb-lg-0 c-program">
                <div class="card" style="width: 19rem;">
                  <div class="image-container">
                    <div class="overlay d-inline-block" style="padding-top:55px;">
                      <h5 class="text-light mb-3">Women Rights and Empowerment</h5>
                        <button class="button"><a href="/women-rights">View Program</a></button>
                    </div>
                    <img src="{{asset('images/Livelihood.jpeg')}}" alt="Your Image"id="zoomable-image">
                  </div>
                </div>                   
            </div>                
            <div class="col-lg-4 mb-4 mb-lg-0 c-program">
                <div class="card" style="width: 19rem;">
                  <div class="image-container">
                    <div class="overlay d-inline-block" style="padding-top:55px;">
                      <h5 class="text-light mb-3">Access to Justice</h5>
                        <button class="button">View Program</button>
                    </div>
                    <img src="{{asset('images/GL.jpeg')}}" alt="Your Image"id="zoomable-image">
                  </div>
                </div>                   
            </div>                
          </div>
      </div>

      <button class="btn bg-success"> <a class="programs-btn" href="/programs" style="text-decoration: none; color: white;"> More Programs >></a></button>
    </section>

    <!-- team  -->
    <!-- <section class="text-center">
      <div >
        <h2>OUR TEAM</h2>
        <h5>Meet our team of selfless, dedicated men and women</h5>
      </div>
    </section> -->

    <!-- projects  -->
    <section class="text-center p-4 pb-1">
      <div class="mb-4">
        <h2 class="orange">OUR PROJECTS</h2>
        <h5>We continue to reach out to as many people as possible by <br>extending our services which range from nutrition,access to justice, <br> adult literacy to women empowerement, health services and protection.</h5>
      </div>

      <div class="row">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="mb-3 pr-partner">
            <img src="{{asset('images/cido-ahec_staff.jpg')}}" alt="project">
          </div>

          <div class="text-black mb-4 mb-md-0">
            <h4>CIDO Partners with IntraHealth to Strengthen HIV Services in South Sudan</h4>
          </div>
        </div>

        <div class="col-lg-6 c-projects">
          <div class="row mb-4">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <div class="card" style="width: 19rem;">
                <div class="image-container">
                  <div class="overlay">
                    <a class="text-light" href="#" style="text-decoration: none;"><h5 class="card-title">Power of integrated services in Akobo East</h5></a>
                  </div>
                  <img src="{{asset('images/four_1.jpeg')}}" alt="Your Image"id="zoomable-image">
                </div>
              </div>
            </div>
            
            <div class="col-lg-6">
              <div class="card" style="width: 19rem;">
                <div class="image-container">
                  <div class="overlay">
                    <a class="text-light" href="#" style="text-decoration: none;"><h5 class="card-title">CIDO saves a Woman 3 days of labor pain in Akobo.</h5></a>                    
                  </div>
                  <img src="{{asset('images/SNFI.jpeg')}}" alt="Your Image"id="zoomable-image">
                </div>
              </div>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <div class="card" style="width: 19rem;">
                <div class="image-container">
                  <div class="overlay">
                    <a class="text-light" href="/story" style="text-decoration: none;"><h5 class="card-title">"A Story like no other"</h5></a>                    
                  </div>
                  <img src="{{asset('images/2023.jpg')}}" alt="Your Image"id="zoomable-image">
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card" style="width: 19rem;">
                <div class="image-container">
                  <div class="overlay">
                    <a class="text-light" href="#" style="text-decoration: none;"><h5 class="card-title">CIDO response to flood affected population in Pibor & Akobo counties in South Sudan.</h5></a>
                  </div>
                  <img src="{{asset('images/Np-CIDO.jpeg')}}" alt="Your Image"id="zoomable-image">
                </div>
              </div>
            </div>
          </div>

          <!-- more projects  -->
          <div class="row">
            <div class="col-12">
              <a class="btn orange bg-success pe-5 ps-5" href="/projects"> More projects >></a>
            </div>
          </div>
        </div>
      </div>
    </section>   
@endsection