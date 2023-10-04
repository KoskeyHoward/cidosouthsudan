@extends('layouts.default')

@section('page-content')
<div class="about-top bg-success mb-1">
      <div class="about-shade"></div>
      <div class="about-top-text text-center mt-3 mt-mb-0">
        <h1>HEALTH AND NUTRITION</h1>
        <h3>Support to Local Solutions</h3>
      </div>
    </div>

    <div class="p-5 text-center">
        <img class="mb-3" src="{{URL('images/health-delivery.jpeg')}}" alt="peace-and-security" width="">
        <p>CIDO is working in close collaboration with the ministry of Health to deliver basic health packages and reduce malnutrition in various counties of South Sudan.</p>
    </div>

    <div class="d-flex justify-content-between m-3">
        <a class="btn orange bg-success" href="/peace-building">Prev</a>
        <a class="btn orange bg-success" href="/women-rights">Next</a>
    </div>
@endsection