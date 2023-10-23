@extends('layouts.default')

@section('page-content')
<div class="about-top bg-success mb-1">
  <img src="{{URL('images/GL.jpeg')}}" alt="program">
      <div class="about-shade"></div>
      <div class="about-top-text text-center mt-3 mt-mb-0">
        <h1>HEALTH AND NUTRITION</h1>
        <h3>Support to Local Solutions</h3>
      </div>
    </div>

    <div class="pt-5 text-center" style="width: 65%; margin: auto;" >
        <div class="text-center">
          <div class="image-container" style="width: 100%;">
            <img class="mb-4" src="{{URL('images/Health1.jpg')}}" alt="health and nutrition" width="100%" height="100%" style="object-fit: cover;">
          </div>
        </div>
      <div class="">
        <p>CIDO is working in close collaboration with the ministry of Health to deliver basic health packages <br> and reduce malnutrition in various counties of South Sudan.</p>
      </div>
    </div>

    <!-- <div class="p-5 text-center">
        <img class="mb-3" src="{{URL('images/health-delivery.jpeg')}}" alt="health and nutrition" width="100%">
        <p>CIDO is working in close collaboration with the ministry of Health to deliver basic health packages and reduce malnutrition in various counties of South Sudan.</p>
    </div> -->

    <div class="d-flex justify-content-between m-3">
    <button class="btn programs-btn"><a  href="/peace-building">Prev</a></button>
    <button class="btn programs-btn"><a  href="/women-rights">Next</a></button>
    </div>
@endsection