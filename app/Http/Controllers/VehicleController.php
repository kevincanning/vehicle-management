<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Vehicle;
use Session;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();

        return view('pages.index')->withVehicles($vehicles);
    }

    public function home($id)
    {
        $vehicle = Vehicle::find($id);

        return view('pages.home')->withVehicles($vehicle);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, array(
            'fullname' => 'required|max:60|string',
            'contactNumber' => 'required|numeric',
            'email' => 'required|email',
            'manufacturer' => 'required|string',
            'type' => 'required',
            'year' => 'required',
            'colour' => 'required',
            'mileage' => 'required'));

        $vehicle = new Vehicle;

        $vehicle->fullname = $request->input('fullname');
        $vehicle->contactNumber = $request->input('contactNumber');
        $vehicle->email = $request->input('email');
        $vehicle->manufacturer = $request->input('manufacturer');
        $vehicle->type = $request->input('type');        
        $vehicle->year = $request->input('year');
        $vehicle->colour = $request->input('colour');
        $vehicle->mileage = $request->input('mileage');

        $vehicle->save();

        return redirect()->route('vehicles.show', $vehicle->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = new Vehicle;

        $vehicle = Vehicle::find($id);

        return view('pages.show')->with('vehicle', $vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);

        return view('pages.edit')->withVehicle($vehicle);
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
         $this->validate($request, array(
            'fullname' => 'required|max:60|string',
            'contactNumber' => 'required|numeric',
            'email' => 'required|email',
            'manufacturer' => 'required|string',
            'type' => 'required',
            'year' => 'required',
            'colour' => 'required',
            'mileage' => 'required'));

        $vehicle = Vehicle::find($id);

        $vehicle->fullname = $request->input('fullname');
        $vehicle->contactNumber = $request->input('contactNumber');
        $vehicle->email = $request->input('email');
        $vehicle->manufacturer = $request->input('manufacturer');
        $vehicle->type = $request->input('type');        
        $vehicle->year = $request->input('year');
        $vehicle->colour = $request->input('colour');
        $vehicle->mileage = $request->input('mileage');

        $vehicle->save();

        $request->session()->flash('success', 'Updated Successfully!');

        return redirect()->route('vehicles.show', $vehicle->$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);

        $vehicle->delete();

        Session::flash('success', 'Deleted Successfully!');

        return redirect()->route('vehicles.index');
    }
}
