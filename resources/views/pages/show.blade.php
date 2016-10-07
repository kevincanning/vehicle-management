@extends('layouts.app')

@section('title', '| View Vehicle')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">

				<div class="panel-body">
					<div class="row">
						<div class="col-md-10">
							<h2>Vehicle information for {{ $vehicle->fullname }}</h2>
						</div>

						<div class="col-md-2">
						</div>
					</div>

					<div class="row">
						<div class="col-md-12"> 
							<div class="row">
									<table class="table" id="delete-btn">
										<thead>
											<th>#</th>
											<th>Contact Number</th>
											<th>Email</th>
											<th>Manufacturer</th>
											<th>Type</th>
											<th>Year</th>
											<th>Colour</th>
											<th>Mileage</th>

										</thead>
										<tbody>
											
											<tr>
												<td>{{ $vehicle->id }}</td>
												<td>{{ $vehicle->contactNumber }}</td>
												<td>{{ $vehicle->email }}</td>
												<td>{{ $vehicle->manufacturer }}</td>
												<td>{{ $vehicle->type }}</td>
												<td>{{ $vehicle->year }}</td>
												<td>{{ $vehicle->colour }}</td>
												<td>{{ $vehicle->mileage }}</td>
												<td>
													<a href="{{ route('vehicles.edit', $vehicle->id) }}" class="btn btn-default">Edit</a>

																					<div class="col-sm-6">
						{!! Form::open(['route' => ['vehicles.destroy', $vehicle->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
												</td>
											</tr>
											
										</tbody>
									</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection