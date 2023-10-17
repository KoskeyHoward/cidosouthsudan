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
        <div class="who-we-are">
          <h1 class="text-center text-black">WHO WE ARE</h1>
          <p>CIDO is a non-partisan, non-profit making organization conceived in 2013 and formally registered in South Sudan in 2016 to support local solutions on critical areas of social and economic development. The agency places emphasis on promotion of Peace and peaceful co-existence among communities as the benchmark for socio-economic prosperity.  </p>
          <p>CIDO was formed by a group of female youth and women who were living in a protection of civilian site in South Sudan after the outbreak of the 2013 South Sudan political crisis that led to deaths of over 1 million people and displacement of over 5 million people. These women sat together and pondered over their predicament amidst thousands of vulnerable women and children and they desired change. There was need for a paradigm shift from the violent environment and the loss of human dignity. These heartfelt needs led to the formation of CIDO, an organization that believes youth and women capabilities to create a desired environment that enables social justice to thrive. CIDO believes in employing community-based approaches and community managed initiatives in achieving sustainable socio- economic prosperity. In nut shell a nation where everyone thrives and has hope for a better tomorrow. </p>
          <p>Notably, South Sudan gained Independence in July 2011 and is one of the poorest countries in the world, faced with social, political and economic challenges. In order to address these challenges, CIDO relies on the strength of the knowledge of the local context and the way the people know each other and how they can use their relations to develop local capacities for socio-economic transformation. The core purpose of CIDO is to meet the needs and aspirations of communities, in both urban and rural setting, with special emphasis on conflict mitigation and resolution as a prerequisite to socio- economic prosperity. </p>
        </div> 

        <div class="row p-5 pb-1 pt-2">
            <!-- vision  -->
            <div class="col-md-6">
                <h2 class="orange">Our Vision</h2>
                <p class="text-secondary">A society that is free ,just , peaceful and economically advanced</p>
            </div>
            <!-- goals and objectives  -->
            <div class="col-md-6">
                <h2 class="orange">Goals & Objectives</h2>
                <p class="text-secondary">To work with the community in identifying needs and developing solutions together for a community led holistic transformation.</p>
            </div>
        </div>

        <div class="row p-5 pt-0">
            <!-- mission  -->
            <div class="col-md-6">
                <h2 class="orange">Our Mission</h2>
                <p class="text-secondary">CIDO exists to mobilize and organize communities to harness their resources, plan effectively and generate solutions for socio-economic advancement.</p>
            </div>
            <!-- specific objectives  -->
            <div class="col-md-6 objectives">
                <h4 class="orange">Specific Objectives</h4>
                <ul class="text-secondary" >
                    <li>To improve the capacity of the youth and women in support of socio-economic initiatives.</li>
                    <li>To conduct research, lobbying and advocacy on and creation of social systems that serve socio-economic concerns and constructive resolution of conflict.</li>
                    <li>To support communities affected by emergencies in response and recovery.</li>
                </ul>
            </div>
        </div>
        
    </section>

    <!-- theme focus  -->
    <section>
      <div class="theme-focus-title text-center mb-4">
        <h1 style="color: #00A651;">CORE THEMATIC FOCUS AREAS</h1>
      </div>

      <div class="row theme-focus-about p-5 pt-3 mb-4">
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
          <img src="images/human-rights.jpg" alt="HUMAN RIGHTS">
          <h3>HUMAN RIGHTS</h3>
          <p>Human Rights Advocacy, Protection, Women Empowerment.</p>
        </div>
      </div>

      <div class="row text-center bg-success p-5">
        <div class="col-md-3 mb-4 mb-md-0 counter">
          <img src="{{URL('images/volunteer.png')}}" alt="volunteer">
          <h3 class="count text-light" data-target="230">0</h3>
          <h3 class="text-black">Volunteers</h3>
        </div>
        <div class="col-md-3 mb-4 mb-md-0 counter">
          <img src="{{URL('images/philanthropy-100.png')}}" alt="Donations" width="100px">
          <h3 class="count text-light" data-target="95425">0</h3>
          <h3 class="text-black">Donations</h3>
        </div>
        <div class="col-md-3 mb-4 mb-md-0 counter">
          <img src="{{URL('images/projects-100.png')}}" alt="Projects" width="100px">
          <h3 class="count text-light" data-target="47">0</h3>
          <h3 class="text-black">Projects</h3>
        </div>
        <div class="col-md-3 mb-4 mb-md-0 counter">
          <img src="{{URL('images/awards-100.png')}}" alt="Awards" width="100px">
          <h3 class="count text-light" data-target="10">0</h3>
          <h3 class="text-black">Awards</h3>
        </div>
      </div>
    </section>

    <!-- team  -->
    <section class="text-center">
      <H1 class="text-black ms-4 pt-5">Our Team</H1>
      <h5 class="p-3">The organization is headed by an Executive Director and governed by a 7member Board of Directors <br> who meets thrice a year and on ad hoc basis. </h5>
      <div class="row ps-4 pe-3 pt-3 pb-4 mb-4">
        <div class="col-lg-3 mb-4 mb-lg-0 c-program">
          <div class="card" style="width: 18rem;">
              <img src="{{URL('images/Testimonial-icon.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">name</h5>
                <p class="card-text">Role</p>
              </div>  
          </div>
        </div>
        <div class="col-lg-3 mb-4 mb-lg-0 c-program">
          <div class="card" style="width: 18rem;">
              <img src="{{URL('images/Testimonial-icon.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">name</h5>
                <p class="card-text">Role</p>
              </div>  
          </div>
        </div>
        <div class="col-lg-3 mb-4 mb-lg-0 c-program">
          <div class="card" style="width: 18rem;">
              <img src="{{URL('images/Testimonial-icon.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">name</h5>
                <p class="card-text">Role</p>
              </div>  
          </div>
        </div>
        <div class="col-lg-3 c-program">
          <div class="card" style="width: 18rem;">
              <img src="{{URL('images/Testimonial-icon.webp')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">name</h5>
                <p class="card-text">Role</p>
              </div>  
          </div>
        </div>
      </div>
    </section>

    <!-- what people say -->
    <section class="bg-secondary pb-5">
        <h1 class="text-center text-black p-3">What People Say...</h1>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="container carousel-inner">
                <!-- Testimonial Items -->
                <div class="carousel-item active" data-bs-interval="30000">
                    <div class="row ps-5 pe-5">
                        <div class="col-md-4">
                            <div class="testimonial">
                                <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis."</p>
                                <p class="author">- John Doe</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial">
                                <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis."</p>
                                <p class="author">- Jane Smith</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial">
                                <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis."</p>
                                <p class="author">- Mary Johnson</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="30000">
                    <div class="row ps-5 pe-5">
                        <div class="col-md-4">
                            <div class="testimonial">
                                <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis."</p>
                                <p class="author">- Robert Wilson</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial">
                                <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis."</p>
                                <p class="author">- Sarah Brown</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial">
                                <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis."</p>
                                <p class="author">- Michael Lee</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more testimonial items as needed -->
            </div>
            <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
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