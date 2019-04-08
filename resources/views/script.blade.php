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
            <div class="col-md-6">
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
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="First name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Last name</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Last name">
                            </div>
                            <div class="form-group">
															<label>Patient Address</label>
															<textarea class="form-control" rows="3" placeholder="Enter Patient Address"></textarea>
														</div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Member Id</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Member Id">
														</div>
														<div class="form-group">
                                <label for="exampleInputEmail1">DOB</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter DOB">
														</div>
														<div class="form-group">
															<label>US phone mask:</label>

															<div class="input-group">
																<div class="input-group-addon">
																	<i class="fa fa-phone"></i>
																</div>
																<input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
															</div>
															<!-- /.input group -->
														</div>
                            <!-- radio -->
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                        RX
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        DME
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
        </div>

    </section>
</div>
<!-- /.content-wrapper -->

@endsection
