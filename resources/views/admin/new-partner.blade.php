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
                <h3>Create Partner</h3>
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/dash-partners" style="color: #BFC7F4;">Partners /</a><a href="/new-partner" class="text-light"> New Partner</a></p>
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
                    <h3>New Partner</h3>
                </div>

                @if (session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif
                <div class="p-3 pt-0">                    
                <form action="{{url('new-partner')}}" method="POST" enctype="multipart/form-data">
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
                            <div class="col-md-12 form-group mb-3">
                                <label class="mb-2 fw-bold" for=""> Link(URL)</label>
                                <input type="text" name="link" value=""  class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Image</label>
                            <input type="file" name="partner_image" class="form-control">
                        </div>
            
                        <p class="text-secondary fw-bold">Supported format: JPEG, PNG, JPG</p>           
                            <a href="/partner-profile" class="btn" style="border: 1px solid #F58220; color:#F58220;">Cancel</a>
                            <button type="submit" class="btn ms-4" style="background-color: #F58220; color:white;">Create</button>
                    </form>
                </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
    
</body>
</html>