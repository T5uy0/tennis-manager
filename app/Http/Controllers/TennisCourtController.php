<?php

namespace App\Http\Controllers;

use App\Models\CourtStatus;
use App\Models\Court;
use App\Models\Date;
use App\Models\Reservation;
use App\Models\TennisCourt;
use App\Models\Reservations;
use Illuminate\Http\Request;

class TennisCourtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dateSelected = $request->input("date", date("Y-m-d"));
        $date = Date::whereDate('date',$dateSelected)->first();

        $courts = Court::where('date_id',$date->id)->get();

        $dates = Date::all();
        $getHours = Reservation::getAvailableHours();

        return view('TennisCourt.index',compact('courts','getHours','dates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $statuses = CourtStatus::all();
        $court = Court::findOrFail($id); // Renvoie une 404 si le court n'existe pas
        return view('TennisCourt.edit', compact('court','statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $court = Court::findOrFail($id); // Renvoie une 404 si le court n'existe pas
        $court->updateOrFail($request->all());

        return redirect(route('TennisCourt.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
