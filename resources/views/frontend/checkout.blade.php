@extends('frontendtemplate')

@section('content')
	<div class="col-lg-9">
		
		<div id="checkout_body">
	<div class="container my-5 text-center">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<h2 class="py-3">Item Checkout Page</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Photo</th>
								<th>Item Name</th>
								<th>Price</th>
								<th>Qty</th>
								<th>Sub Total</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								
							</tr>
							
						</tbody>
						<tfoot>
							
						</tfoot>
					</table>
					<div class="container container-fluid my-2">
						<div class="row">
						<div class="col-md-5 text-left">
							<a href="{{route('home')}}" class="btn btn-dark">Continue Shopping</a>
						</div>
						<div class="col-md-4">
							<textarea class="notes" placeholder="Your Note Here!"></textarea>
						</div>
						<div class="col-md-3 text-right">
							@auth
							<a href="#" class="btn btn-dark buy_now">Checkout</a>
							@else
							<a href="{{route('login')}}" class="btn btn-dark">Login To Checkout</a>
							@endauth
						</div>

					</div>
					</div>
					
					

				</div>
			</div>

			
		</div>
	</div>
</div>
	</div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/count.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>

@endsection