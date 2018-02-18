@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row">			
			<div class="my-5">
				<div class="row">					
					<h2 class="pull-left">Hello, {{ Auth::user()->name }}</h2>
					<form class="pull-right" action="{{ route('logout') }}" method="post">
                        {{ csrf_field() }}

                        <button type="submit" class="btn btn-danger">logout</button>
                    </form>
				</div>
				<br>
				<div class="row">
					<p class="lead pull-left">{{ $visitors->count() }} Application registered</p>
					<p class="lead pull-right">
						<a href="{{ route('excel') }}" class="btn btn-primary">Download Excel file</a>
						<a href="{{ route('home') }}" class="btn btn-success">Home</a>
						
					</p>
					
				</div>

				<table class="row table table-striped table-bordered table-responsive">
				  <thead>
				    <tr class="info">
				      <th scope="col">Name</th>
				      <th scope="col">Age</th>
				      <th scope="col">Status</th>
				      <th scope="col">Email</th>
				      <th scope="col">Mobile</th>
				      <th scope="col">City</th>
				      <th scope="col">Work</th>
				      <th scope="col">Nationality</th>
				      <th scope="col">ID</th>
				      <th scope="col">About TED</th>
				      <th scope="col">Previous Events</th>
				      <th scope="col">Favourite Talks</th>
				      <th scope="col">Why Attend</th>
				      <th scope="col">How Spread</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach ($visitors as $visitor)				  		
					    <tr>
					      <th>{{ $visitor->name }}</th>
					      <th>{{ $visitor->age }}</th>
					      <th>{{ $visitor->status }}</th>
					      <th>{{ $visitor->email }}</th>
					      <th>{{ $visitor->mobile }}</th>
					      <th>{{ $visitor->city }}</th>
					      <th>{{ $visitor->work }}</th>
					      <th>{{ $visitor->nationality }}</th>
					      <th>{{ $visitor->national_id }}</th>
					      <th>{{ $visitor->about_ted }}</th>
					      <th>{{ $visitor->prev_event }}</th>
					      <th>{{ $visitor->fav_talks }}</th>
					      <th>{{ $visitor->why_attend }}</th>
					      <th>{{ $visitor->how_spread }}</th>
					      
					    </tr>
				  	@endforeach
				    
				  </tbody>
				</table>

			</div>
		</div>
	</div>


@endsection