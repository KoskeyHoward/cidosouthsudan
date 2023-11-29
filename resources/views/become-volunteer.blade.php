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
        <form method="POST" action="{{route('volunteer.apply')}}" class="border border-success rounded-4 mt-4 ">
            @csrf
            <div class="m-5">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" required>
                        
                        </div>
                    </div>
                    <div class="col-lg-6">  <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" required>
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
                        </div>
                    </div>
                    <div class="col-lg-6">  
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <div>
                                <input type="tel" class="form-control flex-3" id="phone_number"> 
                            </div>                           
                        </div>
                    </div>
                </div>
            
            
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Profession</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div> 
                <div class="row">
                            <div class=" col-md-4 form-group mb-3">
                                <label for=""> Facebook url</label>
                                <input type="text" name="fabebook" value=""  class="form-control">
                            </div>
                            <div class=" col-md-4 form-group mb-3">
                                <label for=""> Instagram url</label>
                                <input type="text" name="instagram" value=""  class="form-control">
                            </div>
                            <div class="col-md-4 form-group mb-3">
                                <label for=""> X url</label>
                                <input type="text" name="twitter" value=""  class="form-control">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Image</label>
                            <input type="file" name="user_image" class="form-control">
                        </div>           
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