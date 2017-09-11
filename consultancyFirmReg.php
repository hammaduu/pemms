<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 9/9/2017
 * Time: 10:56 AM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 9/9/2017
 * Time: 10:56 AM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 9/9/2017
 * Time: 10:55 AM
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
        #consultancy_firm_address:focus{
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

                    <li>
                        <a href="industryRegistration.php"><span>Industry Registration</span></a>
                    </li>

                    <li>
                        <a href="approvalApplication.php"><span>Approval Application Form</span></a>
                    </li>

                    <li class="opened active">
                        <a href="consultantRegistration.php"><span>Consultant Registration</span></a>
                        <ul>
                            <li>
                                <a href="individualConsultantReg.php">Individual Consultant Registration</a>
                            </li>
                            <li class="active">
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
            <form class="registrationForm" id="consultant_firm_reg_form" style="color: blueviolet; font-family: sans-serif; font-weight: bold;">
                <div class="col-lg-12" style="text-align: center;">
                    <h3 style="color: blue; font-family: initial; font-style: italic; font-weight: bold;">Consultancy Firm Registration Form</h3>
                </div>
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
                    <textarea class="form-control" rows="5" id="consultancy_firm_address" name="consultancy_firm_address" placeholder="Enter Address"></textarea>
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
                    <input type="password" class="form-control" id="consultancy_firm_cnf_pwd" name="consultancy_firm_cnf_pwd" placeholder="Confirm Password" onchange="confirmPassword('ind_password','ind_cnf_password','password_mismatch_ind_new')">
                </div>
                <div style="height: auto;text-align: left;margin-left: 10px;margin-top: -10px;">
                    <h5 id="password_mismatch_ind_new" style="color: red"></h5>
                </div>
                <button type="submit" id="consultancy_firm_registration" class="btn btn-success pull-right">Register</button>
            </form>
        </div>



        <div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">

            <div class="chat-inner">


                <h2 class="chat-header">
                    <a href="#" class="chat-close" data-animate="1"><i class="entypo-cancel"></i></a>

                    <i class="entypo-users"></i>
                    Chat
                    <span class="badge badge-success is-hidden">0</span>
                </h2>


                <div class="chat-group" id="group-1">
                    <strong>Favorites</strong>

                    <a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
                    <a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
                    <a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
                    <a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
                    <a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
                </div>


                <div class="chat-group" id="group-2">
                    <strong>Work</strong>

                    <a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
                    <a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
                    <a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
                </div>


                <div class="chat-group" id="group-3">
                    <strong>Social</strong>

                    <a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
                    <a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
                    <a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
                    <a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
                </div>

            </div>

            <!-- conversation template -->
            <div class="chat-conversation">

                <div class="conversation-header">
                    <a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>

                    <span class="user-status"></span>
                    <span class="display-name"></span>
                    <small></small>
                </div>

                <ul class="conversation-body">
                </ul>

                <div class="chat-textarea">
                    <textarea class="form-control autogrow" placeholder="Type your message"></textarea>
                </div>

            </div>

        </div>


        <!-- Chat Histories -->
        <ul class="chat-history" id="sample_history">
            <li>
                <span class="user">Art Ramadani</span>
                <p>Are you here?</p>
                <span class="time">09:00</span>
            </li>

            <li class="opponent">
                <span class="user">Catherine J. Watkins</span>
                <p>This message is pre-queued.</p>
                <span class="time">09:25</span>
            </li>

            <li class="opponent">
                <span class="user">Catherine J. Watkins</span>
                <p>Whohoo!</p>
                <span class="time">09:26</span>
            </li>

            <li class="opponent unread">
                <span class="user">Catherine J. Watkins</span>
                <p>Do you like it?</p>
                <span class="time">09:27</span>
            </li>
        </ul>




        <!-- Chat Histories -->
        <ul class="chat-history" id="sample_history_2">
            <li class="opponent unread">
                <span class="user">Daniel A. Pena</span>
                <p>I am going out.</p>
                <span class="time">08:21</span>
            </li>

            <li class="opponent unread">
                <span class="user">Daniel A. Pena</span>
                <p>Call me when you see this message.</p>
                <span class="time">08:27</span>
            </li>
        </ul></div>




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

    </script>

    <script src="includes/lib/bootbox.min.js"></script>
    <script src="includes/js/pemmsScript.js"></script>
    <script src="includes/js/dropDownScript.js"></script>
    <script src="includes/js/form_validations.js"></script>
    <script src="includes/js/Registration_Logics.js"></script>
</body>
</html>