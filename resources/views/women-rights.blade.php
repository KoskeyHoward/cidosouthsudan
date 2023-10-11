@extends('layouts.default')

@section('page-content')
<div class="about-top bg-success mb-1">
      <div class="about-shade"></div>
      <div class="about-top-text text-center mt-3 mt-mb-0">
        <h1>WOMEN RIGHTS AND EMPOWERMENT </h1>
        <h3>Support to Local Solutions</h3>
      </div>
    </div>

    <div class="p-5 text-center">
        <img class="mb-3" src="{{URL('images/women-empowerment.jpg')}}" alt="womens-rights" width="100%">
        <p>Under the protection Department, CIDO responds to cases of Gender 
            based violence through direct support, <br>case management , 
            Psycho-social support and gender mainstreaming.</p>
    </div>

    <div class="d-flex justify-content-between m-3">
        <a class="btn orange bg-success" href="/health-and-nutrition">Prev</a>
        <a class="btn orange bg-success" href="/peace-building">Next</a>
    </div>
@endsection