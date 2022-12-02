<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Room;
use App\Models\Payment;

class PropertyController extends Controller
{
    public function index(){
        $properties = Property::all();
        return view('frontend.property.index',compact('properties'));
    }

    public function show($id){

        $property = Property::find($id);
        return view('frontend.property.show',compact('property'));
    }

    public function eachRoom($name){

        $property = Property::where('name',$name)->first();

        if($property){
            $rooms = $property->rooms()->get();
            return view('frontend.property-room.index',compact('rooms'));
        }else{
            return redirect()->back();
        }
    }

    public function showEachRoom($id){
        $payments = Payment::all();
        $room = Room::find($id);

        return view('frontend.property-room.room',compact('room','payments'));
    }
}
