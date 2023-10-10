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
        <div>
            <div class="row programs mb-4">
                <div class="col-lg-4 mb-4 mb-lg-0 c-program">
                    <div class="card" style="width: 100%;">
                        <div class="image-container" style="width: 100%;">
                            <img src="{{asset('images/peacebuilding.jpeg')}}" alt="Your Image"id="zoomable-image">
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">Peace And Security</h5>
                            <p class="card-text">CIDO works with the relevant national and international actors to promote
                                peaceful co-existence among communities through active engagement of stakeholders in peace
                                processes.</p>
                            <a class="btn programs-btn" href="/peace-building">View Program</a>
                        </div>
                    </div>
                   
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0 c-program">
                    <div class="card" style="width: 100%;">
                        <div class="image-container" style="width: 100%;">
                            <img src="{{asset('images/Livelihood.jpeg')}}" alt="Your Image"id="zoomable-image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Women Rights and Empowerement</h5>
                            <p class="card-text">Under the protection Department, CIDO responds to cases of Gender based violence through direct support, case management, Psycho-social support and gender mainstreaming.</p>
                            <a class="btn programs-btn" href="/women-rights">View Program</a>
                        </div>
                    </div>
                   
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0 c-program ">
                    <div class="card" style="width: 100%;">
                        <div class="image-container" style="width: 100%;">
                            <img src="{{asset('images/GL.jpeg')}}" alt="Your Image"id="zoomable-image">
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">Access To Justice</h5>
                            <p class="card-text">CIDO works with a team of lawyers and paralegals to ensure that vulnerable communities access Justice through Legal information and counselling, pro Bono services...</p>
                            <a class="btn programs-btn" href="#">View Program</a>
                        </div>
                    </div>
                   
                </div>
            </div>

            <div class="row programs mb-4">
                <div class="col-lg-4 mb-4 mb-lg-0 c-program">
                <div class="card" style="width: 100%;">
                        <div class="image-container" style="width: 100%;">
                            <img src="{{asset('images/health-delivery.jpeg')}}" alt="Your Image"id="zoomable-image">
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">Health and Nutrition</h5>
                            <p class="card-text">CIDO is working in close collaboration with the ministry of Health to deliver basic health packages and reduce malnutrition in various counties of South...</p>
                            <a class="btn programs-btn" href="/health-and-nutrition">View Program</a>
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
