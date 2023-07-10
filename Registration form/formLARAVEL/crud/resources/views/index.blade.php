@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Student Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('students.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Name</th>
				<th>Address</th>
				<th>Email</th>
				<th>Phone</th>
				<th>BirthDate</th>
				<th>UserName</th>
				
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						
						<td>{{ $row->FullName}}</td>
						<td>{{ $row->Address }}</td>
						<td>{{ $row-> Email}}</td>
						<td>{{ $row-> Phone}}</td>
						<td>{{ $row->BirthDate }}</td>
						<td>{{ $row-> UserName}}</td>
						
						
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection
