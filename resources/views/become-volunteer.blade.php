@extends('layouts.default')
@section('page-content')    
    <div class="about-top mb-1">
          <img src="images/volunteer-crl.jpg" alt="board">
          <div class="about-shade"></div>
          <div class="about-top-text text-center">
            <h1>Volunteer </h1>
            <h3>Support to Local Solutions</h3>
          </div>
        </div>

    <div class="p-5 pt-0">

        <h2 class="text-center pt-3">Volunteer Application</h2>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
   
        @elseif (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
        <form method="POST" action="{{route('volunteer.apply')}}" class="border border-success rounded-4 mt-4 ">
            @csrf
            <div class="m-5">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" required value="{{ old('name') }}">
                            @if ($errors->has('name'))
                            <div class="error text-danger">{{ $errors->first('name') }}</div>
                        @endif
                        </div>
                    </div>
                    <div class="col-lg-6">  <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" name="email" class="form-control" id="email" required value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <div class="error text-danger">{{ $errors->first('email') }}</div>
                        @endif
                    </div></div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Gender</label>
                            <br>
                            <select id="gender" name="gender" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <option value="" disabled selected class="text-secondary">Select Gender</option>    
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="preferNotToSay">Prefer Not to Say</option>
                            </select>
                            @if ($errors->has('gender'))
                            <div class="error text-danger">{{ $errors->first('gender') }}</div>
                        @endif
                        </div>
                    </div>
                    <div class="col-lg-6">  
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <div>
                                <input type="tel" name="phone_number" class="form-control flex-3" id="phone_number" value="{{ old('phone_number') }}"> 
                                @if ($errors->has('phone_number'))
                            <div class="error text-danger">{{ $errors->first('phone_number') }}</div>
                        @endif
                            </div>                           
                        </div>
                    </div>
                </div>
            
            
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Profession</label>
                    <input type="text" name="profession" class="form-control" id="exampleInputPassword1" value="{{ old('profession') }}"">
                </div>            
                @if ($errors->has('profession'))
                            <div class="error text-danger">{{ $errors->first('profession') }}</div>
                        @endif
                <button type="submit" class="btn bg">Sign up</button>
            </div>
        </form>
    </div>

    <script>
        const phoneInputField = document.querySelector("#phone_number");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
 </script>      
@endsection