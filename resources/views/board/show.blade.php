@extends('main.layout')

@section('content')
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">{{$board->name}}</a>
			<form class="navbar-form navbar-right" role="form" method="POST" action="{{$board->id}}/social-card" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Embed Code" name="reference">{{ old('reference') }}</input>
				</div>
		    	<button type="submit" class="btn btn-default">Add Card</button>
		    </form>
		</div>
	</nav>
	<div id="social-cards" class="grid-container">
		@foreach ($cards as $card)
		<div class="sub-grid">
			{!!$card->reference!!}
		</div>
		@endforeach
	</div>
</div>

<style type="text/css" media="screen">
	.grid-container {
	   -moz-column-count:3;
	   -moz-column-gap:10px;
	   -webkit-column-count:3;
	    -webkit-column-gap:10px;
	    column-count: 3;
	    column-gap: 10px;

	}
	.sub-grid {
		display: inline-block;
		width: 100%;
		padding: 5px;
	}
</style>

@endsection