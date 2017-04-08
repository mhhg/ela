<?php
require_once './logout.php';
require_once './LoginCheckHeader.php';
check_admin();
logoutHTML();
?>
<html>
	<head>
		<title>Admin</title>
		<meta charset="UTF-8">
		<link href="../bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="../bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="../Js/jQueryLib.js"></script>
		<script src="../bootstrap-3.1.1-dist/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="bg-info" style="margin-top: -16px; cursor: default">
			<div style="position: fixed; width: 100%; z-index: 12; opacity: 1" class=" bg-primary">
				<h3 class="text-center"> Welcome, ELA Administration Page </h3>
			</div>
			<br>
			<table style="width: 80%; background-color: white; margin-top: 7vh;" class="col-xs-offset-1 table table-hover">
				<tr>
					<th class="text-successs bg-primary">Users</th>
					<th class="bg-primary"></th>
				</tr>
				<tr>					
					<td width="80%" style="padding-left: 50px;" class="lead"> Add a new user, a Teacher or a Student</td>
					<td><button type="button" id="addNewUser" class="col-xs-12   btn btn-warning">Add</button></td>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class="lead"> Edit users' personal information </td>
					<td><button type="button" id="editUsers" class="col-xs-12   btn btn-warning">Edit</button></td>
				</tr>
			</table>
			<br>
			<table style="width: 80%; background-color: white" class="col-xs-offset-1 table table-hover">
				<tr>
					<th class="text-successs bg-primary">Class</th>
					<th class="bg-primary"></th>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> Add a new class</td>
					<td><button type="button" id="addNewClass" class="col-xs-12   btn btn-warning">Add</button></td>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> Edit classes </td>
					<td><button id='Edit-Class' type="button" class="col-xs-12   btn btn-warning">Edit</button></td>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> Report Cards </td>
					<td><button type="button" id="viewResult" class="col-xs-12   btn btn-warning">Edit</button></td>
				</tr>
			</table>
			<br>
			<table style="width: 80%; background-color: white" class="col-xs-offset-1 table table-hover">
				<tr>
					<th class="text-successs bg-primary">Messages</th>
					<th class="bg-primary">&nbsp;</th>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> New messages</td>
					<td><button type="button" id="viewMessages" class="col-xs-12    btn btn-warning">View</button></td>
				</tr>
			</table>
			<table style="width: 80%; background-color: white" class="col-xs-offset-1 table table-hover">
				<tr>
					<th class="text-successs bg-primary">Forms</th>
					<th class="bg-primary"></th>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> Create form</td>
					<td><button type="button" onclick="redirect('form.php');" class="col-xs-12   btn btn-warning">Create</button></td>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> Attach a form to class </td>
					<td><button type="button" onclick="redirect('attachform.php');" class="col-xs-12   btn btn-warning">Attach</button></td>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> Form statistical analysis </td>
					<td><button type="button"  class="col-xs-12   btn btn-warning">analysis</button></td>
				</tr>
			</table>
			<table style="width: 80%; background-color: white" class="col-xs-offset-1 table table-hover">
				<tr>
					<th class="text-successs bg-primary">Uploads</th>
					<th class="bg-primary">&nbsp;</th>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> Materials</td>
					<td><button type="button" id="viewMessages" class="col-xs-12    btn btn-warning">Edit</button></td>
				</tr>
			</table>
			<br>
			<table style="width: 80%; background-color: white" class="col-xs-offset-1 table table-hover">
				<tr>
					<th class="text-successs bg-primary">Content Management System
					</th>
					<th class="bg-primary"></th>
					<th class="bg-primary"></th>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> Home</td>
					<td><button type="button" class="col-xs-12   btn btn-warning">Slider</button></td>
					<td><button type="button" class="col-xs-12   btn btn-warning">Words </button></td>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> About</td>
					<td><button type="button" class="col-xs-12   btn btn-warning">Text</button></td>
					<td><button type="button" class="col-xs-12   btn btn-warning">Picture</button></td>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> Courses</td>
					<td><button type="button" class="col-xs-12   btn btn-warning">Text</button></td>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> Tests</td>
					<td><button type="button" id="testsbtn" class="col-xs-12   btn btn-warning">Tests</button></td>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> FAQ</td>
					<td><button type="button" class="col-xs-12   btn btn-warning">Change</button></td>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> News</td>
					<td><button type="button" class="col-xs-12   btn btn-warning">Change</button></td>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> Business</td>
					<td><button type="button" class="col-xs-12   btn btn-warning">Change</button></td>
				</tr>
				<tr>
					<td width="80%" style="padding-left: 50px;" class=" lead"> Contact Us</td>
					<td><button type="button" class="col-xs-12   btn btn-warning">Change</button></td>
				</tr>
			</table>
			<br>

			<br>
		</div>
		<script>

			$(document).ready(function() {
				$("th").hover(function() {
					$("table tr th").css("backgroundColor", "#428bca");
				});
				$("#addNewUser").click(function() {

					redirect("adduser.php");
				});
				$("#editUsers").click(function() {
					redirect("edituser.php");
				});
				$("#addNewClass").click(function() {
					redirect("addclass.php");
				});
				$("#backBtn").click(function() {

				});
				$("#viewMessages").click(function() {
					redirect("viewMessages.php");
				});
				$("#viewResult").click(function() {
					redirect("adminResult.php");
				});
				$("#Edit-Class").click(function() {
					redirect("Edit-Class.php");
				});
				$("#testsbtn").click(function() {
					redirect("tests.php");
				});
			})
		</script>
	</body>
</html>