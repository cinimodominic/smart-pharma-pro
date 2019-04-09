@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

<!-- /content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>Script</h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Script</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-4">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Script</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First name</label>
                                <input type="email" class="form-control" id="firstname" placeholder="First name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Last name</label>
                                <input type="password" class="form-control" id="lastname" placeholder="Last name">
                            </div>
                            <div class="form-group">
															<label>Patient Address</label>
															<textarea class="form-control" rows="3" placeholder="patient_address"></textarea>
														</div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Member Id</label>
                                <input type="email" class="form-control" id="member_id" placeholder="Enter Member Id">
														</div>
														<div class="form-group">
                                <label for="exampleInputEmail1">DOB</label>
                                <input type="email" class="form-control" id="dob" placeholder="Enter DOB">
														</div>
														<div class="form-group">
                                <label for="exampleInputEmail1">Cellpone number</label>
                                <input type="text" class="form-control" id="cp_number" placeholder="Enter cellphone number">
														</div>
														<div class="form-group">
															<label>Medical type</label>
															<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
																<option selected="selected">RX</option>
																<option>DME</option>
															</select>
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
        </div>
				<div class="col-sm-8">
							<div class="box box-primary">
								<div class="box-header">
									<h3 class="box-title">Representative List</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
										<tr>
											<th>Name</th>
											<th>Address</th>
											<th>Member ID</th>
											<th>DOB</th>
											<th>Contact number</th>
											<th>Action</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td>test@gmail.com</td>
											<td>User</td>
											<td>User</td>
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
						<div class="modal modal-defaut fade" id="modal-success">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Edit Script</h4>
						</div>
						<div class="modal-body">
							<!-- form start -->
							<form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First name</label>
                                <input type="email" class="form-control" id="firstname" placeholder="First name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Last name</label>
                                <input type="password" class="form-control" id="lastname" placeholder="Last name">
                            </div>
                            <div class="form-group">
															<label>Patient Address</label>
															<textarea class="form-control" rows="3" placeholder="patient_address"></textarea>
														</div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Member Id</label>
                                <input type="email" class="form-control" id="member_id" placeholder="Enter Member Id">
														</div>
														<div class="form-group">
                                <label for="exampleInputEmail1">DOB</label>
                                <input type="email" class="form-control" id="dob" placeholder="Enter DOB">
														</div>
														<div class="form-group">
                                <label for="exampleInputEmail1">Cellpone number</label>
                                <input type="text" class="form-control" id="cp_number" placeholder="Enter cellphone number">
														</div>
														<div class="form-group">
															<label>Medical type</label>
															<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
																<option selected="selected">RX</option>
																<option>DME</option>
															</select>
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
