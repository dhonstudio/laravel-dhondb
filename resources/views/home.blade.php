@extends('layouts.main')

@section('container')
<div class="container">

	<div class="card shadow mb-4 mt-3">

		<div class="card-body">
			<h3>Database Management by Dhon Studio</h3>

			<div class="ml-3">
				<div class="row">
					<div class="dropdown mt-2 mb-3 mr-1">
						<button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Select DB
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							
						</div>
					</div>


				</div>
			</div>

			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable">
					<thead>
						<th>Table</th>
						<th></th>
					</thead>

					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection