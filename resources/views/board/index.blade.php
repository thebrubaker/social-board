{{-- Board.Index --}}

@extends('main.layout')

@section('nav')
	@include('partials.nav')
@stop

@section('content')
<div class="container-fluid">
	<div class="col-lg-6">	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">My Boards</h3>
		  	</div>
			<ul class="list-group">
			@foreach ($owned as $board)
				<li class="list-group-item">
					<a href="board/{{$board->id}}">{{$board->name}}</a>
					<div id="board-options">
						<button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						    <li><a href="{{ url('board/destroy/' . $board->id)}}">Delete</a></li>
						</ul>
					</div>
				</li>
			@endforeach
			</ul>
		</div>
	</div>
	<div class="col-lg-6">	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Public Boards</h3>
		  	</div>
			<ul class="list-group">
			@foreach ($public as $board)
				<li class="list-group-item">
					<a href="board/{{$board->id}}">{{$board->name}}</a>
					<div id="board-options">
						<button class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						    <li><a href="{{route('board.destroy', ['id' => $board->id])}}">Delete</a></li>
						</ul>
					</div>
				</li>
			@endforeach
			</ul>
		</div>
	</div>
</div>

@endsection