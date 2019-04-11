@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

<!-- /content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>Data</h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="fa fa-shopping-cart"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total orders</span>
                        <span class="info-box-number">4</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 cl-xs-12">
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="fa fa-truck"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total dispositions</span>
                        <span class="info-box-number">4</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- /.info-box-content -->
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Sent-MD</th>
                            <th>App-Date</th>
                            <th>Px</th>
                            <th>Lead type</th>
                            <th>Rep Group</th>
                            <th>Disposition</th>
                            <th>Agent</th>
                            <th>State</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>Trident</td>
                            <td>Trident</td>
                            <td>Trident</td>
                            <td>Trident</td>
                            <td>Internet
                            Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-view">View</button></td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Date</th>
                            <th>Sent-MD</th>
                            <th>App-Date</th>
                            <th>Px</th>
                            <th>Lead type</th>
                            <th>Rep Group</th>
                            <th>Disposition</th>
                            <th>Agent</th>
                            <th>State</th>
                        </tr>
                        </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- row -->
        <div class="modal modal-defaut fade modal-xl" id="modal-view">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Patient's detail</h4>
                    </div>
                    <div class="modal-body">
                        Patients Details
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
    </section>
</div>
<!-- /.content-wrapper -->
@endsection
