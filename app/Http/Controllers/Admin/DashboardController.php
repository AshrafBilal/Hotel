<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Property;
use App\Models\Room;
use App\Models\Reservation;
use App\Models\Payment;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){

        $city = City::count('id');
        $property = Property::count('id');
        $room = Room::count('id');
        $reservation = Reservation::count('id');
        $payment = Payment::count('id');
        $users = User::count('id');

        return view('admin.dashboard',
            compact('city','property','room','reservation','payment','users'));
    }
}
