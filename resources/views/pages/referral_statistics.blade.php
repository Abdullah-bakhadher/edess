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


<div class="col-xl-12">
	<!-- begin panel -->
	<div class="panel panel-inverse" data-sortable-id="table-basic-1">
		<!-- begin panel-heading -->
		<div class="panel-heading">
			<h4 class="panel-title">Referral Statistics</h4>
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			</div>
		</div>
		<!-- end panel-heading -->
		<!-- begin panel-body -->
		<div class="panel-body">
			<!-- begin table-responsive -->
			<div class="table-responsive">
				<table class="table m-b-0">
					<thead>
						<tr>
							<th>No.</th>
							<th>Username</th>
							<th>Email Address</th>
							<th>Total Referrals</th>
							<th>Total Bonus</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->referrals_count }}</td>
							<td>RM{{ number_format($user->bonus_balance, 2) }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

	</div>

</div>


@endsection