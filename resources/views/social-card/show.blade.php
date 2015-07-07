@extends('main.layout')

@section('content')
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<form class="navbar-form navbar-right" role="form" method="POST" action="/social-card" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Embed Code" name="url">{{ old('url') }}</input>
				</div>
				<div class="form-group">
					<select class="form-control" name="type">
						<option>facebook</option>
						<option>twitter</option>
					</select>
				</div>
		    	<button type="submit" class="btn btn-default">Add Card</button>
		    </form>
		</div>
	</nav>
	<div id="social-cards" class="grid-container">
		@foreach ($cards as $card)
		<div class="sub-grid">
			{!!$card->url!!}
		</div>
		@endforeach
		<blockquote class="instagram-media" data-instgrm-version="4" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://instagram.com/p/40KN4cyMI8/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_top">A photo posted by Trixies👙👯 (@trixiesokc)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2015-07-07T00:34:53+00:00">Jul 6, 2015 at 5:34pm PDT</time></p></div></blockquote>
		<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
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