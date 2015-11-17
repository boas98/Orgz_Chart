@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					Level Data
					<div class="pull-right">
						<a href="{{ url('level/add') }}" class="btn btn-default" style="height:30px; ">Add New</a>
					</div>
				</div>

				<div class="panel-body">
					
					<table class="table">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Posisi</th>
								<th colspan="2">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $key)
								<tr>
									<td>{{ $key->nama }}</td>
									<td>{{ $key->posisi }}</td>
									<td><a href="{{ url('level/edit/'. $key->id) }}" class="btn btn-info">Edit</a></td>
									<td><a href="{{ url('level/destroy/'. $key->id) }}" class="btn btn-info">Delete</a></td>
								</tr>
								@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
