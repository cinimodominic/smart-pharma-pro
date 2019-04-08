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
									<form role="form">
											<div class="box-body">
													<div class="form-group">
															<label for="exampleInputEmail1">First name</label>
															<input type="text" class="form-control" id="firstname"
																	placeholder="Enter First name">
													</div>
													<div class="form-group">
															<label for="exampleInputPassword1">Last name</label>
															<input type="text" class="form-control" id="lastname"
																	placeholder="Last name">
													</div>
													<div class="form-group">
															<label for="exampleInputPassword1">Company name</label>
															<input type="text" class="form-control" id="company_name"
																	placeholder="Enter Company name">
													</div>
													<div class="form-group">
															<label for="exampleInputEmail1">Email address</label>
															<input type="email" class="form-control" id="email"
																	placeholder="Enter email">
													</div>
													<!-- radio -->
													<div class="form-group">
															<div class="radio">
																	<label>
																			<input type="radio" name="optionsRadios" id="status1" value="option1"
																					checked>
																			This user can see everything I see
																	</label>
															</div>
															<div class="radio">
																	<label>
																			<input type="radio" name="optionsRadios" id="status2" value="option2">
																			This user can see what they submit and everyone they add under them
																	</label>
															</div>
													</div>
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
									<th>Privileges</th>
									<th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
									<td>Win 95+</td>
									<td>Win 95+</td>
                  <td>
										<div class="btn-group">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-success">Edit</button>
											<button type="button" class="btn btn-warning">Delete</button>
										</div>
									</td>
                </tr>
                </tfoot>
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
															<label for="exampleInputEmail1">First name</label>
															<input type="text" class="form-control" id="firstname"
																	placeholder="Enter First name">
													</div>
													<div class="form-group">
															<label for="exampleInputPassword1">Last name</label>
															<input type="text" class="form-control" id="lastname"
																	placeholder="Last name">
													</div>
													<div class="form-group">
															<label for="exampleInputPassword1">Company name</label>
															<input type="text" class="form-control" id="company_name"
																	placeholder="Enter Company name">
													</div>
													<div class="form-group">
															<label for="exampleInputEmail1">Email address</label>
															<input type="email" class="form-control" id="email"
																	placeholder="Enter email">
													</div>
													<!-- radio -->
													<div class="form-group">
															<div class="radio">
																	<label>
																			<input type="radio" name="optionsRadios" id="status1" value="option1"
																					checked>
																			This user can see everything I see
																	</label>
															</div>
															<div class="radio">
																	<label>
																			<input type="radio" name="optionsRadios" id="status2" value="option2">
																			This user can see what they submit and everyone they add under them
																	</label>
															</div>
													</div>
											</div>
											<!-- /.box-body -->
									</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-outline">Save changes</button>
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
