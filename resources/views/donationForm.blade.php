@extends('layouts.default')
@section('page-content')   
<div class="about-top mb-1">
          <img src="{{URL('images/children1.jpeg')}}" alt="board">
          <div class="about-shade"></div>
          <div class="about-top-text text-center">
            <h1>Donate </h1>
            <h3>Support to Local Solutions</h3>
          </div>
        </div>

    <div class="p-5 pt-0">
        <h2 class="text-center pt-3">Donation Form</h2>
        <form class="border border-success rounded-4 mt-4 ">
            <div class="m-5">

                <div class="row">
                    <!-- name  -->
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">First Name (required)</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" required>
                        
                        </div>
                    </div>
                    <!-- last name  -->
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Last Name (required)</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" required>
                        </div>
                    </div>                    
                </div>

                <div class="row">
                    <!-- email -->
                    <div class="col-lg-6">  
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email (required)</label>
                            <input type="email" class="form-control" id="exampleInputPassword1" required>
                        </div>
                    </div>
                    <!-- gender -->
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
                </div>

                <div class="row">
                    <!-- phone  -->
                    <div class="col-lg-6">  
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Phone Number (required)</label>
                            <input type="tel" class="form-control" id="exampleInputPassword1" required>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Country</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="amount">Donation Amount (USD):</label>
                        <input type="number" class="form-control" id="amount" name="amount" required>
                    </div>

                    <div class="mb-3">
                        <label for="message">Message (Optional):</label>
                        <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                    </div>
                </div>
            
            
                
            
                <button type="submit" class="btn bg">Donate</button>
            </div>
        </form>
    </div>
@endsection