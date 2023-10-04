@extends('layouts.default')
@section('page-content')
    <div id="" class="container">
        <div class="row">
            <div class="col-lg-8 pt-5 mt-5">
                <h4 class="text-uppercase title">"A story like no other"</h4>
                <div class="d-flex fw-lighter">
                    <p><i class="bi bi-chat"></i> Leave a Comment</p>
                    <p class="ms-md-3">Share on</p>
                    <p class="ms-md-3"><i class="bi bi-facebook"></i></p>
                    <p class="ms-md-3"><i class="bi bi-twitter-x"></i></p>
                    <p class="ms-md-3"><i class="bi bi-google"></i></p>
                    <p class="ms-md-3"><i class="bi bi-pinterest"></i></p>
                </div>
                <hr>
                <p>
                    For years South Sudanese have been displaced by conflicts and the only place they can find safety is
                    either in the IDPs Settlement or Camp within or outside the country. Like any other war affected
                    country, mostly women, children and the aged are heavily affected in the process of relocating from
                    their original homes to a new environment that takes time for one to adapt. Recently CIDO received
                    funding from Rapid Response Fund (RRF) in close coordination with IOM and USAID to address both basic
                    needs including NFIs that would improve protection of those at risk of violations and the most
                    vulnerable in Nyori IDPs Settlement/Camp of Lasu Payam in Yei River County. During the project
                    activities in Nyori IDPs Settlement/Camp, CIDO paid special attention to people living with
                    disabilities, children, child-headed and female-headed households. The organization (CIDO) is an active
                    member of Protection Cluster where information and issues related to protection such as GBV are referred
                    or shared, discussed and addressed. In the process, CIDO also carried out post distribution monitoring
                    activities after distribution of the NFIs to ensure direct feedback from beneficiaries are considered
                    with the impact that was brought by the project in the IDPs Settlement/Camp. As a measure to ensure no
                    single beneficiary is left behind during the project intervention despite of his/her age, gender,
                    ethnicity, religion and ways of life; the project team looked at all aspects that brought success in the
                    light during the course of the project intervention in Nyori IDPs Settlement.
                </p>
                <div class="mt-5">
                    <img src="{{ asset('images/volunteer-crl.jpg') }}" width="700"
                        class=" img-fluid mx-auto d-block mb-3" alt="Volunteer">
                    <p class="card-text fw-bold">Solomon (7) & John (5) (orphans) sharing a moment with one of CIDO’s Staff
                        during the post distribution monitoring activities in Nyori IDPs Settlement/ Camp in Lasu Payam of
                        Yei River County.</p>
                </div>
                <div class="my-5">
                    <img src="{{ asset('images/volunteer-crl.jpg') }}" width="700"
                        class=" img-fluid mx-auto d-block mb-3" alt="Volunteer">
                    <p class="card-text fw-bold">Solomon (7) & John (5) (orphans) sharing a moment with one of CIDO’s Staff
                        during the post distribution monitoring activities in Nyori IDPs Settlement/ Camp in Lasu Payam of
                        Yei River County.</p>
                </div>
                @include('partial.share')

                <div class="mt-5">
                    <form action="">
                        <h3>Leave a Comment</h3>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label rounded-1">Your email address will not be
                                puublished. Required fields are marked*</label>
                            <textarea type="text" class="form-control rounded-2" placeholder="Write a Comment" id="exampleInputPassword1"></textarea>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label rounded-5">Name*</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label rounded-5">Email*</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label rounded-5">Website*</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Save my name, email and website in this
                                browser for the next time I comment</label>
                        </div>
                        <button type="submit" class="btn bg">SUBMIT</button>

                    </form>
                    <div class="d-flex my-5">
                        <div class="flex-grow-1"><a href="" class="btn btn-outline-dark rounded-pill ">Prev</a>
                        </div>
                        <div class=""><a href="" class="btn btn-outline-dark rounded-pill">Next</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-5">
                
                <div class="grey p-4 mt-5 grey">
                    <h5>RECENT PROJECTS</h5>
                    <div class="progress my-3" role="progressbar" aria-label="Example 1px high" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100" style="height: 5px">
                        <div class="progress-bar" style="width: 40%;background-color:#222222"></div>
                    </div>
                    <p><a href="" class="orangeish nav-link">“A STORY LIKE NO OTHER&#</a></p>
                    <p><a href="" class="orangeish nav-link">“MAINSTREAMING COVID 19 FOR HUM</a></p>
                    <p><a href="" class="orangeish nav-link">CIDO CONDUCTS TRAINING ON COVI
                        </a></p>
                </div>
                <div class="grey p-4 my-5 grey">
                    <h5>PROGRAMS</h5>
                    <div class="progress" role="progressbar" aria-label="Example 1px high" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100" style="height: 5px">
                        <div class="progress-bar" style="width: 40%;background-color:#222222"></div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="image-containa">
                                <img src="{{ asset('images/volunteer-crl.jpg') }}" class="imgs img-fluid" width="120px" alt="Image">
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="image-containa">
                                <img src="{{ asset('images/volunteer-crl.jpg') }}" class="imgs img-fluid" width="120px" alt="Image">
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="image-containa">
                                <img src="{{ asset('images/volunteer-crl.jpg') }}" class="imgs img-fluid" width="120px" alt="Image">
                            </div>

                        </div>
                        
                    </div>
               
                </div>
            </div>
        </div>
    </div>
@endsection
