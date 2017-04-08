<?php
require_once './LoginCheckHeader.php';
check_teacher();
$stu = getTeacher();
$teacherClass = getTeacherActiveClassList($stu);
require_once './logout.php';
logoutHTML();
?>
<html>
	<head>
		<link href="../bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="../bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="../Js/jQueryLib.js"></script>
		<script src="../bootstrap-3.1.1-dist/js/bootstrap.js"></script>

	</head>
	<body>
		<div class="bg-info" style="margin-top: -16px; width: 100%; height: 100%; cursor: default">
			<div style="position: fixed; width: 100%; z-index: 12; opacity: 1" class=" bg-primary">
				<h3 class="text-center"> Welcome <strong class="lead" style="color: black;"><?php echo $stu['fn']; ?></strong> , Teacher's Profile </h3>
			</div>
			<br>
			<img src="<?php echo $stu['pic']; ?>" alt="User Picture" class="img-circle" width="250" height="250" style="position: absolute; top: 8vh; right: 2vw;">
			<br><br><br>
			<div class=" col-xs-offset-1">
				<table style="width: 70%; background-color: white; margin-top: 7vh;" class="table table-hover">
					<tr>
						<th class="text-successs bg-primary" width="40%">
							Name
						</th>
						<th class="bg-primary">
							E-mail
						</th>
						<th class="bg-primary">
							Class
						</th>
						<th class="bg-primary" width="11%">
							Options
						</th>
					</tr>
					<tr>
						<td>
							<?php echo $stu['fn']." ".$stu['ln']; ?>
						</td>
						<td>
							<?php echo $stu['mail']; ?>
						</td>
						<td>
							<?php
							if($teacherClass!=NULL){
								foreach($teacherClass as $thcl){
									echo $thcl['name'].", ";
								}
							}else{
								echo 'No Class';
							}
							?>
						</td>
						<td>
							<button   data-toggle="modal" data-target="#deleteModal" type="button" class="btn btn-sm deleteUsr btn-info" style="float: right;"><span class="glyphicon glyphicon-user" style="font-size: 16"></span></button>
							<button   data-toggle="modal" data-target="#deleteModal" type="button" class="btn btn-sm deleteUsr btn-default" style="float: right; margin-right: 5px;"><span class="glyphicon glyphicon-pencil" style="font-size: 16"></span></button>
						</td>
					</tr>
				</table>
			</div>
			<br><br><br><br><br><br>
			<div class=" ">
				<div class="col-xs-4 col-xs-offset-1">
					<table style="width: 95%; background-color: white" class=" table table-hover">
						<tr>
							<th class="text-successs bg-primary">
								Class
							</th>
							<th class="bg-primary"></th>
						</tr>
						<tr>
							<td width="80%" style="padding-left: 50px;" class=" lead">Report Cards</td>
							<td><button type="button" id="result" class="col-xs-12   btn btn-warning">Set</button></td>
						</tr>
						<tr>
							<td width="80%" style="padding-left: 50px;" class=" lead">Upload Materials </td>
							<td><button type="button" id="resource" class="col-xs-12   btn btn-warning">Upload</button></td>
						</tr>
					</table>
				</div>
				<div class="col-xs-4">
					<table style="width: 95%; background-color: white" class="col-xs-offset-0 table table-hover">
						<tr>
							<th class="text-successs bg-primary">
								Messages
							</th>
							<th class="bg-primary">&nbsp;</th>
						</tr>
						<tr>
							<td width="80%" style="padding-left: 50px;" class=" lead">Received Messages</td>
							<td><button type="button" id="inbox" class="col-xs-12   btn btn-warning">Inbox</button></td>
						</tr>
						<tr>
							<td width="80%" style="padding-left: 50px;" class=" lead">Compose Messages</td>
							<td><button type="button" id="sendPublic" class="col-xs-12   btn btn-warning">Send</button></td>
						</tr>
					</table>
				</div>
			</div>
			<br>
		</div>
		<script>
			function redirect(string){
				window.location.replace("http://elaonline.ir/Administration/" + string);
			}
			$(document).ready(function(){
				$("th").hover(function(){
					$("table tr th").css("backgroundColor", "#428bca");
				});
				$("#addNewUser").click(function(){
					redirect("adduser.php");
				});
				$("#editUsers").click(function(){
					redirect("edituser.php");
				});
				$("#addNewClass").click(function(){
					redirect("addclass.php");
				});
				$("#result").click(function(){
					redirect("result.php");
				});
				$("#inbox").click(function(){
					redirect("inbox.php");
				});
				$("#send").click(function(){
					redirect("send.php");
				});
				$("#resource").click(function(){
					redirect("resource.php");
				});
				$("#sendPublic").click(function(){
					redirect("publicSend.php");
				});
			});
		</script>
	</body>
</html>

