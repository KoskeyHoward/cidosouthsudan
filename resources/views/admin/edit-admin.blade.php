@include('dashboard.dash-head')
<body>
    <header  id="head">
        <div class="header-left">
            <!-- logo  -->
            <div class="logo text-center">
                <a href=""><img class="mt-4" src="{{URL('images/CIDO-logo.png')}}" alt="cido-logo"></a>
            </div>
            <!-- dashboard/title  -->
            <div class=" text-light p-4 pt-5">
                <h3>Profile</h3>
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/admin-profile" style="color: #BFC7F4;">User Profile /</a><a href="/edit-admin" class="text-light"> Edit-Profile</a></p>
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
                <div class="mb-4 p-3 rounded-3" style="background-color: #E8E8E8;">
                    <h3>Edit Profile</h3>
                </div>

                @if (session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif
                <div class="p-3 pt-0">                    
                <form action="{{url('update-admin/'.$admin->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')                       
                        <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label for=""> Name</label>
                            <input type="text" name="name" value="{{$admin->name}}" class="form-control">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for=""> Email</label>
                            <input type="email" name="email" value="{{$admin->email}}" class="form-control">
                        </div>
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
                                        <input type="tel" class="form-control flex-3" name="phone_number" value="{{$admin->phone_number}}" id="phone_number"> 
                                    </div>                           
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for=""> Profession</label>
                                <input type="text" name="profession" value="{{$admin->profession}}"  class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for=""> Image</label>
                            <input type="file" name="profile_image" class="form-control">
                            <img src="{{asset('images/users/'.$admin->profile_image)}}" width="100px" height="100px" alt="user image">
                        </div>
            
                        <p class="text-secondary fw-bold">Supported format: PNG,SVG</p>           
                            <a href="/user-profile" class="btn" style="border: 1px solid #F58220; color:#F58220;">Cancel</a>
                            <button type="submit" class="btn ms-4" style="background-color: #F58220; color:white;">Update</button>
                    </form>
                </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
    <script>
        const phoneInputField = document.querySelector("#phone_number");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
 </script> 
</body>
</html>