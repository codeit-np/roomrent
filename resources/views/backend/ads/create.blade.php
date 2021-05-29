@extends('backend.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/rooms" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/rooms" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input id="location" class="form-control" type="text" name="location">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="Room Size">Room Size</label>
                                        <input id="Room Size" class="form-control" type="text" name="size">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="price">Price (Rs) </label>
                                        <input id="price" class="form-control" type="text" name="price">
                                    </div>
                                </div>
                            </div>
                            
                           <div class="form-group">
                               <label for="description">Short Description</label>
                               <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                           </div>

                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input id="contact" class="form-control" type="text" name="contact">
                            </div>

                            <div class="form-group">
                                <label for="feature">Featured Image</label>
                                <input id="feature" class="form-control-file" type="file" name="feature">
                            </div>

                            <div class="form-group">
                                <label for="images">Room Images</label>
                                <input id="images" class="form-control-file" type="file" name="images[]" multiple>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection