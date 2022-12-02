<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Http\Requests\ReservationFormRequest;
use Illuminate\Support\Facades\File;

class ReservationController extends Controller
{
    public function index(){

        $reservations = Reservation::all();
        return view('admin.reservation.index',compact('reservations'));
    }
    public function store(ReservationFormRequest $request){

        $validatedData = $request->validated();

        Reservation::create([
            'check_in' => $validatedData['check_in'],
            'check_out' => $validatedData['check_out'],
            'property' => $validatedData['property'],
            'room' => $validatedData['room'],
        ]);

        return redirect('/home')->with('message','Reservation Added Successfully');

    }
}
