<?php

namespace App\Http\Controllers;

use App\Enums\ReservationType;
use App\Enums\TableStatus;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\branch;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function viewReservation()
    {
        $min_date = Carbon::now();
        $max_date = Carbon::now()->addWeek();;
        $tables = Table::where('status', TableStatus::Available)->get();
        $branches = branch::all();
        return view('reservations', ['minDate' => $min_date, 'maxDate' => $max_date, 'tables' => $tables, 'branches' => $branches]);
    }

    public function addReservation(ReservationStoreRequest $req)
    {
        $reservation = new Reservation();
        $reservation = new reservation();
        $reservation->first_name = $req->first_name;
        $reservation->last_name = $req->last_name;
        $reservation->email = $req->email;
        $reservation->phone_number = $req->phone_number;
        $reservation->res_date = $req->res_date;
        $reservation->branch_id = $req->branch_id;
        $reservation->table_id = $req->table_id;
        $reservation->guest_number = $req->guest_number;
        $reservation->message = $req->message;

        if (!isset($req->table_id)) {
            $reservation->type = ReservationType::Event;
        } else {

            $reservation->type = ReservationType::Table;

            $table  = Table::findOrFail($req->table_id);
            if ($req->guest_number > $table->guest_number)
                return back()->with('warning', 'Please choose the table based on the guests number');

            $pickupDate = Carbon::parse($reservation->res_date);
            $pickupTime = Carbon::createFromTime($pickupDate->hour, $pickupDate->minute, $pickupDate->second);

            $earliestTime = Carbon::createFromTimeString("17:00:00");
            $lastTime = Carbon::createFromTimeString("23:00:00");
            if (!$pickupTime->between($earliestTime, $lastTime))
                return back()->with('warning','Time is outside openning hours (5:00pm to 11:00pm)');
        }

        $events = Reservation::where('type', ReservationType::Event)->get();
        $res_date = Carbon::parse($reservation->res_date)->format('Y-m-d');
        foreach ($events as $event) {
            $event_date = Carbon::parse($event->res_date)->format('Y-m-d');
            if ($res_date == $event_date) {
                return back()->with('warning', 'Restaurant is booked at this date, please choose another one');
            }
        }

        $reservation->save();
        return redirect(route('home.reservations'))->with('success', 'Reservation Complete');
    }
}
