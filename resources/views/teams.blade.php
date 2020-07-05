@extends('layouts.app')
@section('title', 'Teams')
@section('content')
	<div class="wrapper">
		<!-- Sidebar -->
                @include('layouts.sidebar')
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Teams</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="{{ route('home') }}">
									Home
								</a>
							</li> >
							<li class="nav-item">
								Teams
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
									<div class="card-title">Teams ({{ $teamCount }}) <a href="{{ route('team.add')}}" class="btn btn-primary pull-right text-white">Add Team</a></div>
									
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="basic-datatables" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="basic-datatables_info">
											<thead>
												<tr role="row"><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Club State</th><th rowspan="1" colspan="1">Logo</th><th rowspan="1" colspan="1">Actions</th></tr>
											</thead>
											<tfoot>
												<tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Club State</th><th rowspan="1" colspan="1">Actions</th><th rowspan="1" colspan="1">Actions</th>
											</tfoot>
											<tbody>
											@foreach($teams as $team)
											<tr role="row">
												<td class="sorting_1"><a href="{{ url('/') }}/team/details/{{$team->id}}">{{ $team->name }}</a></td>
												<td>{{ $team->club }}</td>
												<td><img src='{{ url('/') }}/public/img/{{ $team->logo }}' width='50px'/></td>
												<td>
													<div class="form-button-action">
														<a href="{{ url('/') }}/team/edit/{{$team->id}}" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Team">
															<i class="fa fa-edit"></i>
														</a>
															<form action="{{ route('team.destroy')}}" method="post">
															<input type="hidden" name="id" id="id" value="{{$team->id}}" />
															{{ csrf_field() }}
														<button onclick="return confirm('Are you sure?');" type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
															<i class="fa fa-times"></i>
														</button>
															</form>
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
