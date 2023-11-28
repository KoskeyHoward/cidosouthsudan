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
        <div class="sidebar pt-4 ps-5 pe-5">
            <ul class="text-light">
                <li><a href="/dashboard"><i class="material-icons">speed</i> Dashboard</a></li>
                <li><a href="/dash-programs"><i class="material-icons">layers</i> Programs</a></li>
                <li><a href="/user-management"><i class="material-icons">person</i> User Management</a></li>                
                <li><a href="/dash-projects"><i class="material-icons">layers</i> Projects</a></li>
            </ul>
        </div>

        <main class="programs-main p-4 pt-0">
            <div class="card " style="border: none;">
                <div class="pb-4 p-5">
                    <h2>Create User</h2>
                </div>

                <div class="p-5 pt-0">       
                    @if($user != null)
                    <form method="POST" action="{{route('edit-user',$user->id ?? null)}}" class="">
                        @elseif($user == null)
                        <form method="POST" action="{{route('store-user',$user->id ?? null)}}" class="">
                    @endif             
                        @csrf
                        <div class="">                      
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Full name</label>
                                <input type="name" name="name" class="form-control" placeholder="Enter first name" id="exampleInputPassword1" value="{{$user['name'] ?? old('name')}}">
                                @if ($errors->has('name'))
                                <div class="error">{{ $errors->first('name') }}</div>
                            @endif
                            </div>            
                            <div class="mb-3">
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
                            <div class="mb-3">
                                <label for="role" class="form-label fw-bold">Role</label>
                                <select name="role"  id=" roles" class="form-select">
                                    <option value="">Select an option</option>
                                    <option value="1">Volunteer</option>
                                    <option value="3">User</option>
                                </select>
                                @if($errors->has('role_id'))
                                <div class="text-danger">
                                    {{$errors->first('role_id')}}
                                </div>
                            @endif
                                
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
