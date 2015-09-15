@extends('app')

@section('content')
	
<div class="jumbotron startup-cover">
	<div class="container">
		<div class="clearfix">
			<span class="btn btn-default btn-file pull-right">
			    <i class="fa fa-camera"></i> Upload cover <input type="file">
			</span>
		</div>
		
		<!-- <div class="clearfix">
			<input type="file" class="btn btn-default pull-right"><i class="fa fa-camera"></i> Upload cover</button>
		</div> -->
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="row">
					<div class="col-xs-12 col-sm-3">
						<button type="button" class="btn btn-default"><i class="fa fa-camera"></i> Upload logo</button>
					</div>
					<div class="col-xs-12 col-sm-9">
						<form>
						  <div class="form-group">
						    <input type="text" class="form-control" id="" placeholder="Company name">
						  </div>
						  <div class="form-group">
						    <input type="text" class="form-control" id="" placeholder="High concept pitch">
						  </div>
						</form>
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
