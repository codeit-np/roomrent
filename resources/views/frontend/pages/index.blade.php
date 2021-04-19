@extends('frontend.app')
@section('slide')
    @include('slide.app')
@endsection

@section('content')
    <div class="py-5">
      <div class="container">
        <h1>Latest Listing</h1>
          <div class="row">
            <div class="col-md-4">
              <div class="card" style="width: 18rem;">
                <img src="https://images.pexels.com/photos/892618/pexels-photo-892618.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">More Details</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
@endsection