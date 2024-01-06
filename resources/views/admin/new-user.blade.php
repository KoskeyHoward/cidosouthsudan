@include('dashboard.dash-head')
<body>
    <header id="head">
        <div class="header-left">
            <!-- logo  -->
            <div class="logo text-center">
                <a href=""><img class="mt-4" src="{{URL('images/CIDO-logo.png')}}" alt="cido-logo"></a>
            </div>
            <!-- dashboard/title  -->
            <div class=" text-light p-4 pt-5">
                <h3>Programs</h3>
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/user-management" style="color: #BFC7F4;">User / </a><a href="/new-user" class="text-light">new-user</a></p>
            </div>
        </div>
        <!-- profile  -->
        @include('dashboard.dash-drawer')
    </header>
    <!-- content  -->
    <div class="content">
        <!-- side-bar  -->
        @include('dashboard.sidebar')

        <main class="programs-main p-4 pt-0">
            <div class="card " style="border: none;">
                <div class="pb-4 p-5">
                    <h2>Create User</h2>
                </div>
                @if (session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif

                <div class="p-5 pt-0">       
                        <form method="POST" action="{{route('store-user',$user->id ?? null)}}" class="" enctype="multipart/form-data">
                                
                        @csrf
                        <div class="">   
                            <div class="row">                   
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label fw-bold">Full name</label>
                                    <input type="name" name="name" class="form-control" placeholder="Enter first name" id="exampleInputPassword1" value="{{$user['name'] ?? old('name')}}">
                                    @if ($errors->has('name'))
                                    <div class="error">{{ $errors->first('name') }}</div>
                                @endif
                                </div>            
                                <div class=" col-md-6 mb-3">
                                    <label for="email" class="form-label fw-bold">Email </label>
                                    @if($user != null)
                                    <input type="email" name="email" class="form-control muted" placeholder="Enter your email"  value="{{$user['email'] ?? old('email')}} " >
                                    @else
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email"  value="{{$user['email'] ?? old('email')}}">
                                    
                                    @endif
                                @if($errors->has('email'))
                                    <div class="text-danger">
                                        {{$errors->first('email')}}
                                    </div>
                                @endif
                                </div>      
                            </div>   
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="mb-2 fw-bold" for="exampleInputEmail1" class="form-label">Gender</label>
                                        <br>
                                        <select id="gender" name="gender" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            <option value="" disabled selected class="text-secondary">Select Gender</option>    
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="preferNotToSay">Prefer Not to Say</option>
                                        </select>
                                        @if($errors->has('gender'))
                                            <div class="text-danger">
                                                {{$errors->first('gender')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">  
                                    <div class="mb-3">
                                        <label class="mb-2 fw-bold" for="phone_number" class="form-label">Phone Number</label>
                                        <div>
                                            <input type="tel" name="phone_number" class="form-control flex-3" id="phone_number"> 
                                        </div>                           
                                    </div>
                                </div>
                            </div>   
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label class="mb-2 fw-bold" for=""> Profession</label>
                                    <input type="text" name="profession" value=""  class="form-control">
                                </div>
                            
                                <div class="col-md-6 mb-3">
                                    <label for="role" class="form-label fw-bold">Role</label>
                                    <select name="role"  id=" roles" class="form-select">
                                        <option value="">Select an option</option>
                                        <option value="3">Volunteer</option>
                                        <option value="1">User</option>
                                    </select>
                                    @if($errors->has('role_id'))
                                    <div class="text-danger">
                                        {{$errors->first('role_id')}}
                                    </div>
                                @endif
                                    
                                </div> 
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2 fw-bold" for=""> Image</label>
                                <input type="file" name="profile_image" class="form-control">
                            </div>

                            <button type="submit" class="btn" style="background-color: #F58220; color:white;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
</body>
</html>
