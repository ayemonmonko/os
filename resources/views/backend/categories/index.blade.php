@extends('backendtemplate')

@section('content')
<div class="container">
	<h2 class="text-center">Category List (Table)</h2>
	<a href="{{route('categories.create')}}" class="btn btn-success">Add Category</a>
	<table class="table table-bordered">
		<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Action</th>


		</tr>
		</thead>
		<tbody>
			<td>1</td>
			<td>001 <a href="{{route('categories.show',1)}}"><span class="badge badge-primary badge-pill">Detail</span></a></td>
			<td><a href="{{route('categories.edit',1)}}" class="btn btn-warning">Edit</a>
			<a href="#" class="btn btn-danger">Delete</a>

			</td>


		</tbody>
	</table>
</div>
@endsection