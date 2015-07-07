@extends('main.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@foreach ($boards as $board)
				<p>{{$board->id}}: {{$board->name}}</p>
			@endforeach
		</div>
	</div>
</div>

@endsection