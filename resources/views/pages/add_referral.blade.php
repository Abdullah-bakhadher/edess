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
<div class="panel panel-inverse" data-sortable-id="form-stuff-11">
	<div class="panel-heading">
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
		<form action="{{ route('referrals.add') }}" method="POST" id="addReferralForm">
			@csrf
			<fieldset>
				<legend class="m-b-15">Add Referral User</legend>

				<!-- Referrer ID -->
				<div class="form-group row m-b-15">
					<label class="col-md-3 col-form-label">Referrer ID (current user)</label>
					<div class="col-md-7">
						<input id="referrer_id" name="referrer_id" required type="number" class="form-control" placeholder="Referrer ID" />
						@error('referrer_id')
						<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>
				</div>

				<!-- Referred ID -->
				<div class="form-group row m-b-15">
					<label class="col-md-3 col-form-label">Referred ID</label>
					<div class="col-md-7">
						<input id="referred_id" name="referred_id" required type="number" class="form-control" placeholder="Referred ID" />
						@error('referred_id')
						<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-7 offset-md-3">
						<button type="submit" class="btn btn-primary m-r-5">Add Referral</button>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
	<!-- end panel-body -->
</div>
<!-- end panel -->
@endsection