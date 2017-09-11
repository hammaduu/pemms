<?php

session_start();
header("Cache-Control: no-store, no-cache, must-revalidate");
//echo $_COOKIE['username'];
if(!isset($_COOKIE['username'])&& !isset($_COOKIE['password'])) {
    header("Location:index.php");
    exit;
}
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
	<!--<link rel="stylesheet" href="includes/css/tabsStyle.css">-->
	<!-- TS1387507089: Neon - Responsive Admin Template created by Laborator -->

    <script src="includes/js/pemmsScript.js"></script>
<style>
    .nav-pills >li.active >a,
    .nav-pills >li.active >a:hover,
    .nav-pills >li.active >a:focus
    {
        color: #FFFFFF;
        background-color: #2a20c1;
    }
</style>
</head>
<body class="page-body">

<div class="page-container sidebar-collapsed">	
	
<div class="sidebar-menu">
	
		<header class="logo-env">
		
		<!-- logo -->
		<div class="logo">
			<a href="index.php">
				<!--<img src="includes/assets/images/logo.png" alt="" />-->
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
										<!--<li id="search">
					<form method="get" action="#">
						<input type="text" name="q" class="search-input" placeholder="Search something..." />
						<button type="submit"><i class="entypo-search"></i></button>
					</form>
				</li>-->

        <li class="active">
            <a href="pemms.php"><i class="entypo-check"></i><span>Approval</span></a>
        </li>

        <li>
            <a href="complain.php"><i class="entypo-newspaper"></i><span>Complain</span></a>
        </li>

        <li>
            <a href="reporting.php"><i class="entypo-mail"></i><span>Reporting</span></a>
        </li>

        <li>
            <a href="registration.php"><i class="entypo-doc-text"></i><span>Registration</span></a>
        </li>

        <li>
            <a href="dashboard.php"><i class="entypo-gauge"></i><span>Dashboard</span></a>
        </li>
    </ul>


</div>
	<div class="main-content">

<div class="row">
	<!-- Profile Info and Notifications -->
	<div class="col-md-6 col-sm-8 clearfix">
		<ul class="user-info pull-left pull-none-xsm">

			<!--Profile Info-->
			<li class="profile-info dropdown"><!--add class "pull-right" if you want to place this from right-->

				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="includes/assets/images/if_user_male4_172628.png" alt="" class="img-circle" />
					<?php echo ucfirst($_SESSION['username']);?>
				</a>

				<ul class="dropdown-menu">

					<!--Reverse Caret-->
					<li class="caret"></li>

					<!--Profile sub-links-->
					<li>
						<a href="#">
							<i class="entypo-user"></i>
							Edit Profile
						</a>
					</li>

					<li>
						<a href="../../../neon-x/mailbox/main/login.php">
							<i class="entypo-mail"></i>
							Inbox
						</a>
					</li>

					<li>
						<a href="../../../neon-x/extra/calendar/login.php">
							<i class="entypo-calendar"></i>
							Calendar
						</a>
					</li>

					<li>
						<a href="#">
							<i class="entypo-clipboard"></i>
							Tasks
						</a>
					</li>
				</ul>
			</li>

		</ul>
<!--
		<ul class="user-info pull-left pull-right-xs pull-none-xsm">

			&lt;!&ndash; Raw Notifications &ndash;&gt;
			<li class="notifications dropdown">

				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="entypo-attention"></i>
					<span class="badge badge-info">6</span>
				</a>

				<ul class="dropdown-menu">
					<li class="top">
	<p class="small">
		<a href="#" class="pull-right">Mark all Read</a>
		You have <strong>3</strong> new notifications.
	</p>
</li>

<li>
	<ul class="dropdown-menu-list scroller">
		<li class="unread notification-success">
			<a href="#">
				<i class="entypo-user-add pull-right"></i>

				<span class="line">
					<strong>New user registered</strong>
				</span>

				<span class="line small">
					30 seconds ago
				</span>
			</a>
		</li>

		<li class="unread notification-secondary">
			<a href="#">
				<i class="entypo-heart pull-right"></i>

				<span class="line">
					<strong>Someone special liked this</strong>
				</span>

				<span class="line small">
					2 minutes ago
				</span>
			</a>
		</li>

		<li class="notification-primary">
			<a href="#">
				<i class="entypo-user pull-right"></i>

				<span class="line">
					<strong>Privacy settings have been changed</strong>
				</span>

				<span class="line small">
					3 hours ago
				</span>
			</a>
		</li>

		<li class="notification-danger">
			<a href="#">
				<i class="entypo-cancel-circled pull-right"></i>

				<span class="line">
					John cancelled the event
				</span>

				<span class="line small">
					9 hours ago
				</span>
			</a>
		</li>

		<li class="notification-info">
			<a href="#">
				<i class="entypo-info pull-right"></i>

				<span class="line">
					The server is status is stable
				</span>

				<span class="line small">
					yesterday at 10:30am
				</span>
			</a>
		</li>

		<li class="notification-warning">
			<a href="#">
				<i class="entypo-rss pull-right"></i>

				<span class="line">
					New comments waiting approval
				</span>

				<span class="line small">
					last week
				</span>
			</a>
		</li>
	</ul>
</li>

<li class="external">
	<a href="#">View all notifications</a>
</li>				</ul>

			</li>

			&lt;!&ndash; Message Notifications &ndash;&gt;
			<li class="notifications dropdown">

				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="entypo-mail"></i>
					<span class="badge badge-secondary">10</span>
				</a>

				<ul class="dropdown-menu">
					<li>
	<ul class="dropdown-menu-list scroller">
		<li class="active">
			<a href="#">
				<span class="image pull-right">
					<img src="includes/assets/images/thumb-1.png" alt="" class="img-circle" />
				</span>

				<span class="line">
					<strong>Luc Chartier</strong>
					- yesterday
				</span>

				<span class="line desc small">
					This ain’t our first item, it is the best of the rest.
				</span>
			</a>
		</li>

		<li class="active">
			<a href="#">
				<span class="image pull-right">
					<img src="includes/assets/images/thumb-2.png" alt="" class="img-circle" />
				</span>

				<span class="line">
					<strong>Salma Nyberg</strong>
					- 2 days ago
				</span>

				<span class="line desc small">
					Oh he decisively impression attachment friendship so if everything.
				</span>
			</a>
		</li>

		<li>
			<a href="#">
				<span class="image pull-right">
					<img src="includes/assets/images/thumb-3.png" alt="" class="img-circle" />
				</span>

				<span class="line">
					Hayden Cartwright
					- a week ago
				</span>

				<span class="line desc small">
					Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
				</span>
			</a>
		</li>

		<li>
			<a href="#">
				<span class="image pull-right">
					<img src="includes/assets/images/thumb-4.png" alt="" class="img-circle" />
				</span>

				<span class="line">
					Sandra Eberhardt
					- 16 days ago
				</span>

				<span class="line desc small">
					On so attention necessary at by provision otherwise existence direction.
				</span>
			</a>
		</li>
	</ul>
</li>

<li class="external">
	<a href="../../../neon-x/mailbox/main/login.php">All Messages</a>
</li>				</ul>

			</li>

			&lt;!&ndash; Task Notifications &ndash;&gt;
			<li class="notifications dropdown">

				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="entypo-list"></i>
					<span class="badge badge-warning">1</span>
				</a>

				<ul class="dropdown-menu">
					<li class="top">
	<p>You have 6 pending tasks</p>
</li>

<li>
	<ul class="dropdown-menu-list scroller">
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">Procurement</span>
					<span class="percent">27%</span>
				</span>

				<span class="progress">
					<span style="width: 27%;" class="progress-bar progress-bar-success">
						<span class="sr-only">27% Complete</span>
					</span>
				</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">App Development</span>
					<span class="percent">83%</span>
				</span>

				<span class="progress progress-striped">
					<span style="width: 83%;" class="progress-bar progress-bar-danger">
						<span class="sr-only">83% Complete</span>
					</span>
				</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">HTML Slicing</span>
					<span class="percent">91%</span>
				</span>

				<span class="progress">
					<span style="width: 91%;" class="progress-bar progress-bar-success">
						<span class="sr-only">91% Complete</span>
					</span>
				</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">Database Repair</span>
					<span class="percent">12%</span>
				</span>

				<span class="progress progress-striped">
					<span style="width: 12%;" class="progress-bar progress-bar-warning">
						<span class="sr-only">12% Complete</span>
					</span>
				</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">Backup Create Progress</span>
					<span class="percent">54%</span>
				</span>

				<span class="progress progress-striped">
					<span style="width: 54%;" class="progress-bar progress-bar-info">
						<span class="sr-only">54% Complete</span>
					</span>
				</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">Upgrade Progress</span>
					<span class="percent">17%</span>
				</span>

				<span class="progress progress-striped">
					<span style="width: 17%;" class="progress-bar progress-bar-important">
						<span class="sr-only">17% Complete</span>
					</span>
				</span>
			</a>
		</li>
	</ul>
</li>

<li class="external">
	<a href="#">See all tasks</a>
</li>				</ul>

			</li>

		</ul>-->
	</div>
	<!-- Raw Links -->
	<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		<ul class="list-inline links-list pull-right">
			<!--<li>
				<a href="#">Live Site</a>
			</li>

			<li class="sep"></li>

			<li>
				<a href="#" data-toggle="chat" data-animate="1" data-collapse-sidebar="1">
					<i class="entypo-chat"></i>
					Chat

					<span class="badge badge-success chat-notifications-badge is-hidden">0</span>
				</a>
			</li>

			<li class="sep"></li>
-->
			<li>
				<a href="index.php">
					Log Out <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
	</div>
</div>

<hr style="margin-top: 0.25%; margin-bottom: 1%;"/>
			<!--<ol class="breadcrumb bc-3">
						<li>
				<a href="../../../neon-x/dashboard/main/login.php"><i class="entypo-home"></i>Home</a>
			</li>
					<li>

							<a href="../../../neon-x/layouts/layout-api/login.php">Layouts</a>
					</li>
				<li class="active">

							<strong>Collapsed Sidebar</strong>
					</li>
					</ol>-->

        <div class="row">
            <div class="col-sm-3">

                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-docs"></i></div>
                    <div class="num" data-start="0" data-end="53" data-postfix="" data-duration="1500" data-delay="0">0</div>

                    <h3>Total</h3>
                    <p>applications so far..</p>
                </div>

            </div>

            <div class="col-sm-3">

                <div class="tile-stats tile-green">
                    <div class="icon"><i class="entypo-switch"></i></div>
                    <div class="num" data-start="0" data-end="35" data-postfix="" data-duration="1500" data-delay="600">0</div>

                    <h3>In Progress</h3>
                    <p>Applicatins so far..</p>
                </div>

            </div>

            <div class="col-sm-3">

                <div class="tile-stats tile-aqua">
                    <div class="icon"><i class="entypo-thumbs-up"></i></div>
                    <div class="num" data-start="0" data-end="20" data-postfix="" data-duration="1500" data-delay="1200">0</div>

                    <h3>Approved</h3>
                    <p>Applications so far..</p>
                </div>

            </div>

            <div class="col-sm-3">

                <div class="tile-stats tile-blue">
                    <div class="icon"><i class="entypo-calendar"></i></div>
                    <div class="num" data-start="0" data-end="53" data-postfix="" data-duration="1500" data-delay="1800">0</div>

                    <h3>Delayed</h3>
                    <p>Applications so far..</p>
                </div>

            </div>
        </div>
<!--<h2>Sidebar Collapsed</h2>-->
<br />
        <div class="row">
            <div id="exTab1" class="">
                <ul  class="nav nav-pills">
                    <li class="active">
                        <a  href="#all_application_tab_content" data-toggle="tab">All Applications</a>
                    </li>
                    <li><a href="#inprocess_application_tab_content" data-toggle="tab">In Process Application</a>
                    </li>
                </ul>

                <div class="tab-content clearfix" style="max-height: 200px; min-height: 200px; overflow: auto;">
                    <div class="tab-pane active" id="all_application_tab_content">
                        <div class="col-lg-12" style="max-height: 200px; overflow: auto;">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>ID</th>
                                    <th>State</th>
                                    <th>Date</th>
                                    <th>Validated</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Order 0</td>
                                    <td>0</td>
                                    <td>Processed</td>
                                    <td>Aug 29, 2017</td>
                                    <td>True</td>
                                </tr>
                                <tr>
                                    <td>Order 0</td>
                                    <td>0</td>
                                    <td>Processed</td>
                                    <td>Aug 29, 2017</td>
                                    <td>True</td>
                                </tr>
                                <tr>
                                    <td>Order 0</td>
                                    <td>0</td>
                                    <td>Processed</td>
                                    <td>Aug 29, 2017</td>
                                    <td>True</td>
                                </tr>
                                <tr>
                                    <td>Order 0</td>
                                    <td>0</td>
                                    <td>Processed</td>
                                    <td>Aug 29, 2017</td>
                                    <td>True</td>
                                </tr>
                                <tr>
                                    <td>Order 0</td>
                                    <td>0</td>
                                    <td>Processed</td>
                                    <td>Aug 29, 2017</td>
                                    <td>True</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="inprocess_application_tab_content">
                        <h1>In process applications</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="max-height: 300px; margin-top: 2%;">
            <div class="col-lg-4" style="max-height: 300px; overflow: auto;">
                <div class="panel panel-default">
                    <div class="panel-heading">Application History</div>
                    <div class="panel-body">
                        <button class="btn btn-primary btn-success col-lg-12" style="margin: 1%;">
                            Approved <i class="entypo-thumbs-up"></i>
                        </button>
                        <button class="btn btn-primary btn-danger col-lg-12" style="margin: 1%;">
                            Rejected <i class="entypo-minus-circled"></i>
                        </button>
                        <button class="btn btn-primary btn-green col-lg-12" style="margin: 1%;">
                            In Process <i class="entypo-progress-2"></i>
                        </button>
                        <button class="btn btn-primary btn-success col-lg-12" style="margin: 1%;">
                            Approved <i class="entypo-thumbs-up"></i>
                        </button>
                        <button class="btn btn-primary btn-success col-lg-12" style="margin: 1%;">
                            Approved <i class="entypo-thumbs-up"></i>
                        </button>
                        <button class="btn btn-primary btn-info col-lg-12" style="margin: 1%;">
                            Need More Info <i class="entypo-reply"></i>
                        </button>
                        <button class="btn btn-primary btn-danger col-lg-12" style="margin: 1%;">
                            Rejected <i class="entypo-minus-circled"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8" style="max-height: 300px; overflow: auto;">
                <div class="panel panel-default">
                    <div class="panel-heading">Actions Available</div>
                    <div class="panel-body">
                        <div class="form-group" id="consultant_selection">
                            <label for="app_action_dicision">Select Decision:</label>
                            <select id="app_action_dicision" name="app_action_dicision" class="form-control">
                                <option value="%">Select Decision</option>
                            </select>
                        </div>
                        <div class="form-group" id="app_action_comment">
                            <textarea class="form-control" rows="7" id="app_action_comment_area" name="app_action_comment_area" placeholder="Enter Laboratory Address"></textarea>
                        </div>
                        <div>
                            <form id="form" action="includes/php/upload-image-ajax.php" method="post" enctype="multipart/form-data">
                                <input class="col-lg-4 btn btn-blue" id="uploadImage" type="file" accept="image/*" name="image" />
                                <input class="col-lg-4 btn btn-info" id="button" type="submit" value="Upload" style="padding: 1%; margin-left: 2%;">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer -->
<!--<footer class="main">
	
		&lt;!&ndash;<div class="pull-right">
		<a href="http://themeforest.net/item/neon-bootstrap-admin-theme/6434477" target="_blank"><strong>Purchase this theme for $21</strong></a>
	</div>&ndash;&gt;
		
	&copy; 2017 <strong>EPD</strong> Developed by  <a href="http://www.urbanunit.gov.pk" target="_blank">The Urban Unit</a>
	
</footer>-->	</div>
	
	
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
<!-- Modal -->
<div class="modal" id="file_upload_success" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>File Uploaded Successfully.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
</body>
</html>