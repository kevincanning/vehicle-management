@extends('layouts.app')

@section('title', '| View Vehicle')

@section('content')

<div class="row">
	<div class="col-md-12"> 
		<div class="row">
				<table class="table">
					<thead>
						<th>#</th>
						<th>Fullname</th>
						<th>Contact Number</th>
						<th>Email</th>
						<th>Manufacturer<th>
						<th>Type</th>
						<th>Year</th>
						<th>Colour</th>
						<th>Mileage</th>

					</thead>
					<tbody>

						<tr>
							<td>{{ $vehicle->id }}</td>
							<td>{{ $vehicle->fullname }}</td>
							<td>{{ $vehicle->contactNumber }}</td>
							<td>{{ $vehicle->email }}</td>
							<td>{{ $vehicle->manufacturer }}</td>
							<td>{{ $vehicle->type }}</td>
							<td>{{ $vehicle->year }}</td>
							<td>{{ $vehicle->colour }}</td>
							<td>{{ $vehicle->mileage }}</td>
							<td>{{ date('n F Y', strtotime($vehicle->created_at)) }}</td>
							<td>
								<a href="{{ route('vehicles.edit', $vehicle->id) }}" class="btn btn-default">Edit</a>
							</td>
						</tr>
					</tbody>
				</table>	
		</div>
	</div>
</div>
@endsection