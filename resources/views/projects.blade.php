@extends('layouts.default')

@section('page-content')
    <div class="about-top mb-1">
      <img src="{{URL('images/women-empowerment.jpg')}}" alt="board">
      <div class="about-shade"></div>
      <div class="about-top-text text-center">
        <h1>Projects </h1>
        <h3>Support to Local Solutions</h3>
      </div>
    </div>

    <div class="row text-center p-4 pb-0">
      @foreach($project as $item)
        <div class="col-md-3 cont-project p-4 mb-4 mb-md-0">
          <h5 class="fw-normal">"{{$item->title}}"</h5>
          <P> <i class="bi bi-folder orange"></i> Shelter/Non-Food items <i class="bi bi-chat orange"></i>  Leave a comment</P>
          <p>{{$item->description}}</p>
          <a class="orange" href="{{url('projectItem/'.$item->id)}}" style="text-decoration: none;">READ MORE</a>
        </div>
      @endforeach

      <div class="col-md-3 cont-project p-4 mb-4 mb-md-0">
        <h5 class="fw-normal">MAINSTREAMING COVID 19 FOR HUMANITARIAN FRONT-LINE WORKERS IN YEI.</h5>
        <P> <i class="bi bi-folder orange"></i> Civic Education, Health Services, Uncategorized  <br><i class="bi bi-chat orange"></i>  Leave a comment</P>
        <p>Corona virus still remains a huge topic on global stage. Thousands are feared to have died already, new cases...</p>
        <a class="orange" href="{{route('read-more')}}" style="text-decoration: none;">READ MORE</a>
      </div>

      <div class="col-md-3 cont-project p-4">
        <h5 class="fw-normal">CIDO CONDUCTS TRAINING ON COVID 19.</h5>
        <P> <i class="bi bi-folder orange"></i> Civic Education, Health Services <br> <i class="bi bi-chat orange"></i>  Leave a comment</P>
        <p>In a bid to sensitize the general public on the risks associated with the deadly corona virus  known as...</p>
        <a class="orange" href="{{route('read-more')}}" style="text-decoration: none;">READ MORE</a>
      </div>
    </div>


    <div class="row text-center p-4">
      <div class="col-md-3 cont-project p-4 mb-4 mb-md-0">
        <h5 class="fw-normal">CIDO’S STAFFS OBSERVES VIVID COVID 19 AWARENESS AT ALL TIMES.</h5>
        <P> <i class="bi bi-folder orange"></i> Civic Education, Health Services <i class="bi bi-chat orange"></i>  Leave a comment</P>
        <p> CIDO’s Staff using her own pen for signing in attendance book on entrance to the office while observing...</p>
        <a class="orange" href="{{route('read-more')}}" style="text-decoration: none;">READ MORE</a>
      </div>

      <div class="col-md-3 cont-project p-4 mb-4 mb-md-0">
        <h5 class="fw-normal">CIDO ADVANCING HEALTH SERVICES THROUGH MOBILE CLINIC.</h5>
        <P> <i class="bi bi-folder orange"></i> Health Services  <i class="bi bi-chat orange"></i>  Leave a comment</P>
        <p>In partnership with South Sudan Humanitarian Fund (SSHF), CIDO deployed health personnel on ground to enhance the provision of...</p>
        <a class="orange" href="{{route('read-more')}}" style="text-decoration: none;">READ MORE</a>
      </div>

      <div class="col-md-3 cont-project p-4">
        <h5 class="fw-normal">SCALING UP NUTRITION THROUGH OUTREACHES!</h5>
        <P> <i class="bi bi-folder orange"></i> Nutrition <br> <i class="bi bi-chat orange"></i>  Leave a comment</P>
        <p>Through its partnership with Scaling Up Nutrition Civil Society Alliance (SUN CSA), CIDO has been able to mobilize, organize...</p>
        <a class="orange" href="{{route('read-more')}}" style="text-decoration: none;">READ MORE</a>
      </div>
    </div>
@endsection