@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')


<!-- /content-wrapper -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>Genetic Screening Form</h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Genetic Screening Form</li>
        </ol>
    </section>

    <section class="content">
        <div class="col-md-12">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li><a href="#tab_1">Step 1</a></li>
                    <li><a href="#tab_2">Step 2</a></li>
                    <li><a href="#tab_3">Step 3</a></li>
                    <li><a href="#tab_4">Step 4</a></li>
                    <li><a href="#tab_5">Step 5</a></li>
                    <li><a href="#tab_6">Step 6</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="tab_1">
                        <h3>Patient Informations</h3>
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Firstname</label>
                                            <input type="text" name="firstname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">lastname</label>
                                            <input type="text" name="lastname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="firstname">Address</label>
                                            <textarea name="address" id="address" class="form-control"></textarea>
                                            <p class="help-block">Sample: House number, Street, Subdivision/Zone,
                                                Barangay, City
                                                and Zip code</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="firstname">Mobile phone</label>
                                            <input type="text" name="mobilenumber" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="firstname">House number</label>
                                            <input type="text" name="housenumber" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="firstname">Email Address</label>
                                            <input type="text" name="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="birthday">Birthday</label>
                                            <input type="date" name="birthday" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="birthday">Gender</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios1" value="option1" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios2" value="option2">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios2" value="option2">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    N/A
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="birthday">Birthday</label>
                                            <select name="ethnicity" id="ethnic" class="form-control">
                                                <option value="African American">African American</option>
                                                <option value="American Indian">American Indian</option>
                                                <option value="Ashkenazi Jewish">Ashkenazi Jewish</option>
                                                <option value="Asian" selected="selected">Asian</option>
                                                <option value="Black/African">Black/African</option>
                                                <option value="Caucasian">Caucasian</option>
                                                <option value="Decline to Answer">Decline to Answer</option>
                                                <option value="Hispanic/Latino">Hispanic/Latino</option>
                                                <option value="Middle Eastern">Middle Eastern</option>
                                                <option value="Native American">Native American</option>
                                                <option value="Other Race">Other Race</option>
                                                <option value="Pacific Islander">Pacific Islander</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="firstname">Driver's license</label>
                                            <input type="text" name="license" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="firstname">Drivers License/ID Front</label>
                                            <input type="file" name="license"
                                                accept="image/x-png,image/gif,image/jpeg/pdf">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="tab_2">
                        <h3>Patient Insurance Informations</h3>
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="firstname">Insurance company</label>
                                            <input type="text" name="insuranceCompany" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="lastname">Member ID</label>
                                            <input type="text" name="memberId" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="firstname">Address</label>
                                            <textarea name="address" id="address" class="form-control"></textarea>
                                            <p class="help-block">
                                                Sample: House number, Street, Subdivision/Zone,
                                                Barangay, City
                                                and Zip code
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="firstname">Mobile phone</label>
                                            <input type="text" name="mobilenumber" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="firstname">Group ID</label>
                                            <input type="text" name="groupId" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="firstname">Insurance Card Front</label>
                                            <input type="file" name="license"
                                                accept="image/x-png,image/gif,image/jpeg/pdf">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="tab_3">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Patient Products and Services</h3>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="firstname">Chief complaint</label>
                                        <textarea name="chiefComplaint" class="form-control"></textarea>
                                        <p class="help-block">Must know exact meds and dose i.e. metoprolol 50mg twice
                                            per day</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="birthday">Labs</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="labs" id="exampleRadios1" value="pgx" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                PGX
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="labs" id="exampleRadios2" value="cgx">
                                            <label class="form-check-label" for="exampleRadios2">
                                                CGX
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" id="pgx">
                                <h3>Patient Medical History <span class="text-green">(PGX)</span></h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="medications">Number of Medications Currently Taking</label>
                                        <select name="medications" id="medication" class="form-control">
                                            <option value="none">none</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5 or more</option>
                                        </select>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" id="cgx">
                                <h3 class="box-title">Patient Medical History <span class="text-light-blue">(CGX)</span></h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="medications">Number of family members with history of cancer</label>
                                        <select name="medications" id="medication" class="form-control">
                                            <option value="none">none</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5 or more</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <label for="medications">Does patient have a personal history of cancer?</label>
                                        <select name="medications" id="medication" class="form-control">
                                            <option value="yes">No</option>
                                            <option value="no">Yes</option>
                                        </select>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_4">
                        <h3>Patient Medical Condition</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <label for="birthday">Personal history: Check all that apply</label>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios1" value="option1">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Acne
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Depression
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Heart disease
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Neuromuscular disease
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Rosacea
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios1" value="option1">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Alzheimer
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Diabetes type 1
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Hepatic disease
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Neuropathy
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Scarring
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios1" value="option1">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Arthritis
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Diabetes type 2
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Hypertension
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Osteoporosis
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Stroke
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios1" value="option1">
                                            <label class="form-check-label" for="exampleRadios1">
                                                COPD
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Exzema
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Malignancy
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Psoriasis
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios1" value="option1">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Coronary disease
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                HIV/AIDS
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Migraines
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Renal disease
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Rosacea
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <label for="birthday">Family history: Check all that apply</label>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios1" value="option1">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Acne
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Depression
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Heart disease
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Neuromuscular disease
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Rosacea
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios1" value="option1">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Alzheimer
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Diabetes type 1
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Hepatic disease
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Neuropathy
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Scarring
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios1" value="option1">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Arthritis
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Diabetes type 2
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Hypertension
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Osteoporosis
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Stroke
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios1" value="option1">
                                            <label class="form-check-label" for="exampleRadios1">
                                                COPD
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Exzema
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Malignancy
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Psoriasis
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios1" value="option1">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Coronary disease
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                HIV/AIDS
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Migraines
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Renal disease
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Rosacea
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    <label for="height">Height (inches)</label>
                                    <input type="number" name="height" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="height">Weight (pounds)</label>
                                    <input type="number" name="weight" class="form-control">
                                    <br>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_7">
                        <h3>Cancer history</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label for="">Have you experienced abnormal weight loss?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Have you experienced abnormal weight gain?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Any unexplained loss of appetite?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Have you experienced any abnormal pain?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Have you experienced nausea?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Have you experienced vomiting?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Have you experienced any weakness or fatigue?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Have you experienced any anemia?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Do you have signs of jaundice?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Do you have diabetes?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Have you experienced any constipation?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Any skin tags?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Any blood in stool?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Dry skin?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Rash?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" checked>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label for="">Have you detected a new lump in the breast or underarm?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="no">
                                        <label class="form-check-label" for="inlineRadio1">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="left">
                                        <label class="form-check-label" for="inlineRadio2">Left</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="right">
                                        <label class="form-check-label" for="inlineRadio2">Right</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="both" checked>
                                        <label class="form-check-label" for="inlineRadio2">Both</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Have you noticed any thickening or swelling of part of your breast?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="no">
                                        <label class="form-check-label" for="inlineRadio1">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="left">
                                        <label class="form-check-label" for="inlineRadio2">Left</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="right">
                                        <label class="form-check-label" for="inlineRadio2">Right</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="both" checked>
                                        <label class="form-check-label" for="inlineRadio2">Both</label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="">Any irritation or dimpling of breast skin?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                            value="no">
                                        <label class="form-check-label" for="inlineRadio1">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                            value="left">
                                        <label class="form-check-label" for="inlineRadio2">Left</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                            value="right">
                                        <label class="form-check-label" for="inlineRadio2">Right</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4"
                                            value="both" checked>
                                        <label class="form-check-label" for="inlineRadio2">Both</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label for="">Any redness or flaky skin in the nipple area or breast?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="no">
                                        <label class="form-check-label" for="inlineRadio1">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="left">
                                        <label class="form-check-label" for="inlineRadio2">Left</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="right">
                                        <label class="form-check-label" for="inlineRadio2">Right</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="both" checked>
                                        <label class="form-check-label" for="inlineRadio2">Both</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Any pulling in of the nipple or pain in the nipple area?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                            value="no">
                                        <label class="form-check-label" for="inlineRadio1">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                            value="left">
                                        <label class="form-check-label" for="inlineRadio2">Left</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                            value="right">
                                        <label class="form-check-label" for="inlineRadio2">Right</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4"
                                            value="both" checked>
                                        <label class="form-check-label" for="inlineRadio2">Both</label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="">Nipple discharge other than breast milk, including blood?</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                            value="no">
                                        <label class="form-check-label" for="inlineRadio1">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                            value="left">
                                        <label class="form-check-label" for="inlineRadio2">Left</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                            value="right">
                                        <label class="form-check-label" for="inlineRadio2">Right</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4"
                                            value="both" checked>
                                        <label class="form-check-label" for="inlineRadio2">Both</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label for="">Any change in the size or the shape of the breast?</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="no">
                                        <label class="form-check-label" for="inlineRadio1">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="left">
                                        <label class="form-check-label" for="inlineRadio2">Left</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="right">
                                        <label class="form-check-label" for="inlineRadio2">Right</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="both" checked>
                                        <label class="form-check-label" for="inlineRadio2">Both</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Pain in any area of the breast?</label>
                                    
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="no">
                                        <label class="form-check-label" for="inlineRadio1">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="left">
                                        <label class="form-check-label" for="inlineRadio2">Left</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="right">
                                        <label class="form-check-label" for="inlineRadio2">Right</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="both" checked>
                                        <label class="form-check-label" for="inlineRadio2">Both</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_8">
                        <h3>Final Step</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <label for="medications">Pipe recorder.</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="file" name="pipe" class="fom-control">
                                </div>
                                <div class="col-md-12">
                                    <p class="help-block">Please attach the recorded pipe sound of the patient.</p>
                                    <label for="">CGX - Agent to state back to patient:</label>
                                    <ol>
                                        <li>Patient's name</li>
                                        <li>Patient's DOB</li>
                                        <li>What cancer(s) patient stated they had</li>
                                        <li>Personal and family history</li>
                                        <li>That the patient agrees to cancer screening test</li>
                                        <li>That the patient was not offered compensation to take test</li>
                                    </ol>
                                    <label for="">PGX - Agent to state back to patient:</label>
                                    <ol>
                                        <li>Ask to confirm medications listed</li>
                                        <li>Ask to ensure all spelling and dosage(s) are correct</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <label for="medications">Upload files</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="file" name="pipe" class="fom-control">
                                </div>
                                <div class="col-md-12">
                                    <p class="help-block">Please upload files here if your mobile camera or voice recorder is
                                        not working.</p>
                                    <label for="">Patient's signature</label>
                                    <p class="help-block">to follow....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
        <div class="row">
            
            <div class="col-md-12">
                <div class="col-md-8"></div>
                <div class="col-md-2 col-sm-12">
                    <button type="button" class="btn btn-block btn-default btn-lg" id="btnPrev">Previous</button>
                    <br>
                </div>
                <div class="col-md-2 col-sm-12">
                    <button type="button" class="btn btn-block btn-primary btn-lg" id="btnNext">Next</button>
                    <br>
                </div>
            </div>
        </div>
       
    </section>
</div>
<!-- /.content-wrapper -->
@endsection

@section('script')
<script>
    var ctr = 0;
    var labsVal = $("input[name=labs]:checked").val();

    $(function(){
        openStep(ctr);
        $("#btnNext").click(function(){
            ctr++;
            openStep(ctr);
        });
        $("#btnPrev").click(function(){
            ctr = ctr - 1
            openStep(ctr);
        });
        
        $("#cgx").hide();

        $("input[name=labs]").change(function(){
            labsVal = $("input[name=labs]:checked");
            console.log(labsVal = $("input[name=labs]:checked").val());

            if(labsVal == "pgx"){
                $("#pgx").show();
                $("#cgx").hide();
            }else {
                $("#pgx").hide();
                $("#cgx").show();
            }
        });

    });

    function openStep(stepNum){
        $(".nav-tabs > li").removeClass("active");
        $(".tab-pane").removeClass("active");

        $(".nav-tabs-custom .nav-tabs li").eq(stepNum).addClass("active");
        $(".tab-pane").eq(stepNum).addClass("active");

        if(ctr == 0){
            $("#btnPrev").attr("disabled", true);
            $("#btnPrev").addClass("disabled");
        }
        else if(ctr == 7) {
            $("#btnNext").val("submit").html("Submit");
        }
        else {
            $("#btnNext").val("Next").html("Next");
            $("#btnPrev").attr("disabled", false);
            $("#btnPrev").removeClass("disabled");
        }
    }

</script>

@endsection('script')
