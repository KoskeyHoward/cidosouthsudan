@include('dashboard.dash-head')
<body>
    <header class="" id="head">
        <div class="header-left">
            <!-- logo  -->
            <div class="logo text-center">
                <a href=""><img class="mt-4" src="{{URL('images/CIDO-logo.png')}}" alt="cido-logo"></a>
            </div>
            <!-- dashboard/title  -->
            <div class=" text-light p-5 ps-4">
                <h3>Partners</h3>
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/dash-partners" class="text-light">Partners</a></p>
            </div>
        </div>
        <!-- profile  -->
        @include('dashboard.dash-drawer')
    </header>
    <!-- content  -->
    <div class="content ">
        <!-- side-bar  -->
        @include('dashboard.sidebar')
        <main class="programs-main p-4 pt-0 ">
            <div class="card pt-3 pb-2 mb-0 mt-0 ">
                <h3 class="p-3 ps-0">Partners</h3>
                <div class="top">
                    <div>
                        <!-- <div class="card p-2 pb-0 text-light" style="background-color: #5E72E4; border:none;">
                            <h4>200</h4>
                            <p>USERS</p>
                        </div> -->
                        <!-- <div class="p-2 ps-0 ">
                            <p class="fw-bold text-secondary">All Users</p>
                        </div> -->
                    </div>

                    <div>
                        <div class="mb-3 mt-2">
                            <a href="/new-partner" class="btn text-light ps-5 pe-5" style="text-decoration: none; background-color:#F58220">ADD PARTNER</a>
                        </div>
                        <form class="box">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="search" id="searchInput" placeholder="Search...">
                        </form>
                    </div>
                </div>
                <hr>

                <div class="table-responsive">
                <table class="table table-hover table-bordered border-secondary mb-5">
                    <thead class="table-active">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Link(URL)</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($Partners as $user)
                        <tr>
                            <td scope="row"><a href="{{url('dash-partnerItem/'.$user->id)}}">{{$user->name}}</a></td>
                            <td>{{$user['email']}}</td>
                            <td>{{$user['link']}}</td>                            
                            <td><a href="{{url('edit-partner/'.$user->id)}}"><i class="fa fa-edit me-3"></i></a> <a href="{{url('delete-partner/'.$user->id)}}"><i class="fa fa-trash"></i></a></td>
                        </tr>                        
                    </tbody>
                    @endforeach
                </table>
                </div>
            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
    <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {
            let filterValue = this.value.toLowerCase();
            let tableRows = document.querySelectorAll('.table tbody tr');

            tableRows.forEach(row => {
                let title = row.querySelector('td:first-child').textContent.toLowerCase();
                let description = row.querySelector('td:nth-child(2)').textContent.toLowerCase();

                if (title.includes(filterValue) || description.includes(filterValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>