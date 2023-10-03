@extends('layouts.default')

@section('page-content')
    <div class="about-top bg-success mb-1">
      <div class="about-shade"></div>
      <div class="about-top-text text-center mt-3 mt-mb-0">
        <h1>CIDO CONDUCTS TRAINING ON COVID 19. </h1>
        <h3>Support to Local Solutions</h3>
      </div>
    </div>

    <div class="row p-5">
        <div class="col-lg-8">
            <h3>CIDO CONDUCTS TRAINING ON COVID 19.</h3>
            <p><i class="bi bi-chat orange"></i> Leave a Comment  <span class="share-on ms-4">Share on</span> <i class="fa fa-facebook ms-2"></i> <i class="fa fa-twitter ms-3"></i> <i class="fa fa-google ms-3"></i> <i class="fa fa-linkedin ms-3"></i> <i class="fa fa-pinterest ms-3"></i></p>
            <hr>

            <p>In a bid to sensitize the general public on the risks associated with the deadly corona virus known as COVID 19; Community Initiative For Development Organization (CIDO) takes the opportunity to orient and train all the staffs on necessary measures to take while travelling to various field locations across South Sudan for all its project implementation. A team of 6 staffs travelling to Yei River County were trained on social distancing strategies as they are vulnerable during interaction with beneficiaries at different levels on daily routine as they implement the multi-sectoral  approach project funded by Rapid Response Fund (RRF) in collaboration with USAID and IOM. The staffs got knowledge and skills in understanding what life is like for people infected with corona virus and the social stigma involved once people around you got to know you are infected. Generally, lessons learnt is that to address social stigma during covid 19 is a collective responsibility of each and everyone. Social stigma is real and we should have the skills to communicate with people in a way they understand and respond to the call or listen to the messages being announced or shared positively to avoid further spread of the virus. The total number of people infected with the COVID 19 now stands at 194 victims in South Sudan.</p>
            

            <div class="row text-center mb-3">
                <div class="col-md-12">
                    <img src="{{URL('images/covid-training.jpg')}}" alt="covid-training">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{URL('images/covid-training-1.jpg')}}" alt="covid-training">
                </div>
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{URL('images/covid-training-2.jpg')}}" alt="covid-training">
                </div>
            </div>
            
            <p class="text-center fw-bold">CIDO STAFFS  DURING COVID 19 ORIENTATION AND TRAINING SESSION IN JUBA MAIN OFFICE. </p>

            <p> <i class="bi bi-folder orange"></i> Civic Education, Health Services</p>

            <div class="share" style="margin: 2px solid black;">
                <h4>SHARE ON</h4>
                <div class="media-buttons mb-3">
                    <button class="me-3 bg-primary"> <a class="btn text-light" href=""><i class="fa fa-facebook me-2"></i>FACEBOOK</a></button>
                    <button class="me-3 bg-info"> <a class="btn text-light" href=""><i class="fa fa-twitter me-2"></i>Twitter</a></button>
                    <button class="me-3 bg-danger"> <a class="btn text-light" href=""><i class="fa fa-google me-2"></i>Google+</a></button>
                    <button class="me-3 bg-primary"> <a class="btn text-light" href=""><i class="fa fa-linkedin me-2"></i>Linkedin</a></button>
                    <button class="me-3 bg-danger"> <a class="btn text-light" href=""><i class="fa fa-pinterest me-2"></i>Pinterest</a></button>
                </div>
            </div>

            <div class="comment">
                <h5>Leave a Comment</h5>
                <p>Your email address will not be published. Required fields are marked *</p>
                <form class="border border-success rounded-4">
                    <div class="m-5">

                    <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Comment</label>
                            <textarea type="text" class="form-control" id="exampleInputPassword1"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name*</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     
                                </div>
                            </div>
                            <div class="col-lg-6">  
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Email*</label>
                                    <input type="email" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                        </div>
           
          
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Website</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="pb-3">
                            <input type="checkbox" id="save-email" name="save-email"/>
                            <label for="save-email">Save my name, email, and website in this browser for the next time I comment.</label>
                        </div>
                        
                    
                        <button type="submit" class="btn bg">SUBMIT</button>
                    </div>
                </form>
            </div>

            <div class="d-flex justify-content-between mt-3 ms-3 me-3">
                <a class="btn bg-success orange p-1 ps-2 pe-2 " href="/mainstreaming-covid"> Prev</a>
                <a class="btn bg-success orange p-1 ps-2 pe-2" href="covid-awareness"> Next</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="recent-projects p-3 mb-4">
                <h4>RECENT PROJECTS</h4>
                <hr>
                <div class="mb-2">
                    <a class="mb-2" href="">CIDO RESPONSE TO FLOOD AFFECTED POPULATION</a>
                </div>
                <div class="mb-2">
                    <a class="mb-2" href="/story">"A STORY LIKE NO OTHER"</a>
                </div>
                <div class="mb-2">
                    <a class="mb-2" href="/mainstreaming-covid">MAINSTREAMING COVID-19</a>
                </div>
                <div class="mb-2">
                    <a class="mb-2" href="covid-training">TRAINING ON COVID</a>
                </div>
                <div >
                    <a class="mb-2" href="/covid-awareness">VIVID COVID AWARENESS</a>
                </div>
            </div>

            <div class="pr-programs p-3">
                <h4>PROGRAMS</h4>
                <hr>
                <div class="thematic-focus fw-bold">
                    <p>Essential Services</p>
                    <p>WASH</p>
                    <p>Protection</p>
                    <p>Governance & Leadership</p>
                </div>
            </div>
        </div>
    </div>

@endsection