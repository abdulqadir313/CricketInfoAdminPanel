@extends('layouts.app')
@section('title', 'Edit Fixture')
@section('content')
	<div class="wrapper">
		<!-- Sidebar -->
                @include('layouts.sidebar')
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
								<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Update Fixture Points</h4>
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
								Update Fixture Points
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Update Fixture Points</div>
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
								<form action="{{ route('points/update') }}" method="POST" name="addFixture">
									{{ csrf_field() }}
									<div class="row">
									<input type="hidden" name="fid" value="{{$fixture[0]->id }}">
									<input type="hidden" name="team[]" value="{{$fixture[0]->team1Id }}">
									<input type="hidden" name="team[]" value="{{$fixture[0]->team2Id }}">
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="teamOne">Team One</label>
												<input class="form-control" type="text" name="teamOne" id="teamOne" value="{{ $fixture[0]->team1}}" readonly>
											</div>
											<div class="form-group">
												<label for="name">Fixture Date/Time</label>
												<input type="datetime" class="form-control" id="fixture" name="fixture" value="{{ $fixture[0]->fixture}}" placeholder="Fixture" readonly>
												<!--<span class="text-danger">{{ $errors->first('name') }}</span>-->
											</div>
											<div class="form-group">
												<label for="name">Team One Points</label>
												<input type="text" class="form-control" id="teamPoints" name="teamPoints[]" placeholder="Team One Points" value="">
												<!--<span class="text-danger">{{ $errors->first('name') }}</span>-->
											</div>
										</div>
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="teamTwo">Team Two</label>
												<input type="text" class="form-control" name="teamOne" id="teamTwo" value="{{ $fixture[0]->team2}}" readonly/>
											</div>
											<div class="form-group">
												<label for="name">Venue</label>
												<input type="text" class="form-control" id="venue" name="venue" value="{{ $fixture[0]->venue}}" placeholder="Venue" readonly>
												<!--<span class="text-danger">{{ $errors->first('name') }}</span>-->
											</div>
											<div class="form-group">
												<label for="teamTwo">Team Two Points</label>
												<input type="text" class="form-control" name="teamPoints[]" id="teamPoints" placeholder="Team Two Points" value="">
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
