@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        New Ads
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-sm table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>Ads ID</th>
                                    <th>Location</th>
                                    <th>Room Size</th>
                                    <th>Price</th>
                                    <th>Owner</th>
                                    <th>Contact</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($rooms as $room)
                                    <tr>
                                        <td>{{ $room->id }}</td>
                                        <td>{{ $room->location }}</td>
                                        <td>{{ $room->size }}</td>
                                        <td>{{ $room->price }}</td>
                                        <td>{{ $room->user_id }}</td>
                                        <td>{{ $room->contact }}</td>
                                        <td><a href="/rooms/{{ $room->id }}/edit">Edit</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection