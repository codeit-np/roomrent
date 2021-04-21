@extends('frontend.app')
@section('slide')
    @include('slide.app')
@endsection

@section('content')
    <div class="py-5">
      <div class="container">
        <h1>Latest Listing</h1>
          <div class="row">
            @foreach ($rooms as $room)
              <div class="col-md-3">
                <div class="card">
                  <div style="background-image: url('{{ asset($room->feature) }}');height: 200px; background-position:center; background-size: cover">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">{{ $room->location }}</h5>
                    <p class="card-text">{{ Str::limit($room->description,80) }}</p>
                    <a href="/roomdetails/{{ $room->id }}" class="btn btn-primary btn-sm">More Details</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
      </div>
    </div>
@endsection