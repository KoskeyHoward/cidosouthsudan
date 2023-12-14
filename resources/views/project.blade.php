@extends('layouts.default')
@section('page-content')
    <div id="" class="container">
        <div class="row">
            <div class="col-lg-8 pt-5 mt-5">
                <h4 class="text-uppercase title">"{{$project->title}}"</h4>
                <div class="d-flex fw-lighter">
                    <p><i class="bi bi-chat"></i> Leave a Comment</p>
                    <p class="ms-2">Share on</p>                    
                    <p class="ms-2"> <a href="{{ $shareData['facebook'] }}" target="_blank"><i class="bi bi-facebook"></a></i></p>
                    <p class="ms-2"><a href="{{ $shareData['twitter'] }}" target="_blank"><i class="bi bi-twitter-x"></a></i></p>
                    <p class="ms-2"><a href="{{ $shareData['linkedin'] }}" target="_blank"><i class="bi bi-linkedin"></i></a></p>
                    <p class="ms-2"><a href="{{ $shareData['pinterest'] }}" target="_blank"><i class="bi bi-pinterest"></i></a></p>
                </div>
                <hr>
                <p>
                   {{$project->description}}
                </p>
                <!-- <div class="mt-5">
                    @if($project->project_image)
                    <img src="{{asset('images/projects/'.$project->project_image)}}" width="300" height="100"
                        class=" img-fluid mx-auto d-block mb-3" alt="project image">
                    @endif
                </div> -->
                <div class="mt-5">
                    @if($project->image1)
                    <img src="{{asset('images/projects/'.$project->image1)}}" width="300" height="100"
                        class=" img-fluid mx-auto d-block mb-3" alt="project image">
                    <p class="card-text fw-bold">{{$project->image1_description}}</p>
                    @endif
                </div>
                <div class="mt-5">
                    @if($project->image2)
                    <img src="{{asset('images/projects/'.$project->image2)}}" width="400"
                        class=" img-fluid mx-auto d-block mb-3" alt="project image">
                    <p class="card-text fw-bold">{{$project->image2_description}}</p>
                    @endif
                </div>
                <P> <i class="bi bi-folder orange"></i> {{$project->category}}</P>
                @include('partial.share')

                <div class="mt-5">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('project.comment') }}">
                    @csrf
                        <h3>Leave a Comment</h3>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label rounded-1">Your email address will not be
                                published. </label>
                            <textarea type="text" class="form-control rounded-2" required name="comment" placeholder="Write a Comment" id="exampleInputPassword1"></textarea>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label rounded-5">Name</label>
                            <input type="text" class="form-control" required name="name" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label rounded-5">Email</label>
                            <input type="email" class="form-control" required name="email" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label rounded-5">Website</label>
                            <input type="text" class="form-control" name="website" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Save my name, email and website in this
                                browser for the next time I comment</label>
                        </div>
                        <button type="submit" class="btn bg">SUBMIT</button>

                    </form>
                    <div class="d-flex my-5">
                        <div class="flex-grow-1"><a href="{{ route('project.showPrev', ['id' => $project->id]) }}" class="btn btn-outline-dark rounded-pill ">Prev</a>
                        </div>
                        <div class=""><a href="{{ route('project.showNext', ['id' => $project->id]) }}" class="btn btn-outline-dark rounded-pill">Next</a></div>
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
                    @foreach($projectside as $item)
                    <p><a href="{{url('projectItem/'.$item->id)}}" class="orangeish nav-link">{{$item->title}}</a></p>
                    @endforeach
                    <!-- <p><a href="" class="orangeish nav-link">“A STORY LIKE NO OTHER&#</a></p>
                    <p><a href="" class="orangeish nav-link">“MAINSTREAMING COVID 19 FOR HUM</a></p>
                    <p><a href="" class="orangeish nav-link">CIDO CONDUCTS TRAINING ON COVID</a></p> -->
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
