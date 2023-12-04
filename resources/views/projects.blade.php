@extends('layouts.default')

@section('page-content')
    <div class="about-top mb-1">
      <img src="{{URL('images/women-empowerment.jpg')}}" alt="board">
      <div class="about-shade"></div>
      <div class="about-top-text text-center">
        <h1>Projects </h1>
        <h3>Support to Local Solutions</h3>
      </div>
    </div>

    <div class="row text-center mb-4 p-4 pb-0">
      @foreach($project as $item)
        <div class="col-md-3 cont-project p-4 mb-4 mb-md-0">
          <h5 class="fw-normal">"{{$item->title}}"</h5>
          <P> <i class="bi bi-folder orange"></i> {{$item->category}} <i class="bi bi-chat orange"></i>  Leave a comment</P>
          <p class="project-description">{{$item->description}}</p>
          <a class="orange" href="{{url('projectItem/'.$item->id)}}" style="text-decoration: none;">READ MORE</a>
        </div>
      @endforeach
    </div>
@endsection