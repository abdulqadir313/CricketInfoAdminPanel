@extends('layouts.app')
@section('title', 'Add Fixture')
@section('content')
	<div class="wrapper">
		<!-- Sidebar -->
                @include('layouts.sidebar')
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
								<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Add Fixture</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="{{ route('home')}}">
									Home
								</a>
							</li> >
							<li class="nav-item">
								<a href="{{ route('fixtures')}}">Fixtures</a>
							</li> >
							<li class="nav-item">
								Add Fixture
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Add Fixture</div>
								</div>
								<div class="card-body">
								        @if ($message = Session::get('success'))

										<div class="alert alert-success alert-block">
								
											<button type="button" class="close" data-dismiss="alert">×</button>
								
												<strong>{{ $message }}</strong>
								
										</div>
										@endif
								        @if (count($errors) > 0)
											<div class="alert alert-danger">
								
												<strong>Whoops!</strong> There were some problems with your input.
								
												<ul>
								
													@foreach ($errors->all() as $error)
								
														<li>{{ $error }}</li>
								
													@endforeach
								
												</ul>
								
											</div>
								
										@endif
								<form action="{{ route('fixture/store') }}" method="POST" name="addFixture">
									{{ csrf_field() }}
									<div class="row">
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="teamOne">Team One</label>
												<select class="form-control" name="teamOne" id="teamOne" required>
													<option value=''>Select Team One</option>
														@foreach($teams as $team)
															<option value='{{ $team->id}}'>{{ $team->name}}</option>
														@endforeach
												</select>
											</div>
											<div class="form-group">
												<label for="name">Fixture Date/Time</label>
												<input type="date" class="form-control" id="fixture" name="fixture" placeholder="Fixture" required>
												<!--<span class="text-danger">{{ $errors->first('name') }}</span>-->
											</div>
										</div>
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="teamTwo">Team Two</label>
												<select class="form-control" name="teamTwo" id="teamTwo" required>
													<option value=''>Select Team One</option>
														@foreach($teams as $team)
															<option value='{{ $team->id}}'>{{ $team->name}}</option>
														@endforeach
												</select>
											</div>
											<div class="form-group">
												<label for="name">Venue</label>
												<input type="text" class="form-control" id="venue" name="venue" placeholder="Venue" required>
												<!--<span class="text-danger">{{ $errors->first('name') }}</span>-->
											</div>
										</div>
									</div>
								</div>
								<div class="card-action">
									<input type="submit" class="btn btn-success" value="Submit"/>
									<button class="btn btn-danger">Cancel</button>
								</div>
								</form>
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
