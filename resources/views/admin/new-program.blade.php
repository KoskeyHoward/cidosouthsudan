@include('dashboard.dash-head')
<body>
    <header class="" id="head">
        <div class="header-left">
            <!-- logo  -->
            <div class="logo text-center">
                <a href=""><img class="mt-4" src="{{URL('images/CIDO-logo.png')}}" alt="cido-logo"></a>
            </div>
            <!-- dashboard/title  -->
            <div class=" text-light p-4 pt-5">
                <h3>Programs</h3>
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/dash-programs" style="color: #BFC7F4;">Programs /</a><a href="/new-program" class="text-light"> new-Program</a></p>
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
            <div class="card" style="border: none;">
                <div class="pb-4 p-5">
                    <h3>Program</h3>
                    <!-- <p>These are programs provided by CIDO.</p> -->
                </div>

                @if (session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif
                <div class="p-5 pt-0">                    
                <form action="{{url('new-program')}}" method="POST" enctype="multipart/form-data">
                        @csrf                        
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Description</label>
                            <textarea type="text" name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Partners</label>
                            <select name="partners" class="form-control" >
                                <option value="">Select partner</option>
                                @foreach($partner as $item)
                                <option value="">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Start date</label>
                            <input type="date" name="start_date" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> End date</label>
                            <input type="date" name="end_date" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2 fw-bold" for=""> Image</label>
                            <input type="file" name="program_image" class="form-control">
                        </div>
            
                        <p class="text-secondary fw-bold">Supported format: PNG,SVG</p>           
                            <button class="btn" style="border: 1px solid #F58220; color:#F58220;">Cancel</button>
                            <button type="submit" class="btn ms-4" style="background-color: #F58220; color:white;">Submit</button>
                    </form>
                </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
</body>
</html>