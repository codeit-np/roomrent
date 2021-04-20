@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>name</th>
                            <th>location</th>
                            <th>room_size </th>
                            <th>price</th>
                            <th>description</th>
                            <th>feature</th>
                            <th>mobile_no</th>
                            <th>action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room)
                            <tr>
                                <td>{{$room->id}}</td>
                                <td>{{$room->name}}</td>
                                <td>{{$room->location}}</td>
                                <td>{{$room->size}}</td>
                                <td>{{$room->price}}</td>
                                <td>{{$room->description}}</td>
                                <td>{{$room->feature}}</td>
                                <td>{{$room->contact}}</td>
                                <td>
                                    <a href="/rooms/{{ $rooms->id }}/edit" class=" btn btn-primary">edit</a>
                                    <a href="" class="btn btn-primary">show</a>
                                    <a href="" class="btn btn-primary">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection