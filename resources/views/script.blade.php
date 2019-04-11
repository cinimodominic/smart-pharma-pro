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
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">New Patient</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Existing Patient</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <form role="form">
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First name</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="First name" name="scriptFirstName">
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input type="text" class="form-control" id="lastname" placeholder="Last name" name="scriptLastName">
                                        </div>
                                    <!-- /.form-group -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Patient Address</label>
                                    <textarea class="form-control" rows="3" placeholder="Patient address" name="scriptAddress"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="scriptMemId">Member Id</label>
                                    <input type="text" class="form-control" id="member_id" placeholder="Enter Member Id" name="scriptMemId">
                                </div>
                                <div class="form-group">
                                    <label for="scriptDob">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" name="scriptDob">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cellpone number</label>
                                    <input type="text" class="form-control" id="cp_number" placeholder="Enter cellphone number" name="scriptCP">
                                </div>
                                <!-- radio -->
                                <!-- radio -->
                                <div class="form-group">
                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="braceTypeRadios" id="rx" value="option1" checked>
                                        RX
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="braceTypeRadios" id="dme" value="option2">
                                        DME
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group" id="leadType">
                                    <div class="form-group">
                                        <label>Brace Type</label>
                                        <select class="form-control" name="scriptBrace">
                                            <option>Back</option>
                                            <option>Knee (left)</option>
                                            <option>Knee (right)</option>
                                            <option>Shoulder</option>
                                            <option>Wrist(left)</option>
                                            <option>Wrist(right)</option>
                                            <option>Ankle(left)</option>
                                            <option>Ankle(right)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Upload prescription</label>
                                    <input type="file" id="exampleInputFile" name="scriptPresc1">
                                </div>
                                <div class="form-group">
                                    <input type="file" id="exampleInputFile" name="scriptPresc2">
                                </div>
                                <div class="form-group">
                                    <input type="file" id="exampleInputFile" name="scriptPresc3">
                                </div>
                                <div class="form-group">
                                    <input type="file" id="exampleInputFile" name="scriptPresc4">
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <div class="form-group">
                                <label>Patient's name</label>
                                <select class="form-control">
                                    <option>Name 1</option>
                                    <option>Name 2</option>
                                    <option>Name 3</option>
                                    <option>Name 4</option>
                                    <option>Name 5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                    <input type="radio" name="braceTypeRadios2" id="rx2" value="option1" checked>
                                    RX
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                    <input type="radio" name="braceTypeRadios2" id="dme2" value="option2">
                                    DME
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" id="leadType2">
                                <label>Brace Type</label>
                                <select class="form-control">
                                    <option>Back</option>
                                    <option>Knee (left)</option>
                                    <option>Knee (right)</option>
                                    <option>Shoulder</option>
                                    <option>Wrist(left)</option>
                                    <option>Wrist(right)</option>
                                    <option>Ankle(left)</option>
                                    <option>Ankle(right)</option>
                                </select>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
            </div>
            <!--/.col (right) -->
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Script List</h3>
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
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-delete">Delete</button>
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
        </div>
        <div class="modal modal-defaut fade" id="modal-delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete Script</h4>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure you want to Delete?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-default">Delete</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="modal modal-defaut fade" id="modal-success">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Edit Script</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" id="firstname" placeholder="First name">
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" id="lastname" placeholder="Last name">
                                    </div>
                                <!-- /.form-group -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Patient Address</label>
                                <textarea class="form-control" rows="3" placeholder="Patient address"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Member Id</label>
                                <input type="email" class="form-control" id="member_id" placeholder="Enter Member Id">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Cellpone number</label>
                                <input type="text" class="form-control" id="cp_number" placeholder="Enter cellphone number">
                            </div>
                            <!-- radio -->
                            <!-- radio -->
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                    <input type="radio" name="braceTypeRadiosEdit" id="rxEdit" value="option1" checked>
                                    RX
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                    <input type="radio" name="braceTypeRadiosEdit" id="dmeEdit" value="option2">
                                    DME
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" id="leadTypeEdit">
                                <div class="form-group">
                                    <label>Brace Type</label>
                                    <select class="form-control">
                                        <option>Back</option>
                                        <option>Knee (left)</option>
                                        <option>Knee (right)</option>
                                        <option>Shoulder</option>
                                        <option>Wrist(left)</option>
                                        <option>Wrist(right)</option>
                                        <option>Ankle(left)</option>
                                        <option>Ankle(right)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload prescription</label>
                                <input type="file" id="exampleInputFile">
                            </div>
                            <div class="form-group">
                                <input type="file" id="exampleInputFile">
                            </div>
                            <div class="form-group">
                                <input type="file" id="exampleInputFile">
                            </div>
                            <div class="form-group">
                                <input type="file" id="exampleInputFile">
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
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

@section('script')
<script>
    $("#leadType").hide();
    $("#leadType2").hide();
    $("#leadTypeEdit").hide();
    $("#rx").click(function(){
        $("#leadType").slideUp();
    });
    $("#dme").click(function(){
        $("#leadType").slideDown();
    });

    $("#rx2").click(function(){
        $("#leadType2").slideUp();
    });
    $("#dme2").click(function(){
        $("#leadType2").slideDown();
    });

    $("#rxEdit").click(function(){
        $("#leadTypeEdit").slideUp();
    });
    $("#dmeEdit").click(function(){
        $("#leadTypeEdit").slideDown();
    });
</script>
@endsection('script')