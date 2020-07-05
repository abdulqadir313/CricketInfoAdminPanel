@extends('layouts.app')
@section('title', 'Add Player')
@section('content')
	<div class="wrapper">
		<!-- Sidebar -->
                @include('layouts.sidebar')
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
								<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Add Player</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="{{ route('home') }}">
									Home
								</a>
							</li> >
							<li class="nav-item">
								<a href="{{ route('player.add') }}">Players</a>
							</li> >
							<li class="nav-item">
								Add Player
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Add Team</div>
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
								<form action="{{ route('player/store') }}" method="POST" name="addTeam" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="row">
										<div class="col-md-4 col-lg-4">
											<div class="form-group">
												<label for="name">First Name</label>
												<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
												<!--<span class="text-danger">{{ $errors->first('name') }}</span>-->
											</div>
											<div class="form-group">
												<label for="name">Jersy Number</label>
												<input type="text" class="form-control" id="jersyNumber" name="jersyNumber" placeholder="Jersy Number" required>
												<!--<span class="text-danger">{{ $errors->first('name') }}</span>-->
											</div>
											<div class="form-group">
												<label for="name">Fifties</label>
												<input type="text" class="form-control" id="fifties" name="fifties" placeholder="Fifties" required>
												<!--<span class="text-danger">{{ $errors->first('name') }}</span>-->
											</div>
											<div class="form-group">
												<label for="name">Team</label>
												<select class="form-control" name="team" id="team" required>
													<option value=''>Select Team</option>
														@foreach($teams as $team)
															<option value='{{ $team->id}}'>{{ $team->name}}</option>
														@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-4 col-lg-4">
											<div class="form-group">
												<label for="name">Last Name</label>
												<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
												<!--<span class="text-danger">{{ $errors->first('name') }}</span>-->
											</div>
											<div class="form-group">
												<label for="name">Runs</label>
												<input type="text" class="form-control" id="runs" name="runs" placeholder="Runs" required>
												<!--<span class="text-danger">{{ $errors->first('name') }}</span>-->
											</div>
											<div class="form-group">
												<label for="name">Hundreds</label>
												<input type="text" class="form-control" id="hundreds" name="hundreds" placeholder="Hundreds" required>
												<!--<span class="text-danger">{{ $errors->first('name') }}</span>-->
											</div>
											<div class="form-group">
												<label for="name">StrikeRate</label>
												<input type="text" class="form-control" id="strikeRate" name="strikeRate" placeholder="Strike Rate" required>
												<!--<span class="text-danger">{{ $errors->first('name') }}</span>-->
											</div>
										</div>
										<div class="col-md-4 col-lg-4">
											<div class="form-group">
												<label for="club">Matches</label>
												<input type="club" class="form-control" id="matches" name="matches" placeholder="Matches">
												<!--<span class="text-danger">{{ $errors->first('club') }}</span>-->
											</div>
											<div class="form-group">
												<label for="name">Highest Score</label>
												<input type="text" class="form-control" id="highestScore" name="highestScore" placeholder="Highest Score" required>
												<!--<span class="text-danger">{{ $errors->first('name') }}</span>-->
											</div>
											<div class="form-group">
												<label for="name">Average</label>
												<input type="text" class="form-control" id="average" name="average" placeholder="Average" required>
												<!--<span class="text-danger">{{ $errors->first('name') }}</span>-->
											</div>
											<div class="form-group">
												<label for="club">Country</label>
												<input type="club" class="form-control" id="country" name="country" placeholder="Country">
												<!--<span class="text-danger">{{ $errors->first('club') }}</span>-->
											</div>
											<div class="form-group">
												<label for="photo">Photo</label>
												<input type="file" class="form-control-file" id="photo" name="photo" required>
												<!--<span class="text-danger">{{ $errors->first('logo') }}</span>-->
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
