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
        @if (Session::has('message'))
            <div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-check"></i> Success!</h4>{{ Session::get('message') }}</div>
        @endif
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Patient Informations</h3>
                    </div>
                    <div class="box-body">
                        <form role="form" method="POST" action="{{ action('ScriptController@store') }}" enctype="multipart/form-data">
                            <div class="col-md-6">
                                @csrf
                                <div class="form-group">
                                    <label for="lastname">Lastname</label>
                                    <div class="input-group">
                                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Lastname">
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-flat" data-toggle="modal" data-target="#existingPatient"><i class="fa fa-user-plus"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control" id="firstname" placeholder="First name" name="scriptFirstName">
                                </div>
                                <div class="form-group">
                                    <label>Patient Address</label>
                                    <textarea class="form-control" rows="3" placeholder="Patient address" name="scriptAddress"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="scriptMemId">Member Id</label>
                                    <input type="text" class="form-control" id="member_id" placeholder="Member ID" name="scriptMemberId">
                                </div>
                                <div class="form-group">
                                    <label for="scriptDob">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" name="birthday">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cellpone number</label>
                                    <input type="text" class="form-control" id="cp_number" placeholder="Cellphone number" name="scriptCellphoneNumber">
                                </div>
                            </div>
                            <div class="col-md-6">
                                
                                <label for="scriptMemId">Prescription Type</label>
                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="braceTypeRadios" id="rx" value="dme" checked>
                                            RX
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="braceTypeRadios" id="dme" value="dme">
                                            DME
                                            </label>
                                        </div>
                                    </div>  
                                    <div class="col-md-8">
                                        <div class="form-group" id="leadType">
                                            <div class="form-group">
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
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Attach Prescription</label>
                                    <div id="file-container" class="text-center">
                                        <div class="input-group margin">
                                            <input type="file" name="prescription-file" class="form-control" accept="image/x-png,image/gif,image/jpeg" >
                                            <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-flat" id="add-file"><i class="fa fa-plus"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade" id="existingPatient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Patient's list</h4>
      </div>
      <div class="modal-body">
        <table id="table" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                    <tr class="rep-list">
                        <td>1</td>
                        <td>Juan dela Cruz</td>
                    </tr>
                    <tr class="rep-list">
                        <td>2</td>
                        <td>Juan dela Cruz</td>
                    </tr>
                    <tr class="rep-list">
                        <td>3</td>
                        <td>Juan dela Cruz</td>
                    </tr>
                    <tr class="rep-list">
                        <td>4</td>
                        <td>Juan dela Cruz</td>
                    </tr>
                </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Modal for Existing Patients -->
@endsection 

@section('script')
<script>
    $("#leadType").hide();
    $("#leadType2").hide();
    $("#leadTypeEdit").hide();
    $("#rx").click(function(){
        $("#leadType").hide();
    });
    $("#dme").click(function(){
        $("#leadType").show();
    });

    $("#rx2").click(function(){
        $("#leadType2").hide();
    });
    $("#dme2").click(function(){
        $("#leadType2").show();
    });

    $("#rxEdit").click(function(){
        $("#leadTypeEdit").hide();
    });
    $("#dmeEdit").click(function(){
        $("#leadTypeEdit").show();
    });

    $(".attach-file").change(function(){
        console.log($(this).data("prescription"));
        readURL(this, $(this).data("prescription"));
    });
    $(".remove").click(function(){
        $('#'+$(this).data("prescription"))
                    .attr('src','/images/dummy.png')
                    .width("100%")
                    .height(186);
    });

    function readURL(input, prescriptionNum) {
        console.log(input);
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#'+prescriptionNum)
                    .attr('src', e.target.result)
                    .width("100%")
                    .height(186);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    
    var file_input = "<div class='input-group margin'><input type='file' name='prescription-file' class='form-control' accept='image/x-png,image/gif,image/jpeg'><span class='input-group-btn'><button type='button' class='btn btn-default btn-flat remove-file'><i class='fa fa-minus'></i></button></span></div>";
    
   
    
    $(document).ready(function(){
        $("#add-file").click(function(){
            $("#file-container").prepend(file_input);
        });

        $(document).on("click",".remove-file", function(){
            $(this).parent().parent().remove();
        });
    });

    $(document).on('change', '.input-group', function() {
		id = $(this).parents('.rep-list').data('id');
		
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			type: 'GET',
			url: 'script/upload',
			success: function( response ) {
				$('#modal_first_name').val(response.first_name);
				$('#modal_last_name').val(response.last_name);
				$('#modal_company_name').val(response.company_name);
				$('#modal_email').val(response.email);
			$('#modal_role').val(response.role);
			}
		});

	});
</script>
@endsection('script')