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
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="admin-profile" style="color: #BFC7F4;">User Profile /</a><a href="/edit-admin" class="text-light"> Edit-Profile</a></p>
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
                <div class="mb-4 p-3 pb-2 rounded-3" style="background-color: #E8E8E8;">
                    <h3>Change Password</h3>
                    <p>You can set a new password here</p>
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <!-- @if (session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif -->
                
                <div class="p-3 pt-0">                    
                <form action="{{route('update-password')}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')                       
                        <div class="password-form ps-3 pe-4">
                            <div class="form-group mb-4">
                                <label for="" class="fw-bold mb-2"> Old Password</label>
                                <input type="password" id="old_password" name="old_password" class="form-control">
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="fw-bold mb-2"> New Password</label>
                                <input type="password" id="new_password" name="new_password" onchange="validatePassword()"  class="form-control">
                                <span id="password-error" class="text-danger"></span>
                                <span id="similar-password" class="text-danger"></span>
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="fw-bold mb-2"> Confirm New Password</label>
                                <input type="password" id="confirm-password" name="confirm_password"  class="form-control">
                                <span id="confirm" class="text-danger"></span>
                            </div>  
                            <input type="checkbox" class="mb-3" onclick="showPassword()"> Show Password                    
                        </div>
                        <button type="submit" class="btn ms-3" style="background-color: #F58220; color:white;">Change Password</button>
                        
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

        function showPassword() {
            var x = document.getElementById("old_password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function validatePassword() {
            if (document.getElementById("new_password").value.length < 8) {
                document.getElementById("password-error").innerHTML = "Password must be at least 8 characters long";
            } 
            if(document.getElementById("new_password").value == document.getElementById("old_password").value){
                document.getElementById("similar-password").innerHTML = "new password cannot be the same as the old password";
            }
            if(document.getElementById("new_password").value != document.getElementById("confirm_password").value){
                document.getElementById("confirm").innerHTML = "passwords don't match";
            } else {
                document.getElementById("password-error").innerHTML = "";
                document.getElementById("similar-error").innerHTML = "";
                document.getElementById("confirm").innerHTML = "";
            }
        }
 </script> 
</body>
</html>