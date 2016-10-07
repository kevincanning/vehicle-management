@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10">
                            <h1>Previously Owned Vehicles</h1>
                        </div>

                        <div class="col-md-2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12"> 
                            <div class="row">
                                <table class="table">
                                    <thead>
                                        <th>#</th>
                                        <th>Owner's Name</th>
                                        <th>Vehicle: Manufacturer & type</th>
                                        <th>Date Registered</th>
                                        
                                    </thead>
                                    <tbody>
                                        @foreach($vehicles as $vehicle)
                                        <tr>
                                            <td>{{ $vehicle->id }}</td>
                                            <td>{{ $vehicle->fullname }}</td>
                                            <td>{{ $vehicle->manufacturer }} : {{ $vehicle->type }}</td>
                                            <td>{{ date('n F Y', strtotime($vehicle->created_at)) }}</td>
                                            <td>
                                                <a href="{{ route('vehicles.show', $vehicle->id) }}" class="btn btn-default">View </a>
                                                <a href="{{ route('vehicles.edit', $vehicle->id) }}" class="btn 
                                                    btn-default">Edit</a>
                                                <a href="{{ route('vehicles.destroy', $vehicle->id) }}" class="btn btn-danger">Delete </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection
