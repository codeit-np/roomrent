@extends('frontend.app')
@section('content')
    {{-- Slide --}}
  <div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
         @foreach ($images as $index=> $image)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" style="background-image: url('{{ asset($image->name) }}'); height: 450px; width: 1900; background-position: center;background-size: cover">
                
            </div>
         @endforeach
         
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>

   {{-- Room Details --}}

  <div class="py-5">
      <div class="container">
        <h3>Location: {{ $room->location }}</h3>
       <div class="lead">Description</div>
       <p>{{ $room->description }}</p>
       <div class="lead">Room Size</div>
       <p>{{ $room->size }} | Price: NRS{{ $room->price }}</p>
       <div class="lead">Contact Person</div>
       
       <address>
           Please Call Owner <br>
           <strong>Name: </strong> {{ $room->user->name }} <br>
           <strong>Contact No: </strong> <a href="tel:+977{{ $room->contact }}">{{ $room->contact }}</a> <br>
       </address>
      </div>
  </div>

  {{-- Comment --}}
  <div class="py-5">
     <div class="container">
        <h3>Comments</h3>
        <div class="row">
          <div class="col-md-6">
            <form action="/comments" method="post">
              @csrf
              <div class="form-group">
                <label for="name">Full Name</label>
                <input id="name" class="form-control" type="text" name="name">
              </div>
              <div class="form-group">
                <label for="mobile">Mobile</label>
                <input id="mobile" class="form-control" type="text" name="mobile">
              </div>
                <div class="form-group">
                  <label for="comment">Give you feedback</label>
                  <textarea id="comment" class="form-control comment" name="comment" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-sm btn-outline-primary">Submit</button>
               
            </form>
          </div>
        </div>
     </div>
  </div>

@endsection