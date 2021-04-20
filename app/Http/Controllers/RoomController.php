<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomImage;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('backend.ads.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'location' => 'required',
            'contact' => 'required',
            'price' => 'required',
            'size' => 'required',
            'feature' => 'required',
        ]);
        $room = new Room();
        $room->location = $request->location;
        $room->description = $request->description;
        $room->size = $request->size;
        $room->price = $request->price;
        $room->contact = $request->contact;
        $room->user_id = $request->user()->id;
        if($request->hasFile('feature')){
            $data = $request->feature;
            $newName = time() . $data->getClientOriginalName();
            $data->move('room',$newName);
            $room->feature = 'room/' . $newName;
        } 
        $room->save();

        if($request->hasFile('images')){
            foreach($request->images as $image){
                $roomImage = new RoomImage();
                $newName = time() . $image->getClientOriginalName();
                $image->move('room',$newName);
                $roomImage->name = 'room/' . $newName;
                $roomImage->room_id = $room->id;
                $roomImage->save();
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
