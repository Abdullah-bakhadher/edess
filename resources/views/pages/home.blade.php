@extends('layouts.default', [
'topMenu' => false,
'sidebarRight' => false,
'sidebarLight' => false,
'sidebarWide' => true,
'sidebarHide' => false,
'sidebarTransparent' => true,
'sidebarMinified' => false,
'sidebarTwo' => false,
'sidebarSearch' => false,
'footer' => true,
'contentFullWidth' => true,
'contentFullHeight' => true
])

@section('title', 'Home Page')

@section('content')
<!-- begin breadcrumb -->
<!-- <ol class="breadcrumb float-xl-right">
	<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Library</a></li>
	<li class="breadcrumb-item active"><a href="javascript:;">Data</a></li>
</ol> -->
<!-- end breadcrumb -->
<!-- begin page-header -->
<!-- <h1 class="page-header">Page Header <small>header small text goes here...</small></h1> -->
<!-- end page-header -->

<!-- begin panel -->
<!-- <div class="panel panel-inverse">
	<div class="panel-heading">
		<h4 class="panel-title">Panel Title here</h4>
		<div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
					class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i
					class="fa fa-redo"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
					class="fa fa-minus"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i
					class="fa fa-times"></i></a>
		</div>
	</div>
	<div class="panel-body">
		Panel Content Here
	</div>
</div> -->
<div class="container my-5">
	<h1>Welcome, {{ Auth::user()->name }}</h1>
	<hr>
	<p class="my-3"><strong>Details</strong></p>
	<strong>
		<p>Email:
	</strong> {{ Auth::user()->email }}</p>


	<div class="row">


		<!-- begin col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-info">
				<div class="stats-icon"><i class="fa fa-users"></i></div>
				<div class="stats-info">
					<h4>Total Referrals</h4>
					<p>{{ $totalReferrals }}</p>
				</div>
				<div class="stats-link">
					<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-orange">
				<div class="stats-icon"><i class="fa fa-dollar-sign fa-fw"></i></div>
				<div class="stats-info">
					<h4>Total Bonus</h4>
					<p>RM{{ $totalBonus }}</p>
				</div>
				<div class="stats-link">
					<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>


	</div>


	<a href="/add_referral" class="btn btn-primary">Add Referral</a>
</div>


@endsection