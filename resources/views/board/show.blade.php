{{-- Board.Show --}}

@extends('main.layout')

@section('navbar')
	<span class="navbar-brand"><a href="{{url()}}">Social Board</a> / {{$board->name}}</span>
	<form class="navbar-form navbar-right" role="form" method="POST" action="{{route('card.store', ['id' => $board->id])}}" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Embed code..." name="reference">{{ old('reference') }}</input>
		</div>
    	<button type="submit" class="btn btn-default">Add Card</button>
    </form>
@endsection

@section('content')
<div id="social-cards" class="grid-container">
	@foreach ($cards as $card)
	<div class="sub-grid">
		{!!$card->reference!!}
		<div class="remove-card">
			<form action="{{route('card.destroy', ['id' => $card->id])}}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="DELETE">
				<button type="submit" class="btn btn-primary">Delete</button>
			</form>
		</div>
	</div>
	@endforeach
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
		margin-bottom: 5px;
		border: 1px rgba(0, 0, 0, 0.1) solid;
		border-radius: 3px;
	}
</style>

@endsection