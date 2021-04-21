@extends('backend.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="/rooms/{{ $room->id }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input id="location" class="form-control" type="text" name="location" value="{{ $room->location }}">
                    </div>
                    <div class="form-group">
                        <label for="Room Size">Room Size</label>
                        <input id="Room Size" class="form-control" type="text" name="size" value="{{ $room->size }}">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input id="price" class="form-control" type="text" name="price" value="{{ $room->price }}">
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <input id="description" class="form-control" type="text" name="description" value="{{ $room->description }}">
                    </div>
                    <div class="form-group">
                        <label for="feature">feature</label>
                        <input id="feature" class="form-control" type="text" name="feature" value="{{ $room->feature }}">
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input id="contact" class="form-control" type="text" name="contact" value="{{ $room->contact }}">
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit" style="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection