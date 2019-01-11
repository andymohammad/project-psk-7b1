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
					<img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

					<h3 class="profile-username text-center">Nina Mcintire</h3>

					<p class="text-muted text-center">Software Engineer</p>

					<ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<b>Followers</b> <a class="pull-right">1,322</a>
						</li>
						<li class="list-group-item">
							<b>Following</b> <a class="pull-right">543</a>
						</li>
						<li class="list-group-item">
							<b>Friends</b> <a class="pull-right">13,287</a>
						</li>
					</ul>

					<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
		
		<div class="col-md-6">
			<form method="post" action="route('user.edit', $user)">
				{{ csrf_field() }}
				{{ method_field('patch') }}

				<input type="text" name="name"  value="{{ $user->name }}" />

				<input type="email" name="email"  value="{{ $user->email }}" />

				<input type="password" name="password" />

				<input type="password" name="password_confirmation" />

				<button type="submit">Send</button>
			</form>
		</div>
	</div>
</section>
@endsection