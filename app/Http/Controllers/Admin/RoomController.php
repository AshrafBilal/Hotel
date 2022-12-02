<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Property;
use App\Http\Requests\RoomFormRequest;
use Illuminate\Support\Facades\File;

class RoomController extends Controller
{
    public function index(){
        $rooms = Room::all();
        return view('admin.room.index',compact('rooms'));
    }

    public function create(){
        $properties = Property::all();
        return view('admin.room.create',compact('properties'));
    }

    public function store(RoomFormRequest $request){
        $validatedData = $request->validated();

        $property = Property::findOrFail($validatedData['property_id']);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/room',$filename);
            $validatedData['image'] = "$filename";
        }

        $room = $property->rooms()->create([
            'property_id' => $validatedData['property_id'],
            'name' => $validatedData['name'],
            'gest' => $validatedData['gest'],
            'child' => $validatedData['child'],
            'bed' => $validatedData['bed'],
            'bathroom' => $validatedData['bathroom'],
            'price' => $validatedData['price'],
            'image' => $validatedData['image'],
        ]);
        return redirect('/admin/room')->with('message','Room Added Successfully');

    }

    public function edit(int $room_id){

        $properties = Property::all();
        $room = Room::findOrFail($room_id);
        return view('admin.room.edit', compact('room','properties'));
    }

    public function update(RoomFormRequest $request, $room){

        $validatedData = $request->validated();

        $room = Room::findOrFail($room);

        $room->name = $validatedData['name'];
        $room->gest = $validatedData['gest'];
        $room->child = $validatedData['child'];
        $room->bed = $validatedData['bed'];
        $room->bathroom = $validatedData['bathroom'];
        $room->price = $validatedData['price'];

        if($request->hasFile('image')){

            $path = 'uploads/room'.$room->image;
            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/room',$filename);

            $room->image = $filename;
        }

        $room->update();

        return redirect('admin/room')->with('message','Room Updated Successfully');
    }

    public function delete($room_id){

        Room::findOrFail($room_id)->delete();
        return redirect('admin/room')->with('message', 'Room Deleted Successfully');
    }
}
