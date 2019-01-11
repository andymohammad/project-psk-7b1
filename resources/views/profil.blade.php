@extends('layout.master')
@section('konten')
<section class="content-header">
	<h1>Profil User</h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-body box-profile">
					<img class="profile-user-img img-responsive img-circle" src="images/{{$user->avatar}}" alt="User profile picture">

					<h3 class="profile-username text-center">{{$user->name}}</h3>

					<p class="text-muted text-center">{{$user->role}}</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Nama Lengkap</b> <a class="pull-right"> {{$user->name}}</a>
						</li>
						<li class="list-group-item">
							<b>Email</b> <a class="pull-right"> {{$user->email}}</a>
						</li>
						<li class="list-group-item">
							<b>Email</b> <a class="pull-right"> {{$user->email}}</a>
						</li>
					</ul>

					<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-body box-profile">
					<img class="profile-user-img img-responsive img-circle" src="images/{{$user->avatar}}" alt="User profile picture">

					<h3 class="profile-username text-center">{{$user->name}}</h3>

					<p class="text-muted text-center">{{$user->role}}</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<form enctype="multipart/form-data" action="/profile" method="post">
								<b>Upload Foto</b> 
								<input class="pull-right" type="file" name="avatar">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								

						</li>
					</ul>
					
					<input type="submit" class="btn btn-primary btn-block pull-right" value="Upload Foto">
				</form>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
</section>
@endsection