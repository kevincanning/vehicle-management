@extends('layouts.app')

@section('title', '| Edit Vehicle')

@section('content')

<div class="row">
		{!! Form::model($vehicle, ['route' => ['vehicles.update', $vehicle->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('fullname', 'Fullname:') }}
			{{ Form::text('fullname', null, ["class" => 'form-control']) }}
			
			{{ Form::label('contactNumber', "Contact Number:", ['class' => 'form-spacing-top']) }}
			{{ Form::text('contactNumber', null, ['class' => 'form-control']) }}

			{{ Form::label('email', "Email:", ['class' => 'form-spacing-top']) }}
			{{ Form::text('email', null, ['class' => 'form-control']) }}

			{{ Form::label('manufacturer', "Manufacturer:", ['class' => 'form-spacing-top']) }}
			{{ Form::text('manufacturer', null, ['class' => 'form-control']) }}

			{{ Form::label('type', "Type:", ['class' => 'form-spacing-top']) }}
			{{ Form::text('type', null, ['class' => 'form-control']) }}

			{{ Form::label('year', "Year:", ['class' => 'form-spacing-top']) }}
			{{ Form::text('year', null, ['class' => 'form-control']) }}

			{{ Form::label('colour', "Colour:", ['class' => 'form-spacing-top']) }}
			{{ Form::text('colour', null, ['class' => 'form-control']) }}

			{{ Form::label('mileage', "Mileage:", ['class' => 'form-spacing-top']) }}
			{{ Form::text('mileage', null, ['class' => 'form-control']) }}
		</div>

		<div class="col-md-4">
			<div class="well">
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('vehicles.show', 'Cancel', array($vehicle->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div>

			</div>
		</div>
		{!! Form::close() !!}
	</div>	<!-- end of .row (form) -->
@endsection