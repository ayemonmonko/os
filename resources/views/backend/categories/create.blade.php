@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2>Category Create (Form)</h2>
	{{-- @if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif --}}
	<form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">

			@csrf
			
			
			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="name" name="name">
					@if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
               		 @endif
				</div>
			</div>
			
			<div class="form-group row">
				<label for="photo" class="col-sm-2 col-form-label">Photo</label>
				<div class="col-sm-10">
					<input type="file" class="form-control" id="photo" name="photo">
					@if ($errors->has('photo'))
                    <span class="text-danger">{{ $errors->first('photo') }}</span>
               		 @endif
				</div>
			</div>
			

			<button type="submit" class="btn btn-primary" id="create">Create</button>


		</form>
</div>
@endsection