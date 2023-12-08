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
                <h3>Create Volunteer</h3>
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/dash-volunteers" style="color: #BFC7F4;">Volunteers /</a><a href="/new-volunteer" class="text-light"> New Volunteer</a></p>
            </div>
        </div>
        <!-- profile  -->
        @include('dashboard.dash-drawer')
    </header>
    <!-- content  -->
    <div class="content">
        <!-- side-bar  -->
        <div class="sidebar pt-4 ps-5 pe-5">
            <ul class="text-light">
                <li><a href="/dashboard"><i class="material-icons active">speed</i> Dashboard</a></li>
                <li><a href="/dash-programs"><i class="material-icons">layers</i> Programs</a></li>
                <li><a href="/dash-projects"><i class="material-icons">layers</i> Projects</a></li>
                <li><a href="/user-management"><i class="material-icons">person</i> Users</a></li>
                <li><a href="/dash-volunteers"><i class="material-icons">person</i> volunteers</a></li>
            </ul>
        </div>

        <main class="programs-main p-4 pt-0">
            <div class="card " style="border: none;">
                <div class="mb-4 p-3 rounded-3" style="background-color: #E8E8E8;">
                    <h3>New Volunteer</h3>
                </div>

                @if (session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif
                <div class="p-3 pt-0">                    
                <form action="{{url('new-volunteer')}}" method="POST" enctype="multipart/form-data">
                        @csrf                      
                        <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Name</label>
                            <input type="text" name="name" value="" class="form-control">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Email</label>
                            <input type="email" name="email" value="" class="form-control">
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
                        </div>
                        <!-- <div class="row">
                            <div class=" col-md-4 form-group mb-3">
                                <label class="mb-2 fw-bold" for=""> Facebook url</label>
                                <input type="text" name="facebook" value=""  class="form-control">
                            </div>
                            <div class=" col-md-4 form-group mb-3">
                                <label class="mb-2 fw-bold" for=""> Instagram url</label>
                                <input type="text" name="instagram" value=""  class="form-control">
                            </div>
                            <div class="col-md-4 form-group mb-3">
                                <label class="mb-2 fw-bold" for=""> X url</label>
                                <input type="text" name="twitter" value=""  class="form-control">
                            </div>
                        </div> -->
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Image</label>
                            <input type="file" name="volunteer_image" class="form-control">
                        </div>
            
                        <p class="text-secondary fw-bold">Supported format: JPEG, PNG, JPG</p>           
                            <a href="/volunteer-profile" class="btn" style="border: 1px solid #F58220; color:#F58220;">Cancel</a>
                            <button type="submit" class="btn ms-4" style="background-color: #F58220; color:white;">Create</button>
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