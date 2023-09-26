@extends('layouts.default')

@section('page-content')

    <section id="landing">
      <div id="carousel-hero" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
              <!-- image1 -->
            <div class="carousel-item active c-item" data-bs-interval="10000">
              <img src="{{URL('images/cso.jpg')}}" class="d-block w-100 c-img" alt="...">
              <!-- <img src="images/carousel/home-1_slider-1_31.png"  class="img-slider" alt="slider"> -->
              <div class="carousel-caption mt-4 d-md-block">
                  <p class="mt-5 fs-2" >Support To Local Solutions</p>
                  <h5 class="fw-bolder display-3" >Since 2013 we are helping people around South Sudan & Kenya</h5>
                  <span class=""></span>
                  <button class="btn btn-lg c-btn" type="button"><a href="">View Programs</a></button>
                </div>
            </div>
            <!-- image2 -->
            <div class="carousel-item c-item" data-bs-interval="7000">
              <img src="{{URL('images/cido.jpg')}}" class="d-block w-100 c-img" alt="...">
              
              <div class="carousel-caption top-0 mt-4 d-md-block">
                  <p class="mt-5 fs-2" >We are Creating A Brighter Tomorrow</p>
                  <h5 class="fw-bolder display-3" >Make Someone's Life by Giving of Yours.</h5>
                  <button class="btn btn-lg c-btn " type="button">Donate Now</button>
                </div>   
              </div>
              <!-- image3 -->
            <div class="carousel-item c-item" data-bs-interval="7000">
              <img src="{{URL('images/volunteer-crl.jpg')}}" class="d-block w-100 c-img" alt="...">
              <div class="carousel-caption top-0 mt-4 d-md-block">
                  <p class="mt-5 fs-2" >Rebuilding Lives for Futures</p>
                  <h5 class="fw-bolder display-3" >There is no Big Thing Than Your Concern</h5>
                  <button class="btn btn-lg c-btn" type="button">Donate Now</button>
                </div>
            </div>
            <!-- image4 -->
            <div class="carousel-item c-item" data-bs-interval="7000">
              <img src="{{URL('images/women-empowerment.jpg')}}" class="d-block w-100 c-img" alt="...">
              <div class="carousel-caption top-0 mt-4 d-md-block">
                  <p class="mt-5 fs-2" >Support To Local Solutions</p>
                  <h5 class="fw-bolder display-3" >Since 2013 we are helping people around South Sudan.</h5>
                  <button class="btn btn-lg c-btn" type="button">Donate Now</button>
                  
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

    <section class="section-2">
      <div class="text-center theme-focus ">
        <div class=" con-row mb-4">
            <div class="row focus-row">
                <div class="col-md-3 focus-col">
                    <img src="{{URL('images/health-delivery.jpeg')}}" class="focus-img" alt="">
                    <div class="foreground-two"></div>
                    <div class="focus-text">
                        <h4 class="fw-bolder">Essential services</h4>
                        <p class="fw-bold">Health & Nutrition <br> Food Security & livelihood</p>
                    </div>
                </div>
                <div class="col-md-3 focus-col">
                    <img src="{{URL('images/SNFI.jpeg')}}" class="focus-img" alt="">
                    <div class="foreground-three"></div>
                    <div class="focus-text">
                        <h4 class="fw-bolder">Wash</h4>
                        <p class="fw-bold">Shelter & Non-food items</p>
                    </div>
                </div>
                <div class="col-md-3 focus-col">
                    <img src="{{URL('images/children1.jpeg')}}" class="focus-img" alt="">
                    <div class="foreground-two"></div>
                    <div class="focus-text">
                        <h4 class="fw-bolder">Protection</h4>
                        <p class="fw-bold">GBV & Child Protection <br> Women rights & Economic Empowerment</p>
                    </div>
                </div>
                <div class="col-md-3 focus-col">
                    <img src="{{URL('images/GL.jpeg')}}" class="focus-img" alt="">
                    <div class="foreground-three"></div>
                    <div class="focus-text">
                        <h4 class="fw-bolder">Governance & Ledearship</h4>
                        <p class="fw-bold">Peace building & human security <br> Civic Education</p>
                    </div>
                </div>
                
            </div>
        </div>
      </div>
      <div class="below-hero text-center bg-black">
        <h1 class="slogan mb-4">Support to Local Solutions</h1>
      </div>
    </section>

    <section class="about-section-3">
      <!-- who we are  -->
      <div style="background-color: #f58220;">
        <div class="container mb-4 pb-4">
          <div class="row" style="height: 100%; object-fit: cover;">
            <!-- image  -->
            <div class="col-md-6 mt-3 mb-md-0 mb-lg-0">
              <div class="container c-wwa">
                <img src="{{URL('images/SV-launch2.webp')}}" alt="who we are" style="width: 100%; height: 100%; ;object-fit: cover; border-radius: 8px;">
              </div>
            </div>
            <!-- who we are text  -->
            <div class="col-md-6 mt-3 mb-md-0 mb-lg-0">
              <div class="container" style="height: 100%">
                <div class="card">
                  <div class="card-body" style="width: 100%;">
                    <h5 class="card-title fs-1 mb-lg-4 mb-sm-3  mb-2">Who We Are</h5>
                    <p class="card-text text-secondary mb-lg-4 mb-2 mb-sm-3 fs-5">CIDO is a non-partisan, non-profit making organization conceived in 2013 and formally registered in South Sudan in 2016 to support local solutions on critical areas of social and economic development. The agency places emphasis on promotion of Peace and peaceful co-existence among communities as the benchmark for socio-economic prosperity. </p>
                    <p class="card-text text-secondary mb-lg-4 mb-sm-3 mb-2">CIDO exists to mobilize and organize communities to harness their resources, plan effectively and generate solutions for socio-economic advancement.</p>
                    <a href="/about" style="text-decoration: none;" class="card-link text-dark"><button type="button" class="btn align-content-center mb-lg-4 mb-0" style="background-color: #f58220;">Learn More</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
@endsection