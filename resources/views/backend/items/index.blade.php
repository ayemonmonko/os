@extends('backendtemplate')

@section('content')
<div class="container">
	<h2 class="text-center">Item List (Table)</h2>
	<a href="{{route('items.create')}}" class="btn btn-success">Add Item</a>
	<table class="table table-bordered">
		<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Price</th>
			<th>Action</th>


		</tr>
		</thead>
		<tbody>
			<td>1</td>
			<td>001 <a href="{{route('items.show',1)}}"><span class="badge badge-primary badge-pill">Detail</span></a></td>
			<td>5500MMK</td>
			<td><a href="{{route('items.edit',1)}}" class="btn btn-warning">Edit</a>
			<a href="#" class="btn btn-danger">Delete</a>

			</td>


		</tbody>
	</table>
</div>
@endsection