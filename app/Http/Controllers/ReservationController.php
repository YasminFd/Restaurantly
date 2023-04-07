<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function viewReservation(){
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();

        return view('reservations',['minDate'=>$min_date,'maxDate'=>$max_date]);
    }

    public function addTableReservation(ReservationStoreRequest $req)
    {
        $reservation = new Reservation();
        $reservation = new reservation();
        $reservation->first_name = $req->first_name;
        $reservation->last_name = $req->last_name;
        $reservation->email = $req->email;
        $reservation->phone_number = $req->phone_number;
        $reservation->res_date = $req->res_date;
        $reservation->table_id = $req->table_id;
        $reservation->guest_number = $req->guest_number;
        $reservation->branch_id = $req->branch_id;
        $reservation->save();
        

        //TODO

    }

    public function addEventReservation(Request $request)
    {
        $reservation = $request->session()->get('reservation');
    }
}
