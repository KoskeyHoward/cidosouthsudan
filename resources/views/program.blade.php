@extends('layouts.default')

@section('page-content')
@if(isset($program))
<div class="about-top mb-1">
  <img src="{{URL('images/GL.jpeg')}}" alt="program">
      <div class="about-shade"></div>
      <div class="about-top-text text-center mt-3 mt-mb-0">
        <h1>{{$program->title}} </h1>
        <h3>Support to Local Solutions</h3>
      </div>
    </div>

    <div class="pt-5 text-center" >
        <div class="card text-center mb-3" style="width: 53rem; margin: auto;">
          <div class="image-container" style="width: 100%;">
            <img class="mb-3" src="{{asset('images/programs/'.$program->program_image)}}" alt="peace-and-security" width="100%">
          </div>
        </div>
      <div class="">
        <p>{{$program->description}}</p>
      </div>
    </div>
    @endif

    <!-- <div class="p-5 text-center">
        <img class="mb-3" src="{{URL('images/peace-and-security.jpg')}}" alt="peace-and-security" width="100%">
        <p>CIDO works with the relevant national and international actors to promote peaceful co-existence among communities <br> through active engagement of stakeholders in peace processes.</p>
    </div> -->

    <div class="d-flex justify-content-between m-3">
        <button class="btn programs-btn"><a href="/women-rights">Prev</a></button>
        <button class="btn programs-btn"><a href="/health-and-nutrition">Next</a></button>
        <!-- <button class="btn programs-btn"> <a href="/programs" > More Programs >></a></button> -->
    </div>
@endsection