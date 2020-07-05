@extends('layouts.app')
@section('title', 'Fixtures')
@section('content')
	<div class="wrapper">
		<!-- Sidebar -->
                @include('layouts.sidebar')
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
								<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Fixtures</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="{{ route('home')}}">
									Home
								</a>
							</li> >
							<li class="nav-item">
								Fixture
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
									<div class="card-title"><h1></h1> Fixtures ({{ $fixtureCount }}) <a href="{{ route('fixture.add')}}" class="btn btn-primary pull-right text-white">Add Fixture</a></div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="basic-datatables" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="basic-datatables_info">
											<thead>
												<tr role="row"><th rowspan="1" colspan="1">Team 1</th><th rowspan="1" colspan="1">Team 2</th><th rowspan="1" colspan="1">Fixture</th><th rowspan="1" colspan="1">Venue</th><th rowspan="1" colspan="1">GIve Score</th></tr>
											</thead>
											<tfoot>
												<tr role="row"><th rowspan="1" colspan="1">Team 1</th><th rowspan="1" colspan="1">Team 2</th><th rowspan="1" colspan="1">Fixture</th><th rowspan="1" colspan="1">Venue</th><th rowspan="1" colspan="1">GIve Score</th></tr>
											</tfoot>
											<tbody>
											@foreach($fixtures as $fixture)
											<tr role="row">
												<td><img src='{{ url('/') }}/public/img/{{ $fixture->logo1 }}' width='50px'/> &nbsp;&nbsp; {{ $fixture->team1 }}</td>
												<td><img src='{{ url('/') }}/public/img/{{ $fixture->logo2 }}' width='50px'/> &nbsp;&nbsp; {{ $fixture->team2 }} </td>
												<td class="sorting_1">{{ $fixture->fixture }}</td>
												<td class="sorting_1">{{ $fixture->venue }}</td>
												<td>
													<div class="form-button-action">
														<a href="{{ url('/') }}/fixture/edit/{{$fixture->id}}" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Get Points to Team">
															<i class="fa fa-edit"></i>
														</a>
													</div>
												</td>
												
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
