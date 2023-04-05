<?php

namespace App\Http\Controllers\admin;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\branch;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\Models\table;
use App\Models\reservation;
use Carbon\Carbon;

class ReservationController extends Controller
{

    
    public function getBranches(){
        $branches = DB::table('branches')
            ->select('*')
            ->get();
        return $branches;
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations= reservation::all();
        return view('admin.reservations.index',['reservations'=>$reservations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = $this->getBranches();
        $tables = Table::where('status',TableStatus::Available)->get();
        return view('admin.reservations.create',['data'=>$data, 'tables'=>$tables]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationStoreRequest $req)
    {

        $table  = Table::findOrFail($req->table_id);
        if($req->guest_number > $table->guest_number)
            return back()->with('warning','Please choose the table based on the guests number');
        
        $req_date = Carbon::parse($req->res_date)->format('Y-m-d');
        foreach($table->reservations as $reservation){
            $res_date = Carbon::parse($reservation->res_date)->format('Y-m-d');
            if($res_date == $req_date) {
                return back()->with('warning', 'This table is reserved for this date');
            }
        }
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
        return redirect(route('admin-reservations.index'))->with('success','Reservation created successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reservation = reservation::findOrFail($id);
        $branches = branch::all();
        $tables = table::all();
        return view('admin.reservations.edit',['reservation'=>$reservation,'branches'=>$branches,'tables'=>$tables]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $reservation = reservation::findOrFail($id);
        $reservation->first_name = $req->first_name;
        $reservation->last_name = $req->last_name;
        $reservation->email = $req->email;
        $reservation->phone_number = $req->phone_number;
        $reservation->res_date = $req->res_date;
        $reservation->table_id = $req->table_id;
        $reservation->guest_number = $req->guest_number;
        $reservation->branch_id = $req->branch_id;
        $reservation->save();
        return redirect(route('admin-reservations.index'))->with('success','Reservation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reservation = reservation::findOrFail($id);
        $reservation->delete();
        return redirect(route('admin-reservations.index'))->with('danger','Reservation deleted successfully');
    }
}
