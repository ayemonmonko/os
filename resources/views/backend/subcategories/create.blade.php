@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2>Subcategory Create (Form)</h2>
	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form action="{{route('subcategories.store')}}" method="post" enctype="multipart/form-data">

			@csrf
			
			
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="name" name="name">
				</div>
			</div>
			
			<div class="form-group row">
				<label for="category" class="col-sm-2 col-form-label">Category:</label>
				<div class="col-sm-10">
					<select class="form-control" name="category">
					<optgroup label="Choose subcategory">
						@foreach($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
						@endforeach
					</optgroup>
				</select>
				</div>
			</div>
			
			
			<div class="form-group row">
				<label for="description" class="col-sm-2 col-form-label">Description</label>
				<div class="col-sm-10">
					<textarea id="description" class="form-control" name="description"></textarea>
				</div>
			</div>

			<button type="submit" class="btn btn-primary" id="create">Create</button>


		</form>
</div>
@endsection