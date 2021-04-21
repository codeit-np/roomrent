@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/rooms/create" class="btn btn-primary btn-sm">Add New</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>location</th>
                                    <th>room_size </th>
                                    <th>price</th>
                                    <th>Contact Person</th>
                                    <th>mobile_no</th>
                                    <th>action</th>
        
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rooms as $room)
                                    <tr>
                                        <td>{{ $room->id }}</td>
                                        <td>{{ $room->location }}</td>
                                        <td>{{ $room->size }}</td>
                                        <td>{{ $room->price }}</td>
                                        <td>{{ $room->user->name }}</td>
                                        <td>{{ $room->contact }}</td>
                                        <td>
                                            <a href="/rooms/{{ $room->id }}/edit" class=" btn btn-primary btn-sm">edit</a>
                                            <a href="" class="btn btn-primary btn-sm">show</a>
                                            <a href="" class="btn btn-primary btn-sm">delete</a>
                                        </td>
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