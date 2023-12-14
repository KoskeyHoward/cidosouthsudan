@extends('layouts.default')

@section('page-content')

    <section id="landing">
      <div id="carousel-hero" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
              <!-- image1 -->
            <div class="carousel-item active c-item" data-bs-interval="10000">
              <img src="{{URL('images/cso.jpg')}}" class="d-block w-100 c-img" alt="cido">
              <div class="shade"></div>
              <div class="carousel-caption top-0 mt-4 d-md-block">
                  <p class="mt-5 fs-2" >Support To Local Solutions</p>
                  <h5 class="fw-bolder display-3" >Since 2013 we are helping people within East Africa (South Sudan & Kenya)</h5>
                  <span class=""></span>
                  <button class="btn btn-lg c-btn" type="button"><a href="/programs">View Programs</a></button>
                  <!-- <a class="btn btn-lg c-btn" href="/programs">View Our Programs</a> -->

                </div>
            </div>
            <!-- image2 -->
            <div class="carousel-item c-item" data-bs-interval="7000">
              <img src="{{URL('images/cido.jpg')}}" class="d-block w-100 c-img" alt="cido-projects">
              <div class="shade"></div>
              <div class="carousel-caption top-0 mt-5 d-md-block">
                  <p class="mt-5 fs-2" >We are Creating A Brighter Tomorrow</p>
                  <h5 class="fw-bolder display-3" >Make Someone's Life by Giving of Yours.</h5>
                  <button class="btn btn-lg c-btn" type="button"><a href="/projects">View Our Projects</a></button>
                </div>
              </div>
              <!-- image3 -->
            <div class="carousel-item c-item" data-bs-interval="7000">
              <img src="{{URL('images/volunteer-crl.jpg')}}" class="d-block w-100 c-img" alt="volunteer-at-cido">
              <div class="shade"></div>
              <div class="carousel-caption top-0 mt-5 d-md-block">
                  <p class="mt-5 fs-2" >Rebuilding Lives for Futures</p>
                  <h5 class="fw-bolder display-3" >There is no Big Thing Than Your Concern</h5>
                  <button class="btn btn-lg c-btn" type="button"><a href="/become-volunteer">Volunteer</a></button>
                </div>
            </div>
            <!-- image4 -->
            <div class="carousel-item c-item" data-bs-interval="7000">
              <img src="{{URL('images/women-empowerment.jpg')}}" class="d-block w-100 c-img" alt="donate">
              <div class="shade"></div>
              <div class="carousel-caption top-0 mt-5 d-md-block">
                  <p class="mt-5 fs-2" >Support To Local Solutions</p>
                  <h5 class="fw-bolder display-3" >Since 2013 we are helping people within East Africa (South Sudan & Kenya)</h5>
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
        <!-- who we are text  -->
        <div class=" p-5 pb-3" style="height: 100%">
              <div class="container text-center" style="height: 100%">
                  <div class="" style="height: 100%">
                    <h5 class=" fs-1 mb-lg-3 mb-sm-3  mb-2" style="color: #00A651;">Who We Are</h5>
                    <p class="text-dark mb-2 fs-5">CIDO is a non-partisan, non-profit making organization conceived in 2013 and formally registered in South Sudan in 2016 to support local solutions on critical areas of social and economic development. The agency places emphasis on promotion of Peace and peaceful co-existence among communities as the benchmark for socio-economic prosperity. </p>
                    <button type="button" class="learn-btn align-content-center mt-3"><a href="/about" style="text-decoration: none;" class="card-link text-light p-2">Learn More</a></button>
                  </div>
                
              </div>
            </div>
    </section>

    <!-- programs  -->
    <section class="text-center p-5 pb-3 programs">
      <div class="cido-programs mb-4 mb-lg-0">
        <h2 style="color: #00A651;"> CIDO PROGRAMS</h2>
        <p class="text-dark fs-5">Activities of CIDO currently covers Central Equitoria state (kajokeji, Lainya Juba and Yei) <br> with planned extension to Eastern Equitoria ( Torit and Ikotos), Upper Nile ( Panyikang, Tonga, Maban) <br> Jonglei state ( Pigi, and Ayod ).</p>
      </div>

      <div class="container text-center">
      <div class="row mb-4 mt-4 text-center">
        @foreach($program as $item)
            <div class="col-lg-4 mb-4 mb-lg-0 c-program">
                <div class="card" style="width: 100%;">
                  <div class="image-container" style="width: 100%;">
                    <div class="overlay d-inline-block" style="padding-top:55px;">
                      <h5 class="text-light mb-3">{{$item->title}}</h5>
                      <a class="btn button" href="{{url('programItem/'.$item->id)}}">View Program</a>
                    </div>
                    <img src="{{asset('images/programs/'.$item->program_image)}}" alt="program"id="zoomable-image">
                  </div>
                </div>
            </div>
            @endforeach
          </div>
      </div>

      <button class="btn programs-btn"> <a href="/programs" style="text-decoration: none; color: white;"> More Programs >></a></button>
    </section>
    <!-- projects  -->
    <section class="text-center p-5 programs">
      <div class="mb-4">
        <h2 style="color: #00A651;">OUR PROJECTS</h2>
        <p class="text-dark fs-5">We continue to reach out to as many people as possible by extending our services which range from nutrition,access to justice, <br> adult literacy to women empowerement, health services and protection.</p>
      </div>

      <div class="container text-center">
        <div class="row mb-4 mt-4 text-center">
          @foreach($project as $item)
              <div class="col-lg-4 mb-4 mb-lg-0 c-projects">
                  <div class="card" style="width: 100%;">
                    <div class="image-container" style="width: 100%;">
                      <div class="overlay d-inline-block" style="padding-top:55px;">
                        <h5 class="text-light mb-3">{{$item->title}}</h5>
                        <a class="btn button" href="{{url('projectItem/'.$item->id)}}">View Project</a>
                      </div>
                      <img src="{{asset('images/projects/'.$item->project_image)}}" alt="project" id="zoomable-image">
                    </div>
                  </div>
              </div>
              @endforeach              
        </div>
      </div>

      <button class="btn programs-btn"> <a href="/projects" style="text-decoration: none; color: white;"> More Projects >></a></button>
    </section>

    <script>
      const counters = document.querySelectorAll('.count');
      const speed = 200;

      counters.forEach((counter) => {
      const target = Number(counter.getAttribute('data-target'));
      let count = 0;
      const increment = Math.ceil(target / speed);

      function updateCount() {
        count += increment;
        if (count < target) {
            counter.innerText = count;
            requestAnimationFrame(updateCount);
        } else {
            counter.innerText = target;
        }
      }

      updateCount();
    });

    </script>
@endsection