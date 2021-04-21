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
                        <form action="/rooms/{{ $room->id }}" method="post">
                            @csrf
                            @method('put')
                           
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
                               <label for="description">Description</label>
                               <textarea id="description" class="form-control" name="description" rows="3">{{ $room->description }}</textarea>
                           </div>
                           <div class="form-group">
                               <label for="feature">Feature Image</label>
                               <input id="feature" class="form-control-file" type="file" name="feature">
                           </div>
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input id="contact" class="form-control" type="text" name="contact" value="{{ $room->contact }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
        
                        <label for="">Feature Image</label>
                        <div class="my-2">
                            <img src="{{ asset($room->feature) }}" width="120" class="rounded" alt="">
                        </div>
        
                        <label for="">Room Image</label>
                        <div class="my-2">
                           @foreach ($images as $image)
                         <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $image->id }}">  <img src="{{ asset($image->name) }}" width="120" class="rounded" alt=""></a>
                           <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $image->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                   
                                    <div class="modal-body">
                                        <img src="{{ asset($image->name) }}" class="rounded w-100" alt="">
                                    </div>
                                    
                                </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection