<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$un=$_SESSION["user"];
if(empty($_SESSION["user"]))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>BSS Based On Audio Frequency</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" type="text/css" href="jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="jquery.dataTables.js"></script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<script>
$(document).ready( function () {
    $('#table-breakpoint').DataTable();
} );
</script>
<style>
#btn
{
margin-left:1100px;
}
</style>

</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
				  		 <!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
							<ul class="gn-menu agile_menu_drop">
								<li><a href="dashboard.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
								<li><a href="change_password.php"> <i class="fa fa-file-text-o"></i> Change Password</a></li>
								<li>
									<a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Audios <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
										 <li class="mini_list_agile"><a href="Addaudios.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Add Audios</a></li>
										<li class="mini_list_agile"><a href="Viewaudios.php"><i class="fa fa-caret-right" aria-hidden="true"></i> View audios</a></li>
									
									</ul>
								</li>
								<li>
								<a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Users <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="gn-submenu">
								<li class="mini_list_agile"><a href="Apply_Users.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Applied Users</a></li>
								</ul>
								</li>
								<!--<li>
									<a href="#"> <i class="fa fa-file-text-o" aria-hidden="true"></i>Forms <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="input.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Inputs</a></li>
										<li class="mini_list_w3"><a href="validation.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Validation</a></li>
									</ul>
								</li>
								<li><a href="table.html"> <i class="fa fa-table" aria-hidden="true"></i> Tables</a></li>
								<li><a href="#"><i class="fa fa-list" aria-hidden="true"></i>Short Codes <i class="fa fa-angle-down" aria-hidden="true"> </i></a> 
								     	<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="typo.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Typography</a></li>
										<li class="mini_list_w3"><a href="icons.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Icons</a></li>
										
									</ul>
								</li>
								
								<li><a href="charts.html"> <i class="fa fa-line-chart" aria-hidden="true"></i> Charts</a></li>
								<li><a href="maps.html"><i class="fa fa-map-o" aria-hidden="true"></i> Maps</a></li>
								<li class="page">
									<a href="#"><i class="fa fa-files-o" aria-hidden="true"></i> Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									 <ul class="gn-submenu">
						
									  <li class="mini_list_agile"> <a href="signin.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Sign In</a></li>
									   <li class="mini_list_w3"><a href="signup.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Sign Up</a></li>
									   <li class="mini_list_agile error"><a href="404.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Error 404 </a></li>
	
										<li class="mini_list_w3_line"><a href="calendar.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Calendar</a></li>
									</ul>
								</li>
								<li>
									<a href="#"> <i class="fa fa-suitcase" aria-hidden="true"></i>More <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="faq.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Faq</a></li>
										<li class="mini_list_w3"><a href="blank.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Blank Page</a></li>
									</ul>
								</li>-->
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- //nav_agile_w3l -->
                <li class="second logo"><h1><a href=""><i class="fa fa-graduation-cap" aria-hidden="true"></i>Admin</a></h1></li>
					<li class="second admin-pic">
				       <ul class="top_dp_agile">
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">
											<h4><?php echo $un?></h4>
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
									
						</ul>
				</li>
				
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="">Home</a><span>«</span></li>
									<li>Users <span>«</span></li>
									<li>Applied Users</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					<!--<a href="excel1.php" id="btn" class="btn btn-danger">EXCEL</a>-->
					  <h2 class="w3_inner_tittle">Applications</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 		
								<?php
								require("connection.php");
								$res=$con->query("select * from `tb_users`");
								$count=$res->num_rows;
								if($count>0)
								{
									?>
										<table id="table-breakpoint">
										<thead>
										<tr>
										<th>Name</th>
										<th>Email Id</th>
										<th>Phone Number</th>
										</tr>
										</thead>
										<?php
										while($row=$res->fetch_assoc())
										{
											?>
										
											<tr>
											<td><?php echo $row["Name"];?></td>
											<td><?php echo $row["Email"];?></td>
											<td><?php echo $row["PhoneNumber"];?></td>
											<!--<td><a href="approve.php?uid=<?php echo $row["User_Id"];?>">Approve</a></td>
											<td><a href="approve.php?app=<?php echo $row["User_Id"];?>">Reject</a></td>-->
											</tr>
						
											<?php
										}
								} 
								        ?>
								        </table>
								       
								       
								    </div>
								</div>
					</div>
				</div>
							
						
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2025 Admin. All Rights Reserved | Design by BSS Based On Audio Frequency </p>
</div>	
<!--copy rights end here-->
<!-- js -->

         <!--<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>-->
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
<!-- tables -->

<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>