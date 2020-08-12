@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2>Item Create (Form)</h2>
	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">

			@csrf
			
			<div class="form-group row">
				<label for="codeno" class="col-sm-2 col-form-label">Codeno</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="codeno" name="codeno">
				</div>
			</div>
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="name" name="name">
				</div>
			</div>
			<div class="form-group row">
				<label for="price" class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="price" name="price">
				</div>
			</div>
			<div class="form-group row">
				<label for="discount" class="col-sm-2 col-form-label">Discount</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="discount" name="discount">
				</div>
			</div>
			<div class="form-group row">
				<label for="photo" class="col-sm-2 col-form-label">Photo</label>
				<div class="col-sm-10">
					<input type="file" class="form-control" id="photo" name="photo">
				</div>
			</div>
			<div class="form-group row">
				<label for="brand" class="col-sm-2 col-form-label">Brand:</label>
				<div class="col-sm-10">
					<select class="form-control" name="brand">
					<optgroup label="Choose brand">
						@foreach($brands as $brand)
						<option value="{{$brand->id}}">{{$brand->name}}</option>
						@endforeach
					</optgroup>
				</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="subcategory" class="col-sm-2 col-form-label">Subcategory:</label>
				<div class="col-sm-10">
					<select class="form-control" name="subcategory">
					<optgroup label="Choose subcategory">
						@foreach($subcategories as $subcategory)
						<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
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