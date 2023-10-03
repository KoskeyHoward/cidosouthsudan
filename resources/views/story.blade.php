@extends('layouts.default')

@section('page-content')
    <div class="about-top bg-success mb-1">
      <div class="about-shade"></div>
      <div class="about-top-text text-center mt-3 mt-mb-0">
        <h1>A STORY LIKE NO OTHER </h1>
        <h3>Support to Local Solutions</h3>
      </div>
    </div>

    <div class="row p-5">
        <div class="col-lg-8">
            <h3>"A STORY LIKE NO OTHER"</h3>
            <p><i class="bi bi-chat orange"></i> Leave a Comment  <span class="share-on ms-4">Share on</span> <i class="fa fa-facebook ms-2"></i> <i class="fa fa-twitter ms-3"></i> <i class="fa fa-google ms-3"></i> <i class="fa fa-linkedin ms-3"></i> <i class="fa fa-pinterest ms-3"></i></p>
            <hr>

            <p>For years South Sudanese have been displaced by conflicts and the only place they can find safety is either in the IDPs Settlement or Camp within or outside the country. Like any other war affected country, mostly women, children and the aged are heavily affected in the process of relocating from their original homes to a new environment that takes time for one to adapt. Recently CIDO received funding from Rapid Response Fund (RRF) in close coordination with IOM and USAID to address both basic needs including NFIs that would improve protection of those at risk of violations and the most vulnerable in Nyori IDPs Settlement/Camp of Lasu Payam in Yei River County. During the project activities in Nyori IDPs Settlement/Camp, CIDO paid special attention to people living with disabilities, children, child-headed and female-headed households. The organization  (CIDO) is an active member of Protection Cluster where information and issues related to protection such as GBV are referred or shared, discussed and addressed. In the process, CIDO also carried out post distribution monitoring activities after distribution of the NFIs to ensure direct feedback from beneficiaries are considered with the impact that was brought by the project in the IDPs Settlement/Camp. As a measure to ensure no single beneficiary is left behind during the project intervention despite of his/her age, gender, ethnicity, religion and ways of life; the project team looked at all aspects that brought success in the light during the course of the project intervention in Nyori IDPs Settlement.</p>
            <p>Meet Solomon and John two of the child headed household in Nyori IDPs Settlement/Camp of Lasu Payam. The two boys are brothers and their parents died when they were 4 and 2 years each during the conflicts. Growing up as orphans isn’t really something easy given the nature of the two of being left young and a lot was needed to ensure they feel at least certain percentage of care and love. But for this two boys the story was different from the rest in relations of growing up as orphans. After their parents died one of the neighbor called Jackson Ayume took charged of the two kids welfare. Although both Solomon and John were registered separately in their households, Ayume could make sure they are part of his family by giving them love and affection of being a real parent to the two boys. Mr. Ayume made sure their clothes are washed, food is cooked and given to the boys, during school days he would help them do their assignments when they don’t understand, he buys for them clothes, and when they felt sick he takes to the Camp PHCU for treatment. ” Uncle Ayume is the one taking care of us, he is loving and caring person because he has been with us since our parents passed away. If it was not for him life would have been very hard for us because nobody knows us better than he does, said the 7 years old Solomon in Kakwa dialect”. For now we feel cared for as if our parents are still alive, this is because uncle Ayume is always with us, said Solomon.</p>

            <div class="row text-center">
                <div class="col-md-6">
                    <img src="{{URL('images/cido-staff.jpg')}}" alt="cido-staff">
                    <p class="fw-bold">Solomon (7) & John (5) (orphans) sharing a moment with one of CIDO’s Staff during the post distribution monitoring activities in Nyori IDPs Settlement/ Camp in Lasu Payam of Yei River County.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{URL('images/cido-staff.jpg')}}" alt="cido-staff">
                    <p class="fw-bold">Solomon & John registering as child headed households in Nyori IDPs Settlement/Camp to receive the non-food items distributed by CIDO.</p>
                </div>
            </div>

            <p> <i class="bi bi-folder orange"></i> shelter/Non-Food items</p>

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
                <a class="btn bg-success orange p-1 ps-2 pe-2 " href="/covid-awareness"> Prev</a>
                <a class="btn bg-success orange p-1 ps-2 pe-2" href="/mainstreaming-covid"> Next</a>
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