@extends('layouts.default')

@section('page-content')
    <div class="about-top mb-1">
          <img src="images/cido.jpg" alt="board">
          <div class="about-shade"></div>
          <div class="about-top-text text-center">
            <h1>Programs </h1>
            <h3>Support to Local Solutions</h3>
          </div>
    </div>
    <div class="container pt-3">
        <div>
            <div class="row programs mb-4">
                @foreach($program as $item)
                <div class="col-lg-4 mb-4 mb-lg-0 c-program">
                    <div class="card" style="width: 100%;">
                        <div class="image-container" style="width: 100%;">
                            <img src="{{asset('images/programs/'.$item->program_image)}}" alt="Your Image"id="zoomable-image">
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$item->title}}</h5>
                            <p class="card-text">{{$item->description}}</p>
                            <a class="btn programs-btn" href="{{url('programItem/'.$item->id)}}">View Program</a>
                        </div>
                    </div>
                </div>
                @endforeach                
                
            </div>            
        </div>
    </div>
    <script>
        const buttons = document.querySelectorAll('.button');
const images = document.querySelectorAll('.image-container img');

buttons.forEach((button) => {
    button.addEventListener('mouseenter', () => {
        const targetId = button.getAttribute('data-target');
        const targetImage = document.getElementById(targetId);
        targetImage.style.transform = 'scale(0.9)';
    });

    button.addEventListener('mouseleave', () => {
        const targetId = button.getAttribute('data-target');
        const targetImage = document.getElementById(targetId);
        targetImage.style.transform = 'scale(1)';
    });
});
    </script>
@endsection
