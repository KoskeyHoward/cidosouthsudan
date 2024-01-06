@extends('layouts.default')

@section('page-content')
        <div class="about-top mb-1">
          <img src="images/volunteer-crl.jpg" alt="board">
          <div class="about-shade"></div>
          <div class="about-top-text text-center">
            <h1>Our Volunteers </h1>
            <h3>Support to Local Solutions</h3>
          </div>
        </div>

        <div class="container">
          <div class="shadow-lg p-5 mb-5 mt-5 bg-white rounded">
            <p class="text-secondary">SERVE THE HUMANITY</p>

            <h2> Sign up for Our Volunteer Program</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed <br> do eiusmod tempor incididunt ut labore et dolore magna <br> aliqua enim ad minim veniam quis nostrud.</p>
            <a class="btn text-light bg-black" href="/become-volunteer"> SIGNUP</a>
          </div>
        </div>

        <div class="row ps-4 pe-3 mb-4 ">
        @foreach($usersArray as $user)
          <div class="col-lg-3 mb-4 mb-lg-0">
            <div class="card" style="width: 18rem; margin:auto">
                <img src="{{asset('images/users/'.$user['profile_image'])}}" class="card-img-top" alt=" volunteer" height="300px" style="object-fit: cover;">
                <div class="card-body bg-success text-light">
                  <h5 class="card-title">{{$user['name']}}</h5>
                  <h6 class="card-title">{{$user['profession']}}</h6>
                </div>  
            </div>
          </div>
        @endforeach 
        </div>
                
        
@endsection