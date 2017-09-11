<?php

?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="includes/lib/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="includes/lib/bootstrap-theme.min.css">


    <!--<script src="includes/lib/jquery.min.js"></script>-->
    <script src="includes/lib/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="includes/lib/bootstrap.min.js"></script>

    <script src="includes/lib/bootstrap.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="includes/css/tabsStyle.css" />
    <link rel="stylesheet" href="includes/css/customStyle.css" />
    <link rel="stylesheet" href="includes/css/labelRadioStyle.css" />
    <script>
        function validate()
        {
            if ( document.login.username.value == "" )
            {alert("Username is empty!!");
                return false;}
            if ( document.login.password.value == "" )
            {alert("Password is empty!!");
                return false;}
        }
    </script>
</head>
<body>
<div id="exTab1" class="">
    <ul  class="nav nav-pills">
        <li class="active">
            <a  href="#login_tab_content" data-toggle="tab">Log In</a>
        </li>
        <li><a href="#reg_application_tab_content" data-toggle="tab">Registration/Application</a>
        </li>
    </ul>

    <div class="tab-content clearfix ">
        <div class="tab-pane active" id="login_tab_content">
            <div class="row form_panel">
                <div class="col-lg-10" id="log_in_form">
                    <form id="login" method="post" name="login" class="form-inline col-lg-12" action="includes/php/login.php">
                        <div class="form-group col-lg-12" style="margin-bottom: 5%;">
                            <label for="username" class="col-lg-4">User Name:</label>
                            <input type="text" class="form-control col-lg-8" id="username" name="username" placeholder="Enter User Name">
                        </div>
                        <div class="form-group col-lg-12" style="margin-bottom: 5%;">
                            <label for="pwd" class="col-lg-4">Password:</label>
                            <input type="password" class="form-control col-lg-8" id="password" name="password" placeholder="Enter Password">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                        <!--                        <input type="submit" name="submit" class="btn btn-success btn-large pull-right">Log In</button>-->

                        <input type="submit" name="submit" class="button btn btn-success btn-large" value="LOGIN" style="border: 2px solid #90ad80; color: #e2e9e6; background: #326750;"/>

                    </form>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="reg_application_tab_content">
            <div class="row">
                <div class="col-lg-12">
                    <label> Select Desired</label>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="btn-group btn-group-inline" data-toggle="buttons">
                            <label class="btn">
                                <input type="radio" name='reg_options' value="lab_registration">
                                <i class="fa fa-circle-o fa-2x"></i>
                                <i class="fa fa-dot-circle-o fa-2x"></i>
                                <span>New Lab Registration</span>
                            </label>
                            <label class="btn">
                                <input type="radio" name='reg_options' value="industry_registration">
                                <i class="fa fa-circle-o fa-2x"></i>
                                <i class="fa fa-dot-circle-o fa-2x"></i>
                                <span>New Industry Registration</span>
                            </label>
                            <label class="btn">
                                <input type="radio" name='reg_options' value="industry_approval_application">
                                <i class="fa fa-circle-o fa-2x"></i>
                                <i class="fa fa-dot-circle-o fa-2x"></i>
                                <span>New Industry Approval Form</span>
                            </label>
                            <label class="btn">
                                <input type="radio" name='reg_options' value="other">
                                <i class="fa fa-circle-o fa-2x"></i>
                                <i class="fa fa-dot-circle-o fa-2x"></i>
                                <span>Consultant Registration</span>
                            </label>
                        </div>
                        <!--<input type="radio" name="optradio" class="radio-inline" value="lab_registration">
                        New Lab Registration Application
                        <input type="radio" name="optradio" class="radio-inline" value="industry_approval_application">
                        New Industry Approval Application Form
                        </input>
                        <input type="radio" name="optradio" class="radio-inline" value="other">
                        Other...
                        </input>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--    LAB REGISTRATION FORM   -->
                    <form class="registrationForm" id="lab_registration_form" style="display: none;">
                        <h3 style="color: blue;"> Lab Registration Form</h3>
                        <div class="form-group">
                            <label for="lab_name">Laboratory Name:</label>
                            <input type="text" class="form-control" id="lab_name" name="lab_name" placeholder="Enter Laboratory Name">
                        </div>
                        <div class="form-group">
                            <label for="lab_address">Laboratory Address:</label>
                            <textarea class="form-control" rows="5" id="lab_address" name="lab_address" placeholder="Enter Laboratory Address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="lab_phone">Laboratory Phone:</label>
                            <input type="text" class="form-control" id="lab_phone" name="lab_phone" placeholder="Enter Laboratory Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="lab_email">Laboratory Email:</label>
                            <input type="email" class="form-control" id="lab_email" name="lab_email" placeholder="Enter Laboratory Email">
                        </div>
                        <div class="form-group">
                            <label for="lab_type">Select Laboratory Type:</label>
                            <select id="lab_type" name="lab_type" class="form-control" onchange="getLabFormDropDownLists('lab_purpose')">
                                <option value="%">Select Lab Type</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lab_purpose">Select Laboratory Purpose:</label>
                            <select id="lab_purpose" name="lab_purpose" class="form-control">
                                <option value="%">Select Lab Purpose</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Is Laboratory Certified by EPA?:</label>
                            <div class="btn-group btn-group-inline" data-toggle="buttons">
                                <label class="btn">
                                    <input type="radio" name='epa_certify' value="yes" checked>
                                    <i class="fa fa-circle-o fa-2x"></i>
                                    <i class="fa fa-dot-circle-o fa-2x"></i>
                                    <span>Yes</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" name='epa_certify' value="no">
                                    <i class="fa fa-circle-o fa-2x"></i>
                                    <i class="fa fa-dot-circle-o fa-2x"></i>
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Is Laboratory Certified by Another Entity?:</label>
                            <div class="btn-group btn-group-inline" data-toggle="buttons">
                                <label class="btn">
                                    <input type="radio"  name='certify_other' value="yes">
                                    <i class="fa fa-circle-o fa-2x"></i>
                                    <i class="fa fa-dot-circle-o fa-2x"></i>
                                    <span>Yes</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" name='certify_other' value="no" checked>
                                    <i class="fa fa-circle-o fa-2x"></i>
                                    <i class="fa fa-dot-circle-o fa-2x"></i>
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group" style="display: none;" id="other_certification_agency">
                            <label for="lab_other_certify_name">Name:</label>
                            <input type="text" class="form-control" id="lab_other_certify_name" name="lab_other_certify_name" placeholder="Enter Name">
                        </div>
                        <hr style="border: dashed 1px green;"/>
                        <h4 style="color: blue;">Contact Person Detail</h4>
                        <div class="form-group">
                            <label for="lab_cp_name">Full Name:</label>
                            <input type="text" class="form-control" id="lab_cp_name" name="lab_cp_name" placeholder="Enter Contact Person Name">
                        </div>
                        <div class="form-group">
                            <label for="lab_cp_email">Email:</label>
                            <input type="email" class="form-control" id="lab_cp_email" name="lab_cp_email" placeholder="Enter Contact Person Email">
                        </div>
                        <div class="form-group">
                            <label for="lab_cp_designation">Designation:</label>
                            <input type="text" class="form-control" id="lab_cp_designation" name="lab_cp_designation" placeholder="Enter Designation">
                        </div>
                        <div class="form-group">
                            <label for="lab_cp_cnic">CNIC:</label>
                            <input type="text" class="form-control" id="lab_cp_cnic" name="lab_cp_cnic" placeholder="Enter CNIC">
                        </div>
                        <div class="form-group">
                            <label for="lab_cp_address">Address:</label>
                            <input type="text" class="form-control" id="lab_cp_address" name="lab_cp_address" placeholder="Enter Contact Person Address">
                        </div>
                        <div class="form-group">
                            <label for="lab_cp_phone">Phone:</label>
                            <input type="text" class="form-control" id="lab_cp_phone" name="lab_cp_phone" placeholder="Enter Phone Number">
                        </div>
                        <hr style="border: dashed 1px green;"/>
                        <h4 style="color: blue;">Lab Account Details</h4>
                        <div class="form-group">
                            <label for="lab_username">Lab Username:</label>
                            <input type="text" class="form-control" id="lab_username" name="lab_username" placeholder="Set Username">
                        </div>
                        <div class="form-group">
                            <label for="lab_pwd">Lab Password:</label>
                            <input type="password" class="form-control" id="lab_pwd" name="lab_pwd" placeholder="Set Password">
                        </div>
                        <div class="form-group">
                            <label for="lab_cnf_pwd">Confirm Password:</label>
                            <input type="password" class="form-control" id="lab_cnf_pwd" name="lab_cnf_pwd" placeholder="Confirm Password" onchange="confirmPassword('lab_pwd','lab_cnf_pwd','password_mismatch_lab')">
                        </div>
                        <div style="height: auto;text-align: left;margin-left: 10px;margin-top: -10px;">
                            <h5 id="password_mismatch_lab" style="color: red"></h5>
                        </div>
                        <button type="submit" id="reg_lab" class="btn btn-success pull-right">Submit</button>
                    </form>
                    <!--    APPROVAL APPLICATION FORM   -->
                    <form class="registrationForm" id="ind_approval_form" style="display: none;">
                        <h3 style="color: blue;">Approval Application Form</h3>
                        <div class="form-group">
                            <label for="ind_proj_title">Project Title:</label>
                            <input type="text" class="form-control" id="ind_proj_title" name="ind_proj_title" placeholder="Enter Project Title">
                        </div>
                        <div class="form-group">
                            <label for="ind_proj_description">Project Description:</label>
                            <textarea class="form-control" rows="5" id="ind_proj_description" name="ind_proj_description" placeholder="Enter Project Decription"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="ind_proj_objective">Objective of Project:</label>
                            <textarea class="form-control" rows="5" id="ind_proj_objective" name="ind_proj_objective" placeholder="Enter Project Objectives"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="ind_proj_ind_type">Select Industry Type:</label>
                            <select id="ind_proj_ind_type" name="ind_proj_ind_type" class="form-control">
                                <option value="%">Select Industry Type</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ind_proj_district">Select District:</label>
                            <select id="ind_proj_district" name="ind_proj_district" class="form-control">
                                <option value="%">Select District</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ind_proj_address">Address of Project:</label>
                            <textarea class="form-control" rows="5" id="ind_proj_address" name="ind_proj_address" placeholder="Enter Address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="ind_proj_cost">Project Cost PKR:</label>
                            <input type="text" class="form-control" id="ind_proj_cost" name="ind_proj_cost" placeholder="Enter Project Cost PKR">
                        </div>
                        <div class="form-group">
                            <label for="ind_proj_phone">Phone:</label>
                            <input type="text" class="form-control" id="ind_proj_phone" name="ind_proj_phone" placeholder="Enter Phone Number">
                        </div>
                        <hr style="border: dashed 1px green;"/>
                        <label style="color: blue;">Proponent Detail</label>
                        <div class="form-group">
                            <label for="ind_propo_name">Owner Name:</label>
                            <input type="text" class="form-control" id="ind_propo_name" name="ind_propo_name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="ind_propo_address">Address:</label>
                            <input type="text" class="form-control" id="ind_propo_address" name="ind_propo_address" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="ind_propo_phone">Phone:</label>
                            <input type="text" class="form-control" id="ind_propo_phone" name="ind_propo_phone" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="ind_propo_landline_phone">Landline Phone:</label>
                            <input type="text" class="form-control" id="ind_propo_landline_phone" name="ind_propo_landline_phone" placeholder="Enter Landline Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="ind_propo_cnic">CNIC:</label>
                            <input type="text" class="form-control" id="ind_propo_cnic" name="ind_propo_cnic" placeholder="Enter CNIC">
                        </div>
                        <div class="form-group">
                            <label for="ind_propo_email">Email:</label>
                            <input type="email" class="form-control" id="ind_propo_email" name="ind_propo_email" placeholder="Enter Email">
                        </div>
                        <hr style="border: dashed 1px green;"/>
                        <h4 style="color: blue;">Contact Person Detail</h4>
                        <div class="form-group">
                            <label for="ind_cp_name">Full Name:</label>
                            <input type="text" class="form-control" id="ind_cp_name" name="ind_cp_name" placeholder="Enter Contact Person Name">
                        </div>
                        <div class="form-group">
                            <label for="ind_cp_email">Email:</label>
                            <input type="email" class="form-control" id="ind_cp_email" name="ind_cp_email" placeholder="Enter Contact Person Email">
                        </div>
                        <div class="form-group">
                            <label for="ind_cp_designation">Designation:</label>
                            <input type="text" class="form-control" id="ind_cp_designation" name="ind_cp_designation" placeholder="Enter Designation">
                        </div>
                        <div class="form-group">
                            <label for="ind_cp_cnic">CNIC:</label>
                            <input type="text" class="form-control" id="ind_cp_cnic" name="ind_cp_cnic" placeholder="Enter CNIC">
                        </div>
                        <div class="form-group">
                            <label for="ind_cp_address">Address:</label>
                            <input type="text" class="form-control" id="ind_cp_address" name="ind_cp_address" placeholder="Enter Contact Person Address">
                        </div>
                        <div class="form-group">
                            <label for="ind_cp_phone">Phone:</label>
                            <input type="text" class="form-control" id="ind_cp_phone" name="ind_cp_phone" placeholder="Enter Phone Number">
                        </div>
                        <hr style="border: dashed 1px green;"/>
                        <h4 style="color: blue;">Consultant</h4>
                        <label> Select Desired</label>
                        <div class="col-lg-12">
                            <div class="btn-group btn-group-inline" data-toggle="buttons">
                                <label class="btn">
                                    <input type="radio" name='consultant_options' value="existing_consultant">
                                    <i class="fa fa-circle-o fa-2x"></i>
                                    <i class="fa fa-dot-circle-o fa-2x"></i>
                                    <span>Choose from Existing Consultants</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" name='consultant_options' value="reg_new_consultant">
                                    <i class="fa fa-circle-o fa-2x"></i>
                                    <i class="fa fa-dot-circle-o fa-2x"></i>
                                    <span>Register New Consultant</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group" id="consultant_selection" style="display: none;">
                            <label for="ind_proj_consultant">Select Consultant:</label>
                            <select id="ind_proj_consultant" name="ind_proj_consultant" class="form-control">
                                <option value="%">Select Consultant</option>
                            </select>
                        </div>
                        <div id="ind_consultant_details" style="display: none;">
                            <h4 style="color: blue;">Consultant Details</h4>
                            <div class="form-group">
                                <label for="ind_consultant_name">Full Name:</label>
                                <input type="text" class="form-control" id="ind_consultant_name" name="ind_consultant_name" placeholder="Enter Consultant Name">
                            </div>
                            <div class="form-group">
                                <label for="ind_consultant_email">Email:</label>
                                <input type="email" class="form-control" id="ind_consultant_email" name="ind_consultant_email" placeholder="Enter Consultant Email">
                            </div>
                            <div class="form-group">
                                <label for="ind_consultant_cnic">CNIC:</label>
                                <input type="text" class="form-control" id="ind_consultant_cnic" name="ind_consultant_cnic" placeholder="Enter CNIC">
                            </div>
                            <div class="form-group">
                                <label for="ind_consultant_address">Address:</label>
                                <input type="text" class="form-control" id="ind_consultant_address" name="ind_consultant_address" placeholder="Enter Consultant Address">
                            </div>
                            <div class="form-group">
                                <label for="ind_consultant_phone">Phone:</label>
                                <input type="text" class="form-control" id="ind_consultant_phone" name="ind_consultant_phone" placeholder="Enter Phone Number">
                            </div>
                            <div class="form-group">
                                <label for="ind_consultant_ntn">NTN:</label>
                                <input type="text" class="form-control" id="ind_consultant_ntn" name="ind_consultant_ntn" placeholder="Enter NTN Number">
                            </div><div class="form-group">
                                <label for="consultant_pec">PEC:</label>
                                <input type="text" class="form-control" id="ind_consultant_pec" name="ind_consultant_pec" placeholder="Enter PEC">
                            </div>
                            <div class="form-group">
                                <label for="ind_consultant_pwd">Password:</label>
                                <input type="password" class="form-control" id="ind_consultant_pwd" name="ind_consultant_pwd" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label for="ind_consultant_cnf_pwd">Confirm Password:</label>
                                <input type="password" class="form-control" id="ind_consultant_cnf_pwd" name="ind_consultant_cnf_pwd" placeholder="Confirm Password" onchange="confirmPassword('ind_consultant_pwd','ind_consultant_cnf_pwd','password_mismatch_industry_approval')">
                            </div>
                            <div style="height: auto;text-align: left;margin-left: 10px;margin-top: -10px;">
                                <h5 id="password_mismatch_industry_approval" style="color: red"></h5>
                            </div>
                        </div>

                        <button type="submit" id="ind_reg_approval_application" class="btn btn-success pull-right">Register</button>
                    </form>
                    <!--    INDUSTRY REGISTRATION FORM   -->
                    <form class="registrationForm" id="ind_reg_form" style="display: none;">
                        <h3 style="color: blue;">Industry Registration</h3>
                        <div class="form-group">
                            <label for="ind_name">Industry Name:</label>
                            <input type="text" class="form-control" id="ind_name" name="ind_name" placeholder="Enter Industry Name">
                        </div>
                        <div class="form-group">
                            <label for="ind_description">Industry Description:</label>
                            <textarea class="form-control" rows="5" id="ind_description" name="ind_description" placeholder="Industry Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="ind_type">Select Industry Type:</label>
                            <select id="ind_type" name="ind_type" class="form-control">
                                <option value="%">Select Industry Type</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ind_district">Select District:</label>
                            <select id="ind_district" name="ind_district" class="form-control">
                                <option value="%">Select District</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ind_address">Address:</label>
                            <textarea class="form-control" rows="5" id="ind_address" name="ind_address" placeholder="Enter Address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="ind_phone">Phone:</label>
                            <input type="text" class="form-control" id="ind_phone" name="ind_phone" placeholder="Enter Phone Number">
                        </div>
                        <hr style="border: dashed 1px green;"/>
                        <h4 style="color: blue;">Contact Person Detail</h4>
                        <div class="form-group">
                            <label for="ind_main_cp_name">Full Name:</label>
                            <input type="text" class="form-control" id="ind_main_cp_name" name="ind_main_cp_name" placeholder="Enter Contact Person Name">
                        </div>
                        <div class="form-group">
                            <label for="ind_main_cp_email">Email:</label>
                            <input type="text" class="form-control" id="ind_main_cp_email" name="ind_main_cp_email" placeholder="Enter Contact Person Email">
                        </div>
                        <div class="form-group">
                            <label for="ind_main_cp_designation">Designation:</label>
                            <input type="text" class="form-control" id="ind_main_cp_designation" name="ind_main_cp_designation" placeholder="Enter Designation">
                        </div>
                        <div class="form-group">
                            <label for="ind_main_cp_cnic">CNIC:</label>
                            <input type="text" class="form-control" id="ind_main_cp_cnic" name="ind_main_cp_cnic" placeholder="Enter CNIC">
                        </div>
                        <div class="form-group">
                            <label for="ind_cp_address">Address:</label>
                            <input type="text" class="form-control" id="ind_cp_address" name="ind_cp_address" placeholder="Enter Contact Person Address">
                        </div>
                        <div class="form-group">
                            <label for="ind_cp_phone">Phone:</label>
                            <input type="text" class="form-control" id="ind_cp_phone" name="ind_cp_phone" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="ind_username">User Name:</label>
                            <input type="text" class="form-control" id="ind_username" name="ind_username" placeholder="Set User Name">
                        </div>
                        <div class="form-group">
                            <label for="ind_password">Password:</label>
                            <input type="password" class="form-control" id="ind_password" name="ind_password" placeholder="Set Password">
                        </div>
                        <div class="form-group">
                            <label for="ind_cnf_password">Confirm Password:</label>
                            <input type="password" class="form-control" id="ind_cnf_password" name="ind_cnf_password" placeholder="Confirm Password" onchange="confirmPassword('ind_password','ind_cnf_password','password_mismatch_ind_new')">
                        </div>
                        <div style="height: auto;text-align: left;margin-left: 10px;margin-top: -10px;">
                            <h5 id="password_mismatch_ind_new" style="color: red"></h5>
                        </div>
                        <button type="submit" id="ind_reg_approval_application" class="btn btn-success pull-right">Register</button>
                    </form>
                    <div class="btn-group btn-group-inline" id="btn_consultant_reg_opt" data-toggle="buttons" style="text-align:center;display: none;padding: 0 0 0 25%;">
                        <label>Select Consultant Registration Option</label><br/>
                        <label class="btn">
                            <input type="radio" name='consultancy_reg_opt' value="individual_consultant">
                            <i class="fa fa-circle-o fa-2x"></i>
                            <i class="fa fa-dot-circle-o fa-2x"></i>
                            <span>Individual Consultant</span>
                        </label>
                        <label class="btn">
                            <input type="radio" name='consultancy_reg_opt' value="consultancy_firm">
                            <i class="fa fa-circle-o fa-2x"></i>
                            <i class="fa fa-dot-circle-o fa-2x"></i>
                            <span>Consultancy Firm</span>
                        </label>
                    </div>

                    <!--    CONSULTANT REGISTRATION -->
                    <form class="registrationForm" id="consultant_reg_form" style="display: none;">
                        <h3 style="color: blue;">Consultant Registration Form</h3>
                        <div class="form-group">
                            <label for="consultant_name">Full Name:</label>
                            <input type="text" class="form-control" id="consultant_name" name="consultant_name" placeholder="Enter Consultant Name">
                        </div>
                        <div class="form-group">
                            <label for="consultant_email">Email:</label>
                            <input type="email" class="form-control" id="consultant_email" name="consultant_email" placeholder="Enter Consultant Email">
                        </div>
                        <div class="form-group">
                            <label for="consultant_cnic">CNIC:</label>
                            <input type="text" class="form-control" id="consultant_cnic" name="consultant_cnic" placeholder="Enter CNIC">
                        </div>
                        <div class="form-group">
                            <label for="consultant_address">Address:</label>
                            <input type="text" class="form-control" id="consultant_address" name="consultant_address" placeholder="Enter Consultant Address">
                        </div>
                        <div class="form-group">
                            <label for="consultant_phone">Phone:</label>
                            <input type="text" class="form-control" id="consultant_phone" name="consultant_phone" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="consultant_ntn">NTN:</label>
                            <input type="text" class="form-control" id="consultant_ntn" name="consultant_ntn" placeholder="Enter NTN Number">
                        </div><div class="form-group">
                            <label for="consultant_pec">PEC:</label>
                            <input type="text" class="form-control" id="consultant_pec" name="consultant_pec" placeholder="Enter PEC">
                        </div>
                        <div class="form-group">
                            <label for="consultant_pwd">Password:</label>
                            <input type="password" class="form-control" id="consultant_pwd" name="consultant_pwd" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="consultant_cnf_pwd">Confirm Password:</label>
                            <input type="password" class="form-control" id="consultant_cnf_pwd" name="consultant_cnf_pwd" placeholder="Confirm Password" onchange="confirmPassword('consultant_pwd','consultant_cnf_pwd','password_mismatch_consultant')">
                        </div>
                        <div style="height: auto;text-align: left;margin-left: 10px;margin-top: -10px;">
                            <h5 id="password_mismatch_consultant" style="color: red"></h5>
                        </div>
                        <button type="submit" id="consultant_registration" class="btn btn-success pull-right">Register</button>
                    </form>
                    <!-- Consultant Firm Registration-->
                    <form class="registrationForm" id="consultant_firm_reg_form" style="display: none;">
                        <h3 style="color: blue;">Consultancy Firm Registration Form</h3>
                        <div class="form-group">
                            <label for="consultancy_firm_name">Full Name:</label>
                            <input type="text" class="form-control" id="consultancy_firm_name" name="consultancy_firm_name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="consultancy_firm_email">Email:</label>
                            <input type="email" class="form-control" id="consultancy_firm_email" name="consultancy_firm_email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="consultancy_firm_address">Address:</label>
                            <input type="text" class="form-control" id="consultancy_firm_address" name="consultancy_firm_address" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="consultancy_firm_phone">Phone:</label>
                            <input type="text" class="form-control" id="consultancy_firm_phone" name="consultancy_firm_phone" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="consultancy_firm_ntn">NTN:</label>
                            <input type="text" class="form-control" id="consultancy_firm_ntn" name="consultancy_firm_ntn" placeholder="Enter NTN Number">
                        </div><div class="form-group">
                            <label for="consultancy_firm_pec">PEC Registration Number:</label>
                            <input type="text" class="form-control" id="consultancy_firm_pec" name="consultancy_firm_pec" placeholder="Enter PEC Registration Number">
                        </div>
                        <div class="form-group">
                            <label for="consultancy_firm_pwd">Password:</label>
                            <input type="password" class="form-control" id="consultancy_firm_pwd" name="consultancy_firm_pwd" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="consultancy_firm_cnf_pwd">Confirm Password:</label>
                            <input type="password" class="form-control" id="consultancy_firm_cnf_pwd" name="consultancy_firm_cnf_pwd" placeholder="Confirm Password" onchange="confirmPassword('consultancy_firm_pwd','consultancy_firm_cnf_pwd','password_mismatch_consultancy_firm')">
                        </div>
                        <div style="height: auto;text-align: left;margin-left: 10px;margin-top: -10px;">
                            <h5 id="password_mismatch_consultancy_firm" style="color: red"></h5>
                        </div>
                        <button type="submit" id="consultancy_firm_registration" class="btn btn-success pull-right">Register</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Error Message Modal -->
    <div id="alert_modal" class="modal fade">
        <div class="modal-dialog" style="margin-top:10%;margin-left:30%;width:40%;height: 75%">
            <div class="modal-content">
                <div class="modal-header" style="padding: 5px;color:white;text-align: center;background-color: rgba(54, 117, 137, 0.94)">
                    <b id="modalTitle" style="font-size: 14px">User Guide</b>
                </div>
                <!-- dialog body -->
                <div id="modelBody" class="modal-body">
                </div>
                <!-- dialog buttons -->
                <div class="modal-footer" style="padding: 2px;"><button type="button" class="btn btn-primary"  data-dismiss="modal">OK</button></div>
            </div>
        </div>
    </div>
</div>
<script src="includes/lib/bootbox.min.js"></script>
<script src="includes/js/pemmsScript.js"></script>
<script src="includes/js/dropDownScript.js"></script>
<script src="includes/js/form_validations.js"></script>
<script src="includes/js/Registration_Logics.js"></script>
</body>
</html>