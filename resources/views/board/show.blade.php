{{-- Board.Show --}}

@extends('main.layout')

@section('board',  '<span> / ' . $board->name . '</span>')

@section('nav')
	@include('partials.nav')
@stop

@section('content')
<div id="social-cards" class="container">
	<div class="col-md-4">
		@foreach ($cards->all() as $key => $card)
			@if(($key + 2) % 3 == 0)
			<div class="card">
				{!!$card->reference!!}
				<div class="card-options">
					<button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					    <li><a href="{{ url('card/destroy/' . $card->id)}}">Delete</a></li>
					</ul>
				</div>
			</div>
			@endif
		@endforeach
	</div>
	<div class="col-md-4">
		@foreach ($cards->all() as $key => $card)
			@if(($key + 1) % 3 == 0)
			<div class="card">
				{!!$card->reference!!}
				<div class="card-options">
					<button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					    <li><a href="{{ url('card/destroy/' . $card->id)}}">Delete</a></li>
					</ul>
				</div>
			</div>
			@endif
		@endforeach
	</div>
	<div class="col-md-4">
		@foreach ($cards->all() as $key => $card)
			@if($key % 3 == 0)
			<div class="card">
				{!!$card->reference!!}
				<div class="card-options">
					<button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					    <li><a href="{{ url('card/destroy/' . $card->id)}}">Delete</a></li>
					</ul>
				</div>
			</div>
			@endif
		@endforeach
	</div>
</div>

@endsection