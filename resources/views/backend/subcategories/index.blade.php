@extends('backendtemplate')

@section('content')
<div class="container">
	<h2 class="text-center">Subcategory List (Table)</h2>
	<a href="{{route('subcategories.create')}}" class="btn btn-success">Add Subcategory</a>
	<table class="table table-bordered">
		<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Action</th>


		</tr>
		</thead>
		<tbody>
			<tr>
			@php $i=1; @endphp
			@foreach($subcategories as $subcategory)
			<td>{{$i++}}</td>
			<td>{{$subcategory->name}}<a href="{{route('subcategories.show',$subcategory->id)}}"><span class="badge badge-primary badge-pill">Detail</span></a></td>
			<td><a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-warning">Edit</a>
			<form method="post" action="{{route('subcategories.destroy',$subcategory->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
					@csrf
					@method('DELETE')
					<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
			</form>
			</tr>
			@endforeach

			</td>


		</tbody>
	</table>
</div>
@endsection