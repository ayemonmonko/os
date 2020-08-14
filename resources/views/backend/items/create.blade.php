@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2>Item Create (Form)</h2>
	
	{{-- @if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach

		</ul>
	</div>
	@endif --}}
	<form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">

			@csrf
			
			<div class="form-group row">
				<label for="codeno" class="col-sm-2 col-form-label">Codeno</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="codeno" name="codeno">
					@if ($errors->has('codeno'))
                    <span class="text-danger">{{ $errors->first('codeno') }}</span>
               		 @endif
				</div>
			</div>

			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="name" name="name" >								
					@if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
               		 @endif
                    </div>

				</div>
			</div>
			<div class="form-group row ml-1">
				<label for="price" class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-10">
					<input type="number" class="form-control " id="price" name="price">
					@if ($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
               		 @endif
				</div>
			</div>
			<div class="form-group row ml-1">
				<label for="discount" class="col-sm-2 col-form-label">Discount</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="discount" name="discount">
					@if ($errors->has('discount'))
                    <span class="text-danger">{{ $errors->first('discount') }}</span>
               		 @endif
				</div>
			</div>
			<div class="form-group row ml-1">
				<label for="photo" class="col-sm-2 col-form-label">Photo</label>
				<div class="col-sm-10">
					<input type="file" class="form-control" id="photo" name="photo">
					@if ($errors->has('photo'))
                    <span class="text-danger">{{ $errors->first('photo') }}</span>
               		 @endif
				</div>
			</div>
			<div class="form-group row ml-1">
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
			<div class="form-group row ml-1">
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
			
			
			<div class="form-group row ml-1">
				<label for="description" class="col-sm-2 col-form-label">Description</label>
				<div class="col-sm-10">
					<textarea id="description" class="form-control" name="description"></textarea>
					@if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
               		 @endif
				</div>
			</div>

			<button type="submit" class="btn btn-primary ml-5" id="create">Create</button>


		</form>
</div>
@endsection