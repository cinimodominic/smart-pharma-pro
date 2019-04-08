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
					<div class="col-md-6">
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
											        <label for="exampleInputEmail1">First Name</label>
											        <input type="text" class="form-control" id="first_name" placeholder="First Name..." name="first_name" value="{{ old('first_name') }}">
											    </div>
											    <div class="form-group">
											        <label for="exampleInputPassword1">Last Name</label>
											        <input type="text" class="form-control" id="last_name" placeholder="Last Name..." name="last_name" value="{{ old('last_name') }}">
											    </div>
											    <div class="form-group">
											        <label for="exampleInputPassword1">Company Name</label>
											        <input type="text" class="form-control" id="company_name" placeholder="Company Name..." name="company_name" value="{{ old('company_name') }}">
											    </div>
											    <div class="form-group">
											        <label for="exampleInputEmail1">Email Address</label>
											        <input type="email" class="form-control" id="email" placeholder="Email..." name="email" value="{{ old('email') }}">
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
					<div class="col-md-6">
					<div class="box">
            <div class="box-header">
              <h3 class="box-title">Representative List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
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
									@foreach($representatives as $representative)
									<tr data-id="{{ $representative->id }}">
										<td>{{ $representative->fullName() }}</td>
										<td>{{ $representative->company_name }}</td>
										<td>{{ $representative->email }}</td>
										<td>{{ ucwords($representative->roles->first()->name) }}</td>
										<td>
												<div class="btn-group">
													<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-success">Edit</button>
													<button type="button" class="btn btn-warning">Delete</button>
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
														<input type="text" class="form-control" id="first_name" placeholder="First Name..." name="first_name">
												</div>
												<div class="form-group">
														<label for="exampleInputPassword1">Last Name</label>
														<input type="text" class="form-control" id="last_name" placeholder="Last Name..." name="last_name">
												</div>
												<div class="form-group">
														<label for="exampleInputPassword1">Company Name</label>
														<input type="text" class="form-control" id="company_name" placeholder="Company Name..." name="company_name">
												</div>
												<div class="form-group">
														<label for="exampleInputEmail1">Email Address</label>
														<input type="email" class="form-control" id="email" placeholder="Email..." name="email">
												</div>
												<!-- radio -->
												<div class="form-group">
													<label>Select Role</label>
													<select class="form-control" name="role_id">
														<option value="1">Admin</option>
														<option value="2">User</option>
													</select>
												</div>
										</div>
											<!-- /.box-body -->
									</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-default">Update</button>
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
