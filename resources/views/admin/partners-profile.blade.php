@include('dashboard.dash-head')
<body>
    <header class="" id="head">
        <div class="header-left ">
            <!-- logo  -->
            <div class="logo text-center">
                <a href=""><img class="mt-4" src="{{URL('images/CIDO-logo.png')}}" alt="cido-logo"></a>
            </div>
            <!-- dashboard/title  -->
            <div class=" text-light p-4 pt-5">
                <h3>Partner</h3>
                
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/dash-partners" style="color: #BFC7F4;">Partners / </a><a href="{{url('dash-partnerItem/'.$Partners->id)}}" class="text-light">partner Profile</a>
            </p>
            </div>
        </div>
        <!-- profile  -->
        @include('dashboard.dash-drawer')
    </header>
    <!-- content  -->
    <div class="content">
        <!-- side-bar  -->
        @include('dashboard.sidebar')

        <main class="programs-main p-1 pt-0">
            <div class="card pt-1 pb-2 mb-0 mt-0">
                <h3 class="p-1 ps-0">Profile</h3>
                    <div class="card p-2 pb-0 mb-3 text-light" style="background-color: #00A651; border:none; width: 180px; margin-left:0">
                        <h4>{{$PartnerCount}}</h4>
                        <p>Partners</p>
                    </div>   
                    
                    <div class="card p-4 mb-3">
                    @if(isset($Partners))                                          
                        <div class="top">                            
                            <div class="">
                                <img src="{{asset('images/Partners/'.$Partners->partner_image)}}" alt="profile" width="110px"> 
                            </div>                               
                                                        
                            <div class="ms-1 mt-3">                      
                        
                                <div class="page-numbers">
                                    <a class="btn text-light" href="{{url('edit-partner/'.$Partners->id)}}" style="background-color: #f58220;"> Edit Profile</a>
                                </div>                            
                            </div>                            
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-3">
                                <div class="mb-4">
                                    <h5 class="card">Name: {{$Partners->name}}</h5>
                                </div>
                                <div class="">
                                    <h5 class="card">Email: {{$Partners->email}}</h5>
                                </div>                                    
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="mb-4">
                                    <h5 class="card">Link: {{$Partners->link}}</h5>
                                </div>
                                                                    
                            </div>                                                        
                        </div>  
                    @else
                        <p>No partner available.</p>
                    @endif                     
                    </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
</body>
</html>