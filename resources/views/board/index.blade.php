{{-- Board.Index --}}

@extends('main.layout')

@section('navbar')
	<span class="navbar-brand"><a href="{{url()}}">Social Board</a></span>
	<form class="navbar-form navbar-right" role="form" method="POST" action="board" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Enter a name" name="name">{{ old('name') }}</input>
		</div>
    	<button type="submit" class="btn btn-default">Add Board</button>
    </form>
@endsection

@section('content')
<div class="container-fluid">
	<div class="col-lg-6">	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">My Social Boards</h3>
		  	</div>
			<ul class="list-group">
			@foreach ($boards as $board)
				<li class="list-group-item">
					<a href="board/{{$board->id}}">{{$board->name}}</a>
					<form class="board-delete" action="{{route('board.destroy', ['id' => $board->id])}}" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-xs btn-danger">X</button>
					</form>
				</li>
			@endforeach
			</ul>
		</div>
	</div>
</div>

<style type="text/css" media="screen">
.board-delete {
	float: right;
}
</style>

@endsection