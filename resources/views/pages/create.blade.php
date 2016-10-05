@extends('layouts.app')

@section('title', '| Create New Vehicle')

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<h1>Create New Vehicle</h1>
	<hr>
	{!! Form::open(array('route' => 'vehicles.store')) !!}
    {{ Form::label('Owner Information:') }}
    <hr>
    {{ Form::label('fullname', 'First & Last name:') }}
    {{ Form::text('fullname', null, array('class' => 'form-control')) }}

    {{ Form::label('contactNumber', 'Contact Number:') }}
    {{ Form::text('contactNumber', null, array('class' => 'form-control')) }}

    {{ Form::label('email', 'Email:') }}
    {{ Form::text('email', null, array('class' => 'form-control')) }}

    <hr>
    {{ Form::label('Vehicle Information:') }}
    <hr>

    {{ Form::label('manufacturer', 'Manufacturer:') }}
    {{ Form::text('manufacturer', null, array('class' => 'form-control')) }}

    {{ Form::label('type', 'Type:') }}
    {{ Form::text('type', null, array('class' => 'form-control')) }}

    {{ Form::label('year', 'Year:') }}
    {{ Form::text('year', null, array('class' => 'form-control')) }}

    {{ Form::label('colour', 'Colour:') }}
    {{ Form::text('colour', null, array('class' => 'form-control')) }}

    {{ Form::label('mileage', 'Mileage:') }}
    {{ Form::text('mileage', null, array('class' => 'form-control')) }}

    {{ Form::submit('Create Vehicle', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}

	{!! Form::close() !!}
	</div>
</div>

@endsection