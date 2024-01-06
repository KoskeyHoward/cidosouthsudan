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
                <h3>Projects</h3>
                <p><a href="/dashboard" style="color: #BFC7F4;">Dashboard / </a><a href="/dash-projects" class="text-light">Projects</a></p>
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
            <div class="card pt-3 pb-2 mb-0 mt-0">
                <h3 class="p-3 ps-0">Projects</h3>                      
                <div class="top">
                    <div>
                        <div class="card p-2 pb-0 text-light" style="background-color: #00A651; border:none;">
                            <h4>{{$projectCount}}</h4>
                            <p>PROJECTS</p>
                        </div>
                        <div class="p-2 ps-0">
                            <p> Show 
                                <select id="rowCount">
                                    <option value="{{$projectCount}}"> All</option>
                                    <option value="3"> 3</option>
                                    <option value="5"> 5</option>
                                    <option value="10">10 </option>
                                    <option value="25">25</option>
                                </select>
                                entries
                            </p> 
                        </div>
                    </div>

                    <div>
                        <div class="mb-3 mt-2">
                            <a href="/new-project" class="btn text-light ps-5 pe-5" style="text-decoration: none; background-color:#F58220">ADD PROJECT</a>
                        </div>
                        <form class="box">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="search" id="searchInput" placeholder="Search...">
                        </form>
                    </div>
                </div>

                <div class="table-responsive mt-3">
                        
                        <div class="">
                            <table class="table activities-table table-bodered table-striped">
                                <thead>
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Title</th>
                                        <th>Description</th>
                                        <!-- <th>Image</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($project as $item)
                                    
                                    <tr> 
                                        <!-- <td> {{$item->id}}</td> -->
                                        <td><a href="{{url('dash-projectItem/'.$item->id)}}"> {{$item->title}} </a></td>
                                        <td>{{$item->description}}</td>
                                        <!-- <td><img src="{{asset('images/projects/'.$item->project_image)}}" width="70px" height="70px" alt=""></td> -->
                                        <td><a href="{{url('edit-project/'.$item->id)}}" class="text-success"><i class="fa fa-edit me-3"></i></a> <a href="{{url('delete-project/'.$item->id)}}"  class="text-danger"><i class="fa fa-trash"></i></a></td> 
                                    </tr>                                    
                                </tbody>
                                @endforeach
                            </table>
                        </div>                    
                </div>

                <!-- <div class="page-numbers">
                    <p >Showing <span id="displayRange"></span>  of {{$projectCount}} entries</p>
                </div> -->

            </div>
        </main>

    </div>
    @include('dashboard.dash-footer')
    <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {
            let filterValue = this.value.toLowerCase();
            let tableRows = document.querySelectorAll('.activities-table tbody tr');

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

        document.getElementById('rowCount').addEventListener('change', function() {
            let selectedValue = parseInt(this.value);
            let tableRows = document.querySelectorAll('.activities-table tbody tr');
            
            tableRows.forEach((row, index) => {
                if (index < selectedValue) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // let totalVisibleRows = document.querySelectorAll('.activities-table tbody tr').length; // Get the number of rows currently visible
        //  // Total number of entries/projects
        // document.getElementById('displayRange').innerText = `${totalVisibleRows}`;
        
    </script>
</body>
</html>