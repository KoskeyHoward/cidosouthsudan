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
    <div class="container pt-5">
        <div class="m-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card" style="width: 19rem;">
                        <div class="image-container">
                            <div class="overlay">
                                <button class="button">View Program</button>
                            </div>
                            <img src="{{asset('images/SNFI.jpeg')}}" alt="Your Image"id="zoomable-image">
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">Peace And Security</h5>
                            <p class="card-text">CIDO works with the relevant national and international actors to promote
                                peaceful co-existence among communities through active engagement of stakeholders in peace
                                processes.</p>

                        </div>
                    </div>
                   
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 19rem;">
                        <div class="image-container">
                            <div class="overlay">
                                <button class="button">View Program</button>
                            </div>
                            <img src="{{asset('images/SNFI.jpeg')}}" alt="Your Image"id="zoomable-image">
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">Peace And Security</h5>
                            <p class="card-text">CIDO works with the relevant national and international actors to promote
                                peaceful co-existence among communities through active engagement of stakeholders in peace
                                processes.</p>

                        </div>
                    </div>
                   
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 19rem;">
                        <div class="image-container">
                            <div class="overlay">
                                <button class="button">View Program</button>
                            </div>
                            <img src="{{asset('images/SNFI.jpeg')}}" alt="Your Image"id="zoomable-image">
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">Peace And Security</h5>
                            <p class="card-text">CIDO works with the relevant national and international actors to promote
                                peaceful co-existence among communities through active engagement of stakeholders in peace
                                processes.</p>

                        </div>
                    </div>
                   
                </div>
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
