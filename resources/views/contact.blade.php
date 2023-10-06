@extends('layouts.default')
@section('page-content')
<div class="container p-5">
    <div class="row mt-5">
        <div class="col-lg-3 text-center">
            <div class=""><i class="bi bi-house orange fs-1"></i></div>
            <h5>VISIT US</h5>
            <p>Plot No. 284, Hai Juba Nabari,</p>
            <p class="fw-bold orange fs-5">Juba, South Sudan</p>
             </div>
             <div class="col-lg-1 border-end"></div>
        <div class="col-lg-3 text-center c-contact">
            <div class=""><i class="bi bi-telephone-fill orange fs-1  text-center"></i></div>
            <h5>CALL US</h5>
            <p>Tel: +211922699189</p>
            <p class="fw-bold orange fs-5">+211920056225</p>
             </div>
             <div class="col-lg-1 border-end "></div>
        <div class="col-lg-3 text-center">
            <div class=""><i class="bi bi-envelope fs-1 orange"></i></div>
            <h5>CONTACT US</h5>
            <p>Send us email</p>
            <p class="fw-bold orange fs-5">info@cidosouthsudan.org</p>
             </div>
             {{-- <div class="col-lg-1 border-end"></div> --}}
        
    </div>
    <form class="border border-success rounded-4 mt-5">
        <div class="m-5">

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Your Name (required)</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     
                      </div>
                </div>
                <div class="col-lg-6">  
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Your Email (required)</label>
                    <input type="email" class="form-control" id="exampleInputPassword1">
                  </div></div>
            </div>
           
          
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Subject</label>
              <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Your Message</label>
              <textarea type="text" class="form-control" id="exampleInputPassword1"></textarea>
            </div>
           
            <button type="submit" class="btn bg">Send</button>
        </div>
      </form>
</div>


@endsection