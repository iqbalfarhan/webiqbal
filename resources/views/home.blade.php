@extends('layouts.adminlte')

@section('content')
<div class="row">
	<div class="col-lg-3 col-xs-6">

		<div class="small-box bg-aqua">
			<div class="inner">
				<h3>{{ \App\Project::count() }}</h3>
				<p>Projects</p>
			</div>
			<div class="icon">
				<i class="fa fa-briefcase"></i>
			</div>
			<a href="{{ route('project.index') }}" class="small-box-footer">
				More info <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-xs-6">

		<div class="small-box bg-green">
			<div class="inner">
				<h3>53<sup style="font-size: 20px">%</sup></h3>

				<p>Bounce Rate</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="#" class="small-box-footer">
				More info <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-xs-6">

		<div class="small-box bg-yellow">
			<div class="inner">
				<h3>44</h3>

				<p>User Registrations</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="#" class="small-box-footer">
				More info <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-xs-6">

		<div class="small-box bg-red">
			<div class="inner">
				<h3>65</h3>

				<p>Unique Visitors</p>
			</div>
			<div class="icon">
				<i class="ion ion-pie-graph"></i>
			</div>
			<a href="#" class="small-box-footer">
				More info <i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

</div>
<div class="row justify-content-center">
	<div class="col-md-8">
		@include('todo.index', ['datas' => $todos])
	</div>
</div>
@endsection
