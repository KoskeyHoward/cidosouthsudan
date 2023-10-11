@extends('layouts.default')

@section('page-content')
<div class="about-top bg-success mb-1">
      <div class="about-shade"></div>
      <div class="about-top-text text-center mt-3 mt-mb-0">
        <h1>PEACE AND SECURITY </h1>
        <h3>Support to Local Solutions</h3>
      </div>
    </div>

    <div class="p-5 text-center">
        <img class="mb-3" src="{{URL('images/peace-and-security.jpg')}}" alt="peace-and-security" width="100%">
        <p>CIDO works with the relevant national and international actors to promote peaceful co-existence among communities <br> through active engagement of stakeholders in peace processes.</p>
    </div>

    <div class="d-flex justify-content-between m-3">
        <a class="btn orange bg-success" href="/women-rights">Prev</a>
        <a class="btn orange bg-success" href="/health-and-nutrition">Next</a>
    </div>
@endsection