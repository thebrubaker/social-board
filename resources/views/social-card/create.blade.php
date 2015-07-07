@extends('main.layout')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Create Social Board</div>
					<div class="panel-body">

						{{-- @include('errors.list') --}}

						<form class="form-horizontal" role="form" method="POST" action="/social-card" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
								<label class="col-md-4 control-label">URL</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="url">{{ old('url') }}</input>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Type</label>
								<div class="col-md-6">
									<select class="form-control" name="type">
									  <option>facebook</option>
									  <option>twitter</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
										Create
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection