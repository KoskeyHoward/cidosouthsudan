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

        <div class="row  mb-4 ">
        @foreach($volunteer as $item)
          <div class="col-lg-4 mb-4 mb-lg-0 c-program">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('images/volunteers/'.$item->volunteer_image)}}" class="card-img-top" alt=" volunteer">
                <div class="card-body">
                  <h5 class="card-title">{{$item->name}}</h5>
                  <h6 class="card-title">{{$item->profession}}</h6>
                </div>  
            </div>
          </div>
        @endforeach 
        </div>
                
        
@endsection