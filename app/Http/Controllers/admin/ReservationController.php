<?php

namespace App\Http\Controllers\admin;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\Models\table;
use App\Models\reservation;
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
        $tables = Table::all();
        return view('admin.reservations.create',['data'=>$data, 'tables'=>$tables]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationStoreRequest $req)
    {
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
