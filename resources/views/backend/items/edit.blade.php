@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2>Item Edit(Form/Old value)</h2>
	{{-- @if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif --}}
	<form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">

			@csrf
			@method('PUT')
			<div class="form-group row">
				<label for="codeno" class="col-sm-2 col-form-label">Codeno</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="codeno" name="codeno" value="{{$item->codeno}}" readonly="readonly">
				</div>

			</div>
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="name" name="name" value="{{$item->name}}">
					@if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
               		 @endif
				</div>
			</div>
			<div class="form-group row">
				<label for="price" class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="price" name="price" value="{{$item->price}}">
					@if ($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
               		 @endif
				</div>

			</div>
			<div class="form-group row">
				<label for="discount" class="col-sm-2 col-form-label">Discount</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="discount" name="discount" value="{{$item->discount}}">
					@if ($errors->has('discount'))
                    <span class="text-danger">{{ $errors->first('discount') }}</span>
               		 @endif
				</div>
			</div>
			<div class="form-group row">
				<label for="photo" class="col-sm-2 col-form-label">Photo</label>
				<div class="col-sm-10">
					<input type="file" class="form-control" id="photo" name="photo"><img src="{{asset($item->photo)}}" class="img-fluid w-25">
					<input type="hidden" name="oldphoto" value="{{$item->photo}}">
				</div>
			</div>
			<div class="form-group row">
				<label for="brand" class="col-sm-2 col-form-label">Brand:</label>
				<div class="col-sm-10">
					<select class="form-control" name="brand">
					<optgroup label="Choose brand">
						@foreach($brands as $brand)
						<option value="{{$brand->id}}"
							@if($brand->id == $item->brand_id)
								{{'selected'}}
							@endif
							>{{$brand->name}}</option>
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
						<option value="{{$subcategory->id}}"
							@if($subcategory->id == $item->subcategory_id)
								{{'selected'}}
							@endif
							>{{$subcategory->name}}</option>
						@endforeach
					</optgroup>
				</select>
				</div>
			</div>
			
			
			<div class="form-group row">
				<label for="description" class="col-sm-2 col-form-label">Description</label>
				<div class="col-sm-10">
					<textarea id="description" class="form-control" name="description">{{$item->description}}</textarea>
					@if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
               		 @endif
				</div>
			</div>

			<button type="submit" class="btn btn-primary" id="update">Update</button>


		</form>
</div>
@endsection