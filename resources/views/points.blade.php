@extends('layouts.app')
@section('title', 'Points')
@section('content')
	<div class="wrapper">
		<!-- Sidebar -->
                @include('layouts.sidebar')
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Points Table</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="{{ route('home')}}">
									Home
								</a>
							</li> >
							<li class="nav-item">
								Points
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
									<div class="card-title"><h1></h1> Points</div>
								</div>
								<div class="card-body">
									<div class="table-responsive table-hover table-sales">
										<table class="table">
													<tbody>
														@foreach($dataArr["points"] as $points)
														<tr>
															<td>
																<div class="flag">
																	<img src='{{ url('/') }}/public/img/{{ $points["logo"]}}' width='50px'/>
																</div>
															</td>
															<td>{{$points["team"]}}</td>
															<td class="text-right">
																{{$points["total"]}}
															</td>
														</tr>
														@endforeach	
													</tbody>
												</table>
											</tbody>
									</div>	
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
