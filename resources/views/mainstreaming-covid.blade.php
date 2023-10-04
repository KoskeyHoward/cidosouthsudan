@extends('layouts.default')

@section('page-content')
    <div class="about-top bg-success mb-1">
      <div class="about-shade"></div>
      <div class="about-top-text text-center mt-3 mt-mb-0">
        <h1>MAINSTREAMING COVID 19 FOR HUMANITARIAN FRONT-LINE WORKERS IN YEI. </h1>
        <h3>Support to Local Solutions</h3>
      </div>
    </div>

    <div class="row p-5">
        <div class="col-lg-8">
            <h3>"MAINSTREAMING COVID 19 FOR HUMANITARIAN FRONT-LINE WORKERS IN YEI."</h3>
            <p><i class="bi bi-chat orange"></i> Leave a Comment  <span class="share-on ms-4">Share on</span> <i class="fa fa-facebook ms-2"></i> <i class="fa fa-twitter ms-3"></i> <i class="fa fa-google ms-3"></i> <i class="fa fa-linkedin ms-3"></i> <i class="fa fa-pinterest ms-3"></i></p>
            <hr>

            <p>Corona virus still remains a huge topic on global stage. Thousands are feared to have died already, new cases everyday all over the world and there is no concrete solution to counter this dangerous disease. Perhaps it is now time for people to ask themselves about life in front line as a humanitarian worker that risk all to ensure vulnerable South Sudanese in remote areas are reached with basic services. Do they feel traumatized as they interact freely with the beneficiaries? The truth is that the humanitarian front-line workers are human beings just like any of us. They feel the same as we do. The only difference is the purpose and passion they have to save many lives despite the world is under its knees at this critical moment.    
            </p>
            <p>Community Initiative For Development Organization (CIDO), takes the courage and appreciate the viable efforts made and as well being undertaken by different humanitarian organizations operating within South Sudan for their undying kindness and  love for humanity as they deploy staffs in remote areas of the country for various project intervention that would see an end to human suffering by engaging together to find local solutions and empowering communities to achieve the United Nations Sustainable Development Goals in near future. Narendra Modi the Prime Minister of India once said, “Even small efforts to bring about a change in the social fabric eventually reap large fruits”. Yes that is true because all happiness is built on small efforts. Therefore, all the efforts being done by our humanitarian front-line workers shall reap large fruits soon or later. #LightUpTheWorld
            </p>

            <div class="row text-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{URL('images/cido-staff1.jpg')}}" alt="cido-staff">
                </div>
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{URL('images/cido-staff-2.jpg')}}" alt="cido-staff">
                </div>
            </div>
            <p class="text-center fw-bold">CIDO’s Staff in Nyori Boma of Lasu Payam ready to help the displaced population with basic NFI needs. </p>

            <p> <i class="bi bi-folder orange"></i> Civic Education, Health Services, Uncategorized</p>

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
                <a class="btn bg-success orange p-1 ps-2 pe-2 " href="/story"> Prev</a>
                <a class="btn bg-success orange p-1 ps-2 pe-2" href="/covid-training"> Next</a>
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
                    <a class="mb-2" href="covid-awareness">VIVID COVID AWARENESS</a>
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