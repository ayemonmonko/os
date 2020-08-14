@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2>Subcategory Edit(Form/Old value)</h2>
	{{-- @if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif --}}
	<form action="{{route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">

			@csrf
			@method('PUT')
			
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="name" name="name" value="{{$subcategory->name}}">
					@if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
               		 @endif
				</div>
			</div>
			
		
			<div class="form-group row">
				<label for="category" class="col-sm-2 col-form-label">Category:</label>
				<div class="col-sm-10">
					<select class="form-control" name="category">
					<optgroup label="Choose Category">
						@foreach($categories as $category)
						<option value="{{$category->id}}"
							@if($category->id == $subcategory->category_id)
								{{'selected'}}
							@endif
							>{{$category->name}}</option>
						@endforeach
					</optgroup>
				</select>
				</div>
			</div>
			

			<button type="submit" class="btn btn-primary" id="update">Update</button>


		</form>
</div>
@endsection