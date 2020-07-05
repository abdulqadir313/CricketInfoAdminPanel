@extends('layouts.app')
@section('title', 'Players')
@section('content')
	<div class="wrapper">
		<!-- Sidebar -->
                @include('layouts.sidebar')
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
								<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Team's Players</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="{{ route('home') }}">
									Home
								</a>
							</li> >
							<li class="nav-item">
								Players
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							@if ($message = Session::get('success'))
							<div class="alert alert-success alert-block">
					
								<button type="button" class="close" data-dismiss="alert">x</button>
					
									<strong>{{ $message }}</strong>
					
							</div>
							@endif
							<div class="card">
								<div class="card-header">
									<div class="card-title"><h1>{{ $teamName[0]->name }} </h1> Players ({{ $playersCount }})</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="basic-datatables" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="basic-datatables_info">
											<thead>
												<tr role="row"><th rowspan="1" colspan="1">Photo</th><th rowspan="1" colspan="1">Player Details</th><th rowspan="1" colspan="1">Matches Details</th><th rowspan="1" colspan="1">Scores</th></tr>
											</thead>
											<tfoot>
												<tr role="row"><th rowspan="1" colspan="1">Photo</th><th rowspan="1" colspan="1">Player Details</th><th rowspan="1" colspan="1">Matches Details</th><th rowspan="1" colspan="1">Scores</th></tr>
											</tfoot>
											<tbody>
											@foreach($players as $player)
											<tr role="row">
												<td><img src='{{ url('/') }}/public/img/{{ $player->photo }}' width='150px'/></td>
												<td class="sorting_1">{{ $player->firstName." ".$player->lastName }}<br/><small class="text-success">{{ $player->jersyNumber}} | {{ $player->name }}<br/></small><small class="text-info">50's : {{ $player->fifties }} | 100's : {{ $player->hundreds }}</small></td>
												<td>Matches: {{ $player->matches }} <br/><small class="text-success">Total Run: {{ $player->run }} </small><br/><small class="text-info">Average: {{ $player->average }}%</small></td>
												<td>Highest Score: {{ $player->highestScore }} <br/><small class="text-success">Strike Rate: {{ $player->strikeRate }} </small><br/><small class="text-info">Country: {{ $player->country }}</small></td>
												
											</tr>
											@endforeach
											</tbody>
										</table></div></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					
					<div class="copyright ml-auto">
						2020, made with <i class="fa fa-heart heart text-danger"></i> by Abdul Qadir
					</div>				
				</div>
			</footer>
		</div>
		
		<!-- Custom template | don't include it in your project! -->
		<!-- End Custom template -->
	</div>

@endsection
