@extends('backend.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="/rooms/{{ $rooms->id }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input id="Name" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input id="location" class="form-control" type="text" name="location">
                    </div>
                    <div class="form-group">
                        <label for="Room Size">Room Size</label>
                        <input id="Room Size" class="form-control" type="text" name="size">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input id="price" class="form-control" type="text" name="price">
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <input id="description" class="form-control" type="text" name="description">
                    </div>
                    <div class="form-group">
                        <label for="feature">feature</label>
                        <input id="feature" class="form-control" type="text" name="feature">
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input id="contact" class="form-control" type="text" name="contact">
                    </div>
                    <button type="submit" style="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection