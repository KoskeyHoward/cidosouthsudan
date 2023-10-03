@extends('layouts.default')

@section('page-content')
    <div class="about-top bg-success mb-1">
      <div class="about-shade"></div>
      <div class="about-top-text text-center mt-3 mt-mb-0">
        <h1>CIDO’S STAFFS OBSERVES VIVID COVID 19 AWARENESS AT ALL TIMES. </h1>
        <h3>Support to Local Solutions</h3>
      </div>
    </div>

    <div class="row p-5">
        <div class="col-lg-8">
            <h3>CIDO’S STAFFS OBSERVES VIVID COVID 19 AWARENESS AT ALL TIMES.</h3>
            <p><i class="bi bi-chat orange"></i> Leave a Comment  <span class=" share-on ms-4">Share on</span> <i class="fa fa-facebook ms-2"></i> <i class="fa fa-twitter ms-3"></i> <i class="fa fa-google ms-3"></i> <i class="fa fa-linkedin ms-3"></i> <i class="fa fa-pinterest ms-3"></i></p>
            <hr>

            <p>Perhaps South Sudan is one of the least affected countries in the Sub-Saharan Region with the deadly corona virus known as COVID 19 which has claimed thousands of lives globally. Currently the reported figure by the COVID 19 Task Force Team dated 10th May 2020 in the country stands at 156 individuals who are already victims to the virus and there is possibility of the cases exceeding higher than what might have been perceived by the public due to the government efforts in lifting the locked down exercise that would allow people to live their normal lives accordingly.</p>
            <p>To minimize the rapid spread of the corona virus or (COVID 19); CIDO’s Staffs continue to maintain the social distancing  strategies and other effective mechanisms deployed by the organization in ensuring that the safety and well being of all the staffs are strictly observed at all times.</p>
            <p>Despite the fact that there is  no reported cases of deaths in South Sudan among the affected victims. One thing for sure is that the public should not overlook at the facts and take things lightly before it is too late. You can just imagine what life is like for a person infected with the corona virus? What about the stress and mental disorder our doctors go through when diagnosing the affected victims? Corona virus is real, and it kills. Therefore avoid ignorance and stay safe at work, home and any social gathering occasions.</p>

            <div class="row text-center">
                <div class="col-md-6">
                    <img src="{{URL('images/covid-awareness.jpg')}}" alt="cido-staff">
                    <p class="fw-bold">CIDO’s Staff  using her own pen for signing in attendance book on entrance to the office while observing social distancing protocol.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{URL('images/covid-awareness-1.jpg')}}" alt="cido-staff">
                    <p class="fw-bold">Hand washing is every minute activity at CIDO’s premise.</p>
                </div>
            </div>

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
                <a class="btn bg-success orange p-1 ps-2 pe-2 " href="/covid-training"> Prev</a>
                <a class="btn bg-success orange p-1 ps-2 pe-2" href="/story"> Next</a>
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
                    <a class="mb-2" href="">"A STORY LIKE NO OTHER"</a>
                </div>
                <div class="mb-2">
                    <a class="mb-2" href="">MAINSTREAMING COVID-19</a>
                </div>
                <div class="mb-2">
                    <a class="mb-2" href="">TRAINING ON COVID</a>
                </div>
                <div >
                    <a class="mb-2" href="">VIVID COVID AWARENESS</a>
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