@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

<!-- /content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>Representative</h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Representative</li>
        </ol>
    </section>
    <section class="content">
			@if (session()->has('message'))
				<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i> Success!</h4>{{ session()->get('message') }}</div>
			@endif
			<div class="row">
					<!-- left column -->
					<div class="col-md-4">
							<!-- general form elements -->
							<div class="box box-primary">
									<div class="box-header with-border">
											<h3 class="box-title">Add Representative</h3>
									</div>
									<!-- /.box-header -->
									<!-- form start -->
									<form method="POST" action="{{ action('RepController@store') }}" role="form">
											@csrf
											<div class="box-body">
											    <div class="form-group">
											        <label for="firstName">First Name</label>
											        <input type="text" class="form-control" id="first_name" placeholder="First Name..." name="first_name" value="{{ old('first_name') }}">
											    </div>
											    <div class="form-group">
											        <label for="lastName">Last Name</label>
											        <input type="text" class="form-control" id="last_name" placeholder="Last Name..." name="last_name" value="{{ old('last_name') }}">
											    </div>
											    <div class="form-group">
											        <label for="companyName">Company Name</label>
											        <input type="text" class="form-control" id="company_name" placeholder="Company Name..." name="company_name" value="{{ old('company_name') }}">
											    </div>
											    <div class="form-group">
											        <label for="emailAddress">Email Address</label>
											        <input type="email" class="form-control" id="email" placeholder="Email..." name="email" value="{{ old('email') }}">
													</div>
													<div class="form-group">
														<label for="password">Password</label>
														<input type="password" class="form-control" id="password" placeholder="Password..." name="password">
													</div>
													<div class="form-group">
														<label for="passwordConfirm">Confirm Password</label>
														<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password...">
													</div>
											    <!-- radio -->
											    <div class="form-group">
														<label>Select Role</label>
														<select class="form-control" name="role">

															@if (Session::has('message'))
																<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i> Success!</h4>{{ Session::get('message') }}</div>
															@endif

															@foreach($roles as $role)
															<option value="{{ $role->name }}">{{ ucwords($role->name) }}</option>
															@endforeach

														</select>
													</div>

													@if ($errors->any())
													<div class="alert alert-danger">
															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													    <ul>
													        @foreach ($errors->all() as $error)
													        <li>{{ $error }}</li>
													        @endforeach
													    </ul>
													</div>
													@endif

													</div>
											<!-- /.box-body -->
											<div class="box-footer">
													<button type="submit" class="btn btn-primary">Submit</button>
											</div>
									</form>
							</div>
							<!-- /.box -->
					</div>
					<!--/.col (right) -->
					<div class="col-md-8">
					<div class="box">
            <div class="box-header">
              <h3 class="box-title">Representative List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Company name</th>
                  <th>Email Address</th>
									<th>User Type</th>
									<th>Action</th>
                </tr>
                </thead>
                <tbody>
									@foreach($users as $user)
									<tr class="rep-list" data-id="{{ $user->id }}">
										<td>{{ $user->fullName() }}</td>
										<td>{{ $user->company_name }}</td>
										<td>{{ $user->email }}</td>
										<td>{{ ucwords($user->roles->first()->name) }}</td>
										<td>
												<div class="btn-group">
													<button type="button" class="btn btn-default btn-edit" data-toggle="modal" data-target="#modal-success">Edit</button>
													<button type="button" class="btn btn-warning show-delete" data-toggle="modal" data-target="#modal-delete">Delete</button>
												</div>
											</td>
									</tr>
									@endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
					</div>
					<!--/.col (right) -->
			</div>
			<div class="modal modal-defaut fade" id="modal-success">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Edit Representative</h4>
						</div>
						<div class="modal-body">
								<!-- form start -->
								<form role="form">
										<div class="box-body">
												<div class="form-group">
														<label for="exampleInputEmail1">First Name</label>
														<input type="text" class="form-control" id="modal_first_name" placeholder="First Name..." name="first_name">
												</div>
												<div class="form-group">
														<label for="exampleInputPassword1">Last Name</label>
														<input type="text" class="form-control" id="modal_last_name" placeholder="Last Name..." name="last_name">
												</div>
												<div class="form-group">
														<label for="exampleInputPassword1">Company Name</label>
														<input type="text" class="form-control" id="modal_company_name" placeholder="Company Name..." name="company_name">
												</div>
												<div class="form-group">
														<label for="exampleInputEmail1">Email Address</label>
														<input type="email" class="form-control" id="modal_email" placeholder="Email..." name="email">
												</div>
												<!-- radio -->
												<div class="form-group">
													<label>Select Role</label>
													<select class="form-control" name="role" id="modal_role">
															@foreach($roles as $role)
															<option value="{{ $role->name }}">{{ ucwords($role->name) }}</option>
															@endforeach
													</select>
												</div>
										</div>
											<!-- /.box-body -->
									</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default btn-modal-close" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-default btn-update">Update</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<div class="modal modal-defaut fade" id="modal-delete">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Message</h4>
						</div>
						<div class="modal-body">
								Are you sure you want to delete <strong id="msg_firstname" class></strong>'s details ?
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default btn-modal-close" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-default btn-delete">Delete</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
    </section>
</div>
<!-- /.content-wrapper -->

@endsection

@section('script')
<script>
$(function() {

	var id = 0;

	$('.btn-edit').on('click', function() {

		id = $(this).parents('.rep-list').data('id');
		
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			type: 'GET',
			url: 'users/' + id,
			success: function( response ) {
				$('#modal_first_name').val(response.first_name);
				$('#modal_last_name').val(response.last_name);
				$('#modal_company_name').val(response.company_name);
				$('#modal_email').val(response.email);
			$('#modal_role').val(response.role);
			}
		});

	});

	$('.btn-update').on('click', function() {

		$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			type: 'PATCH',
			url: 'users/' + id,
			data: {
				'_method': 'PATCH',
				'id': id,
				'first_name': $('#modal_first_name').val(),
				'last_name': $('#modal_last_name').val(),
				'company_name': $('#modal_company_name').val(),
				'email': $('#modal_email').val(),
				'role': $('#modal_role').val()
			},
			success: function( response) {
				console.log(response);
			},
			complete: function(response) {
					$('.btn-modal-close').click();
					window.location.href = '/rep';
			}
		});

	});

	$('.show-delete').on('click', function() {
		
		id = $(this).parents('.rep-list').data('id');
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			type: 'GET',
			url: 'users/' + id,
			success: function( response ) {
				$('#msg_firstname').html(response.first_name);
			}
		});

	});

	$('.btn-delete').on('click', function() {
		console.log("asd");
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			type: 'PATCH',
			url: 'users/delete/' + id,
			data: {
				'_method': 'PATCH',
				'id': id,
			},
			success: function( response) {
				console.log(response);
			},
			complete: function(response) {
					$('.btn-modal-close').click();
					window.location.href = '/rep';
			}
		});
	});
		
});
</script>
@endsection
