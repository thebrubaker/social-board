
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span class="navbar-brand">
				<a href="{{url('dashboard')}}">Social Board</a> 
				@yield('board')
			</span>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li>
					@if(Request::segment(1) == "board")
					<form class="navbar-form navbar-right" role="form" method="POST" action="{{route('card.store', ['id' => $board->id])}}" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Embed code..." name="reference">{{ old('reference') }}</input>
						</div>
				    	<button type="submit" class="btn btn-default">Add Card</button>
				    </form>
				    @else
		    		<form class="navbar-form" role="form" method="POST" action="{{url('board')}}" enctype="multipart/form-data">
		    			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		    			<div class="form-group">
		    				<input type="text" class="form-control" placeholder="Enter a name" name="name">{{ old('name') }}</input>
		    			</div>
		        		<button type="submit" class="btn btn-default">Add Board</button>
		        	</form>
		        	@endif
			    </li>
			    <li>
			    	<a class="nav navbar-nav" href="{{url('auth/logout')}}">Logout</a>
			    </li>
		    </ul>
		</div>
	</div>
</nav>
