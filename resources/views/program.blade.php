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
          <div class="image-container" style="width: 100%; height:400px;">
            <img class="mb-3" src="{{asset('images/programs/'.$program->program_image)}}" alt="peace-and-security" width="100%">
          </div>
        </div>
      <div class="ps-5 pe-5">
        <p>{{$program->description}}</p>
      </div>
    </div>
    @endif

    

    <div class="d-flex justify-content-between m-3">
        <button class="btn programs-btn"><a href="{{ route('program.showPrev', ['id' => $program->id]) }}">Prev</a></button>
        <button class="btn programs-btn"><a href="{{ route('program.showNext', ['id' => $program->id]) }}">Next</a></button>
    </div>
@endsection