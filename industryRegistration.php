<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 9/9/2017
 * Time: 10:54 AM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 9/9/2017
 * Time: 10:50 AM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 9/9/2017
 * Time: 9:36 AM
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="Laborator.co" />

    <title>PEMMS</title>

    <link rel="stylesheet" href="includes/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
    <link rel="stylesheet" href="includes/assets/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
    <link rel="stylesheet" href="includes/assets/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic"  id="style-resource-4">
    <link rel="stylesheet" href="includes/assets/css/neon.css"  id="style-resource-5">
    <link rel="stylesheet" href="includes/assets/css/custom.css"  id="style-resource-6">

    <script src="includes/assets/js/jquery-1.10.2.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- TS1387507089: Neon - Responsive Admin Template created by Laborator -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">    <!-- TS1387507089: Neon - Responsive Admin Template created by Laborator -->
    <link rel="stylesheet" href="includes/css/labelRadioStyle.css" />
    <style>
        input[type=text]:focus, input[type=email]:focus, select:focus, input[type=password]:focus,
        #ind_address:focus, #ind_description:focus {
            box-shadow: 0 0 3px rgba(81, 203, 238, 1);
            border: 1px solid rgb(34, 113, 32);
            color: #000;
        }
    </style>
</head>
<body class="page-body">

<div class="page-container">

    <div class="sidebar-menu">

        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="index.php">
                    <h3 style="color: #ffffff;">PEMMS</h3>
                </a>
            </div>

            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>


            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

        </header>


        <ul id="main-menu" class="">
            <li>
                <a href="index.php"><i class="entypo-layout"></i><span>Log In</span></a>
            </li>

            <li class="opened active">
                <a href="index.php"><i class="entypo-newspaper"></i><span>Registration</span></a>

                <ul>
                    <li>
                        <a href="labRegistration.php"><span>Lab Registration</span></a>
                    </li>

                    <li class="active">
                        <a href="industryRegistration.php"><span>Industry Registration</span></a>
                    </li>

                    <li>
                        <a href="approvalApplication.php"><span>Approval Application Form</span></a>
                    </li>

                    <li>
                        <a href="consultantRegistration.php"><span>Consultant Registration</span></a>
                        <ul>
                            <li>
                                <a href="individualConsultantReg.php">Individual Consultant Registration</a>
                            </li>
                            <li>
                                <a href="consultancyFirmReg.php">Consultancy Firm Registration</a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </li>

        </ul>


    </div>
    <div class="main-content" style="background-color: #91e291;">

        <div class="row">

            <!-- Profile Info and Notifications -->
            <div class="col-lg-12 col-md-12 col-sm-12 clearfix" >
                <h1>Environment Protection Department</h1>
                <!--<a href="https://placeholder.com"><img src="http://via.placeholder.com/1244x100"></a>-->


            </div>

        </div>

        <hr />

        <div class="col-lg-12">
            <form class="registrationForm" id="ind_reg_form" style="color: blueviolet; font-family: sans-serif; font-weight: bold;">
                <div class="col-lg-12" style="text-align: center;">
                    <h3 style="color: blue; font-family: initial; font-style: italic; font-weight: bold;">Industry Registration</h3>
                </div>
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
                    <input type="password" class="form-control" id="ind_cnf_password" name="ind_cnf_password" placeholder="Confirm Password"
                           onchange="confirmPassword('ind_password','ind_cnf_password','password_mismatch_ind_new')">
                </div>
                <div style="height: auto;text-align: left;margin-left: 10px;margin-top: -10px;">
                    <h5 id="password_mismatch_ind_new" style="color: red"></h5>
                </div>
                <button type="submit" id="ind_reg_approval_application" class="btn btn-success pull-right">Register</button>
            </form>
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

    <script src="includes/assets/js/gsap/main-gsap.js" id="script-resource-1"></script>
    <script src="includes/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="includes/assets/js/bootstrap.min.js" id="script-resource-3"></script>
    <script src="includes/assets/js/joinable.js" id="script-resource-4"></script>
    <script src="includes/assets/js/resizeable.js" id="script-resource-5"></script>
    <script src="includes/assets/js/neon-api.js" id="script-resource-6"></script>
    <script src="includes/assets/js/neon-chat.js" id="script-resource-7"></script>
    <script src="includes/assets/js/neon-custom.js" id="script-resource-8"></script>
    <script src="includes/assets/js/neon-demo.js" id="script-resource-9"></script>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-28991003-3']);
        _gaq.push(['_setDomainName', 'laborator.co']);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
        $(document).ready(function(){
            getIndustryType('ind_type');
            getDistrictsList('ind_district');
        });

    </script>
    <script src="includes/lib/bootbox.min.js"></script>
    <script src="includes/js/pemmsScript.js"></script>
    <script src="includes/js/dropDownScript.js"></script>
    <script src="includes/js/form_validations.js"></script>
    <script src="includes/js/Registration_Logics.js"></script>
</body>
</html>