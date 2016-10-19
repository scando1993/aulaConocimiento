@extends('layouts.app')

@section('contentheader_title')
	Home
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">
						<div class="alert alert-info alert-dismissible" runat ="server" id="modalEditError" visible ="false">
  							<button class="close" type="button" data-dismiss="alert">×</button>
  							<strong>The updated interview information was not saved!</strong> <div id="Div2" runat="server" ></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
