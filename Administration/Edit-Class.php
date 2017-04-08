<?php
require_once './LoginCheckHeader.php';
if(isset($_GET['NewClassName']) || isset($_GET['NewClassTeacherId']) || isset($_GET['getAllStuList']) || isset($_GET['op']) || isset($_GET['getStuList'])){
check_admin('false');
}else{
check_admin();
}
require_once './db_definition.php';
define("DB", "elaonlin_eladb");
define("TABLE", "users");
$class = getAllClassByStatus(1);
setTeachers();
$msgvisible = "none";
$msg = "";
$incVis = "hidden";
$cls = "has-error";
$fileErr = "hidden";
$filename = "";
$filest = "";
$stmsg = ""; //status message
if(isset($_GET['deactivatebtn'])){
	global $class;
	$clid = $_GET['deactivatebtn'];
	$msgvisible = "";
	$stmsg = "Deactiveation class: ";
	deativateClass($clid, 2) == 1 ? $stmsg .= "OK" : $stmsg .= "Problem";
	$class = getAllClassByStatus(1);
	setTeachers();
}else if(isset($_GET['activatebtn'])){
	global $class;
	$clid = $_GET['activatebtn'];
	$msgvisible = "";
	$stmsg = "Deactiveation class: ";
	deativateClass($clid, 1) == 1 ? $stmsg .= "OK" : $stmsg .= "Problem";
	$class = getAllClassByStatus(1);
	setTeachers();
}else if(isset($_GET['getStuList'])){
	$con = mysql_connect(HOST, USER, PASSWORD, DBCL);
	mysql_select_db(DBCL);
	$tb = $_GET['id'] . "class" . $_GET['name'];
	$query = "select id, fname, lname from $tb ;";
//	$query = "select * from $tb ;";
	$result = mysql_query($query, $con);
	$stu = array();
	if(gettype($result) === 'resource'){
		while($row = mysql_fetch_array($result)){
			$stu[$row['id']]['id'] = $row['id'];
			$stu[$row['id']]['fn'] = $row['fname'];
			$stu[$row['id']]['ln'] = $row['lname'];
		}
	}else{
		$stu = 'undefined';
	}
	print_r(json_encode($stu));
	mysql_close($con);
	exit();
}else if(isset($_GET['getAllStuList'])){
	$con = mysql_connect(HOST, USER, PASSWORD, DB);
	mysql_select_db(DB);
	$query = "select id, fname, lname from `users` where role='0' ;";
//	$query = "select * from $tb ;";
	$result = mysql_query($query, $con);
	$stu = array();
	if(gettype($result) === 'resource'){
		while($row = mysql_fetch_array($result)){
			$stu[$row['id']]['id'] = $row['id'];
			$stu[$row['id']]['fn'] = $row['fname'];
			$stu[$row['id']]['ln'] = $row['lname'];
		}
	}else{
		$stu = 'undefined';
	}
	print_r(json_encode($stu));
	mysql_close($con);
	exit();
}
if(isset($_GET['NewClassName']) || isset($_GET['NewClassTeacherId'])){
	$NewClassName = $_GET['NewClassName'];
	$NewClassTeacherID = $_GET['NewClassTeacherId'];
	$con = mysql_connect(HOST, USER, PASSWORD, DBCL);
	$clid = $_GET['clid'];
	mysql_select_db(DBCL);
	$query = "UPDATE `clslist` SET ";
	if(isset($_GET['NewClassName'])){
		if(isset($_GET['NewClassTeacherId'])){
			$query .= "`clslist`.`name` = '$NewClassName', `clslist`.`teacher` = '$NewClassTeacherID' WHERE `clslist`.`id`='$clid';";
		}else{
			$query .= "`clslist`.`name` = '$NewClassName' WHERE `clslist`.`id`='$clid';";
		}
	}else if(isset($_GET['NewClassTeacherId'])){
		$query .= "`clslist`.`teacher` = '$NewClassTeacherID' WHERE `clslist`.`id`='$clid';";
	}
	$result = mysql_query($query, $con);
	if($result == 1){
		echo '1';
	}else{
		echo '0' . mysql_error();
	}
	mysql_close($con);
	exit();
}
function deativateClass($id, $status){
	$con = mysql_connect(HOST, USER, PASSWORD, DBCL);
	mysql_select_db(DBCL);
	$query = "UPDATE `clslist` SET  `status` = '$status' WHERE  `clslist`.`id` ='$id';";
	$result = mysql_query($query, $con);
	mysql_close($con);
	return $result;
}
if(isset($_GET['oksubmit'])){
	$msgvisible = "none";
}
if(isset($_GET['op'])){
	$info = (object)$_GET;
	if($info->op === 'd'){
		delStu($info);
	}else{
		addStu($info);
	}
	exit('done');
}
function addStu($info){
	$con = mysql_connect(HOST, USER, PASSWORD);
	mysql_select_db(DBCL);
	$r1 = mysql_query("INSERT INTO `$info->cltb` values('$info->stid', '$info->stfn', '$info->stln', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '-1' , '1');", $con);
	if($r1 === False){
		return 'Error Adding User into class.';
	}
	mysql_select_db(DB);
	$r2 = mysql_query("UPDATE `users` SET  `classid` = '" . getEncodedClass($info) . "' WHERE  `users`.`id` ='$info->stid';", $con);
	mysql_close($con);
	if($r2 === False){
		return 'Error Adding User Class in Users database.';
	}
	return 'ok';
}
function getEncodedClass($info){
	$ans;
	$con = mysql_connect(HOST, USER, PASSWORD, DB);
	$query = "Select * from users WHERE  `users`.`id` ='$info->stid';";
	mysql_select_db(DB);
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if($row['classid'] == NULL){
		$clsidArr = array();
		array_push($clsidArr, $info->clid);
		$ans = json_encode($clsidArr);
	}else{
		$clsidArr = array();
		$clsidArr = json_decode($row['classid']);
		array_push($clsidArr, $info->clid);
		$ans = json_encode($clsidArr);
	}
	mysql_close($con);
	return $ans;
}
function delStu($info){
	$con = mysql_connect(HOST, USER, PASSWORD);
	mysql_select_db(DBCL);
	$r1 = mysql_query("DELETE from `$info->cltb` WHERE  `$info->cltb`.`id` ='$info->stid';", $con);
	if($r1 === False){
		return 'Error Removing User From class.';
	}
	mysql_select_db(DB);
	$info->stucl = mysql_fetch_object(mysql_query("Select `classid` from `users` WHERE  `users`.`id` ='$info->stid' limit 1;", $con));
	$info->stucl = json_decode($info->stucl->classid);
	unset($info->stucl[array_search($info->clid, $info->stucl)]);
	$info->stucl = json_encode($info->stucl);
	$r2 = mysql_query("UPDATE `users` SET  `classid` = '$info->stucl' WHERE  `users`.`id` ='$info->stid';", $con);
	mysql_close($con);
	if($r2 === False){
		return 'Error Cleaning User Class in Users database.';
	}
	return 'ok';
}
require_once './logout.php';
require_once './back.php';
logoutHTML();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Class</title>
		<meta charset="UTF-8">
		<style>
			.panel-title{
				font-size: 14px;
			}
			.deleteModalBody ol span{
				width: 140px !important;
				display: inline-table !important;
			}
			.head .id{
				padding-left: 20px !important;
			}
			.head{
				width: 140px ;
				display: inline-table !important;
/*				padding-top: 10px !important;
				padding-bottom: 10px !important;*/
				margin: 0px 4% 0px 4% !important; 
				color: red;
			}
			.lidt{
				width: 140px ;
				display: inline-table !important;
/*				padding-top: 10px !important;
				padding-bottom: 10px !important;*/
				margin: 0px 4% 0px 4% !important; 
			}
			.deleteModalBody li{
				padding-left: 20px;
				margin-left: 0px;
			}
			.deleteModalBody ol li:hover{
				background: whitesmoke;
				
				cursor: pointer;
			}
			.deleteModalBody li{
				margin-left: 20px;
			}
			
			.deleteModalBody ol{
				padding-left:  15px;
			}
			.delstu{
				display: inline;
				font-size: 14px;
				width:20px;
			}
			.btndel{
				display: inline-block;
				width: 25px;
				text-align: center;
				padding: 4px !important;
				margin: 1px 0px 1px 0px;
			}
		</style>
	</head>
	<body>
		<div id="blackbk" style="display: none; position: fixed; top: 4.8vh; left: 0px; width: 100%; height: 100%; opacity: .8; background-color: black; z-index: 10">
			<div id="msg" style=" background-color: white; height: 250px; opacity: 1; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;" class="col-xs-offset-6 col-xs-4">
				<h5 class="bg-info" >Server Message: User Added Successfully</h5> <?php echo $stmsg; ?>
				<br><br>
				<input type="button" onclick="$('#blackbk').css('display', 'none');" style="position: absolute; top: 200px; right: 20px;" class="btn btn-success col-xs-2" value="OK">
				<script>
					$("#oksub").focus();</script>
			</div>
		</div>
		<div class="bg-info" style="margin-top: -16px;">
			<div style="position: fixed; width: 100%; z-index: 12; opacity: 1;" class=" bg-primary">
				<h3 class="text-center"> Edit Class </h3>
			</div>
			<form class="bg-info form-inline col-xs-12 " onsubmit="return validate()" action="Edit-Class.php" method="get" role="form">
				<div id="errgroup" class="form-group  <?php echo "$cls"; ?>">
					<div id="err" class="col-sm-10 col-sm-offset-2 help-block  <?php echo "$incVis"; ?>">
						Class name is required. Make sure you entered, then try again.
					</div>
					<div id="errstu" class="col-sm-10 col-sm-offset-2 help-block  <?php echo "$incVis"; ?>">
						No Student Selected.
					</div>
				</div>
				<br><br><br><br>
				<div class="row">
					<div class="panel-group col-xs-8" id="accordion">
						<label for="accordion" class="col-xs-offset-1 control-label">Active Class</label>
						<br>
						<table style="width: 100%; background-color: white; cursor: pointer;" class=" table-condensed">
							<tr>
								<th class="text-center text-successs bg-primary" style="width: 3%;">#</th>
								<th class="col-xs-2 text-center ext-successs bg-primary" style="width: 7%;">ID</th>
								<th class="col-xs-2 ext-successs text-center bg-primary">Name</th>
								<th class="col-xs-2 ext-successs text-center bg-primary">Teacher</th>
								<th class="col-xs-2 ext-successs text-center bg-primary">Status</th>
								<th class="col-xs-2 ext-successs text-center bg-primary">Option</th>
							</tr>
						</table>
						<?php
						$index = 1;
						foreach($class as $cl){
							?>
							<div class="panel panel-default" style="margin-top: 0px;" <?php echo 'id="'.$cl['id'].'"';?>>
								<div class="panel-heading" style="background-image: none; background-color: white; height: 30px; padding-top: 4px;">
									<div class="panel-title">
										<div class="col-xs-1" style="width: 7%; margin-left: -17px"><strong><?php echo $index; ?></strong></div>
										<div class="First_Name col-xs-1 text-center" ><?php echo $cl['id']; ?></div>
										<div class="Last_Name col-xs-2 text-center" ><?php echo $cl['name']; ?></div>
										<div class="Id col-xs-3 text-center" ><?php
											$name = getUserNameById($cl['teacher']);
											echo $name['fn'] . " " . $name['ln'];
											?>
										</div>
										<div class="current-teacher-id hidden">
											<?php echo $cl['teacher']; ?>
										</div>
										<div class="Password col-xs-3 text-center " ><span class="badge" style="font-size: 14px;"><?php echo $cl['status'] == 1 ? "Active" : "Deactive"; ?></span></div>
										<button   data-toggle="modal" data-target="#deleteModal" type="button" class="btn btn-sm deleteUsr btn-danger" <?php echo 'id="' . $cl['id'] . '"'; ?> style="float: right; margin-top: -2; margin-right: -14px"><span class="glyphicon glyphicon-remove" style="font-size: 16"></span></button>
										<button   type="button" class=" stuPreview btn btn-primary btn-sm" data-toggle="modal" data-target="#deleteModal" <?php echo 'id="' . $cl['id'] . '"'; ?> style="float: right; margin-top: -3; margin-right: 2px;"><span class="glyphicon glyphicon-user" style="font-size: 16"></span></button>
										<button	type="button" class="btn btn-success btn-sm addst" data-toggle="modal" data-target="#deleteModal" <?php echo 'id="' . $cl['id'] . '"'; ?> style="float: right; margin-top: -3; margin-right: 2px;"><span class="glyphicon glyphicon-plus" style="font-size: 16"></span></button>
										<button   type="button" data-toggle="collapse" data-parent="#accordion" <?php echo 'href="#' . $index . "ForUniq" . '"'; ?> class="btn btn-default btn-sm" <?php echo 'id="' . $cl['id'] . '"'; ?> style="float: right; margin-top: -3; margin-right: 2px;"><span class="glyphicon glyphicon-pencil" style="font-size: 16"></span></button>
									</div>
								</div>
								<div <?php echo 'id="' . $index . "ForUniq" . '"'; ?> class="panel-collapse collapse right" style="width: 100%" >
									<div class="panel-body " style=" height: 26px; padding-top: 0px; padding-left: 15vw">
										<input disabled="disabled" type="email" class="Edit_Last_Name form-control"  placeholder="Class Name" style="border-radius: 20px; height:30px;padding:0px 8px;font-size:13px;line-height:1.5; width: 11vw; margin-left: -3vw; margin-top: 2px">
										<select class="form-control tcnameid"  style="border-radius: 20px; height: 30px;padding:0px 8px;font-size:13px;line-height:1.5; width: 13vw; margin-left: 0vw; margin-top: 2px">
											<?php
											foreach($TEACHERS as $th){
												echo '<option value="' . $th['mail'] . '">' . $th['fname'] . "&nbsp;" . $th['lname'] . "</option>";
											}
											?>
										</select>
										<button type="button" class="btn btn-sm  btn-default saveUsr" data-toggle="modal" data-target="#saveModal" <?php echo 'id="' . $cl['id'] . '"'; ?> style="float: right; font-size: 13px; margin-top: 2px; margin-right: -14px; width: 11vw">Save</button>
									</div>
								</div>
							</div>
							<?php
							$index++;
						}
						?>
						<!-- Delete Modal -->
						<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true" >
							<div class="modal-dialog" id="delete-modal-dialog">
								<div class="modal-content">
									<div class="modal-header bg-primary" style="padding:10px;">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="font-size: 30">&times;</span><span class="sr-only">Close</span></button>
										<h4 class="modal-title" id="deleteModalLabel" style="margin: 0px;"></h4>
									</div>
									<div class="modal-body deleteModalBody">

									</div>
									<div class="modal-footer" style="padding:10px;">
										<button type="button" class="btn btn-default col-xs-3 " data-dismiss="modal" style="float: right;">No</button>
										<button type="submit" name="deactivatebtn" id="deactivatebtn" class="btn btn-primary col-xs-3" style="float: right; margin-right: 10px;">Yes</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Save Modal -->
						<div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="saveModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header bg-primary" style="padding:10px;">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="font-size: 30">&times;</span><span class="sr-only">Close</span></button>
										<h4 class="modal-title" id="deleteModalLabel" style="margin: 0px;">Save</h4>
									</div>
									<div  class="modal-body saveModalBody" >

									</div>
									<div class="modal-footer" style="padding:10px;">
										<p style="display: inline; float: left" class="text-danger hidden err">There is no changes made.</p>
										<p style="display: inline; float: left" class="hidden saving">Saving...</p>
										<button type="button" class="btn btn-default col-xs-3 " data-dismiss="modal" style="float: right">No</button>
										<button type="button" class="btn btn-primary col-xs-3 btn-save" style="float: right; margin-right: 10px;">Yes</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Photo Modal -->
						<div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="photoModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header bg-primary" style="padding:10px;">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="font-size: 30">&times;</span><span class="sr-only">Close</span></button>
										<h4 class="modal-title" id="deleteModalLabel" style="margin: 0px;">Photo</h4>
									</div>
									<div  class="modal-body photoModalBody" ></div>
									<div class="modal-footer" style="padding:10px;">
										<p style="display: inline; float: left" class="text-danger hidden err">There is no changes made.</p>
										<button type="button" class="btn btn-default col-xs-3 " data-dismiss="modal" style="float: right">No</button>
										<button type="button" class="btn btn-primary col-xs-3 btn-save" style="float: right; margin-right: 10px;">Yes</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-group col-xs-4" id="accordion">
						<label for="accordion" class="col-xs-offset-1 control-label">Deactivated Class</label>
						<br>
						<table style="width: 100%; background-color: white; cursor: pointer;" class=" table-condensed">
							<tr>
								<th class="text-center text-successs bg-primary" style="width: 3%;">#</th>
								<th class="col-xs-2 text-center ext-successs bg-primary" style="width: 7%;">ID</th>
								<th class="col-xs-2 ext-successs text-center bg-primary" style="width: 19%;">Name</th>
								<th class="col-xs-2 ext-successs text-center bg-primary">Teacher</th>
								<th class="col-xs-2 ext-successs text-center bg-primary">Status</th>
								<th class="col-xs-2 ext-successs text-center bg-primary">Option</th>
							</tr>
						</table>
						<?php
						$index = 1;
						$class = getAllClassByStatus(2);
						foreach($class as $cl){
							?>
							<div class="panel panel-default" style="margin-top: 0px;">
								<div class="panel-heading" style="background-image: none; background-color: white; height: 30px; padding-top: 4px;">
									<div class="panel-title">
										<div class="col-xs-1" style="width: 7%; margin-left: -17px"><strong><?php echo $index; ?></strong></div>
										<div class="First_Name col-xs-1 text-center" ><?php echo $cl['id']; ?></div>
										<div class="Last_Name col-xs-3 text-center" ><?php echo $cl['name']; ?></div>
										<div class="Id col-xs-3 text-center" ><?php
											$name = getUserNameById($cl['teacher']);
											echo $name['fn'] . " " . $name['ln'];
											?>
										</div>									
										<div class="Password col-xs-3 text-center " ><span class="badge" style="font-size: 14px;"><?php echo $cl['status'] == 1 ? "Active" : "Deactive"; ?></span></div>
										<button   data-toggle="modal" data-target="#deleteModal" type="button" class="btn btn-sm activateClassbtn btn-default" <?php echo 'id="' . $cl['id'] . '"'; ?> style="float: right; margin-top: -4; margin-right: -14px"><span class="glyphicon glyphicon-arrow-left" style="font-size: 16"></span></button>
									</div>
								</div>
							</div>
							<?php
							$index++;
						}
						?>
					</div>
				</div>
			</form>
		</div>
		<script>
			$("th").hover(function(){
				$("table tr th").css("backgroundColor", "#428bca");
			});
			var stunum = 1;
			$(".deleteUsr").click(function(){
				$(document).find("#delete-modal-dialog").css("width", "");
				$(document).find("#deleteModalLabel").html("Deactivate Class");
				$(document).find(".deleteModalBody").html("<p class='lead'>Are you sure you want to deactivate this class?</p>");
				$(document).find(".deleteModalBody").append("<h5 style='display: inline; margin-left: 15px;'> ID: </h5>");
				$(document).find(".deleteModalBody").append($(this).siblings(".First_Name").html().trim() + "<br>");
				$(document).find(".deleteModalBody").append("<h5 style='display: inline; margin-left: 15px;'> Name: </h5>");
				$(document).find(".deleteModalBody").append($(this).siblings(".Last_Name").html().trim() + "<br>");
				$(document).find(".deleteModalBody").append("<h5 style='display: inline; margin-left: 15px;'> Teacher: </h5>");
				$(document).find(".deleteModalBody").append($(this).siblings(".Id").html().trim() + "<br>");
				$(document).find(".deleteModalBody").append("<h5 style='display: inline; margin-left: 15px;'> Status: </h5>");
				$(document).find(".deleteModalBody").append($(this).siblings(".Password").html().trim() + "<br>");
				$(document).find(".deleteModalBody").append("<br><h5 class='help-block' style='display: inline;'>Note: This action can be restored.</h5>");
				$("#deactivatebtn").val($(this).siblings(".First_Name").html().trim());
			});
			$(".activateClassbtn").click(function(){
				$(document).find("#delete-modal-dialog").css("width", "");
				$(document).find("#deleteModalLabel").html("Activate Class");
				$(document).find(".deleteModalBody").html("<p class='lead'>Are you sure you want to activate this class?</p>");
				$(document).find(".deleteModalBody").append("<h5 style='display: inline; margin-left: 15px;'> ID: </h5>");
				$(document).find(".deleteModalBody").append($(this).siblings(".First_Name").html().trim() + "<br>");
				$(document).find(".deleteModalBody").append("<h5 style='display: inline; margin-left: 15px;'> Name: </h5>");
				$(document).find(".deleteModalBody").append($(this).siblings(".Last_Name").html().trim() + "<br>");
				$(document).find(".deleteModalBody").append("<h5 style='display: inline; margin-left: 15px;'> Teacher: </h5>");
				$(document).find(".deleteModalBody").append($(this).siblings(".Id").html().trim() + "<br>");
				$(document).find(".deleteModalBody").append("<h5 style='display: inline; margin-left: 15px;'> Status: </h5>");
				$(document).find(".deleteModalBody").append($(this).siblings(".Password").html().trim() + "<br>");
				$(document).find(".deleteModalBody").append("<br><h5 class='help-block' style='display: inline;'>Note: This action can be restored.</h5>");
				$("#deactivatebtn").val($(this).siblings(".First_Name").html().trim());
				$("#deactivatebtn").attr("name", "activatebtn");
			});
			$(".saveUsr").click(function(){
				$(".saving").addClass('hidden');
				var clid = $(this).parent().parent().siblings().find('.First_Name').html().trim();
				var changes = false;
				var thid = $(this).siblings("select").val();
				var thname = "unknown";
				$(this).siblings("select").find('option').each(function(){
					if($(this).val() === thid){
						thname = $(this).html();
						return;
					}
				});
				var na = false;
				if($(this).siblings(".Edit_Last_Name").val() !== "" && $(this).siblings(".Edit_Last_Name").val().trim() !== $(this).parent().parent().siblings().find('.Last_Name').html().trim()){
					na = true;
				}
				$(document).find(".saveModalBody").html("<span class='eq hidden'></span><span class='clid hidden'>" + clid + "</span><p class='lead'>Are you sure you want to save changes?</p><br>");
				$(document).find(".saveModalBody").append
						(
								"<table width='90%' class='table-hover table-striped ' style='margin-left: 30px; cursor: default'>\n\
						<tr height='40' style='border-bottom: 2px solid black;'>\n\
							<th width='10%' style='font-size: 16px;' class='text-center'></th>\n\
							<th width='30%' style='font-size: 16px;' class=''> Old </th>\n\
							<th width='30%' style='font-size: 16px' class=''> New </th>\n\
						</tr>\n\
						<tr>\n\
							<th width='30%' style='font-size: 15px'>&nbsp;</th>\n\
							<td width='30%' style='font-size: 16px'>&nbsp;</td>\n\
							<td width='30%' style='font-size: 16px'>&nbsp;</td>\n\
						</tr>\n\
						<tr>\n\
							<th width='30%' style='font-size: 15px' class='lead'> Class Name: </th>\n\
							<td width='30%' style='font-size: 16px'>" + $(this).parent().parent().siblings().find(".Last_Name").html().trim() + "</td>\n\
							<td class='new-class-name' width='30%' style='font-size: 16px'>" + (na === true ? change() || $(this).siblings(".Edit_Last_Name").val() : "No Changes") + "</td>\n\
						</tr>\n\
						<tr>\n\
							<th width='30%' style='font-size: 15px' class='lead'> Teacher: </th>\n\
							<td width='30%' style='font-size: 16px'>" + $(this).parent().parent().siblings().find(".Id").html().trim() + "</td>\n\
							<td width='30%' style='font-size: 16px'>" + ($(this).siblings("select").val() !== $(this).parent().parent().siblings().find(".current-teacher-id").html().trim() ? change() || thname : "No Changes") + "</td>\n\
							<td class='hidden new-class-teacher-id' width='30%' style='font-size: 16px'>" + ($(this).siblings("select").val() !== $(this).parent().parent().siblings().find(".current-teacher-id").html().trim() ? change() || thid : "No Changes") + "</td>\n\
						</tr>\n\
					  </table>"
								);

				function change(){
					changes = true;
					return false;
				}
				function addSpan(x){
					return '<span class="badge">' + x + '</span>';
				}
				console.log(changes);
				if(changes === false){
					$(".btn-save").addClass("disabled");
					$(".err").removeClass("hidden");
				} else{
					$(".err").addClass("hidden");
					$(".btn-save").removeClass("disabled");
				}
			});
			$(".changePhoto").click(function(){
				$(document).find(".photoModalBody").append("<img src='http://localhost/Ela/usrpic/sample.jpeg' alt='User Picture' class='img-circle' width='170' height='170' style=''>");
//			$(document).find(".photoModalBody").append("<img src='' alt='User Picture' class='img-circle' width='170' height='170' style='float: right'>"); 
			});
			$("#backBtn").click(function(){
				redirect("admin.php");
			});
			$(".stuPreview").click(function(){
				var id = $(this).siblings(".First_Name").html().trim();
				var name = $(this).siblings(".Last_Name").html().trim();
				$(document).find(".deleteModalBody").html('');
				$.ajax({
					type: "GET",
					url: "Edit-Class.php?getStuList=true&id=" + id + "&name=" + name,
					datatype: "json",
					success: function(data){
						try{
							dd = JSON.parse(data);
							data = $.parseJSON(data);
						} catch(e){
							console.log(e.message, data);
						}
						console.log(data);
						var opt = stuList(data, false, id, name);
						console.log(opt);
						$(document).find(".deleteModalBody").html(opt);
					}
				});
			});
			$(".addst").click(function(){
				var id = $(this).siblings(".First_Name").html().trim();
				var name = $(this).siblings(".Last_Name").html().trim();
				$(document).find(".deleteModalBody").html('');
				$.ajax({
					type: "GET",
					url: "Edit-Class.php?getAllStuList=true",
					datatype: "json",
					success: function(data){
						try{
							dd = JSON.parse(data);
							data = $.parseJSON(data);
						} catch(e){
							console.log(e.message, data);
						}
						var opt = stuList(data, true, id, name);
						//console.log(opt);
						$(document).find(".deleteModalBody").html(opt);
					}
				});
			});
			function stuList(data, add, id, name){
				var opt = "";
				var tmp = "";
				var index = 0;
				var dh = {'id': 'ID', 'fn': 'First Name', 'ln': 'Last Name'};
				opt += '<ul><li>';
				$.each(data, function(i, stu){
					if(index !== 0){
						return;}
					$.each(stu, function(key, data){
						console.log(key, data, index);
						opt += '<span class="head ' + key + '">' + dh[key] + '</span>';
					});
					index++;
					return;

				});
				opt += '</li></ul><ol>'
				$.each(data, function(i, stu){
					opt += '<div class="hidden classID">' + id + '</div><div class="hidden className">' + name + '</div><li>';

					$.each(stu, function(key, data){
						console.log(key, data, index);
						opt += '<span class="lidt ' + key + '">' + data + '</span>';
					});
					if(add === false){
						opt += '<a type="button" class="btn btn-danger btndel"  onclick="delStu($(this).parent()); "><div class="glyphicon glyphicon-minus delstu"></div></a>';
					} else{

						opt += '<a type="button" class="btn btn-success btndel" onclick="addStu($(this).parent())"><div class="glyphicon glyphicon-plus delstu"></div></a>';
					}
					
					opt += '</li>';
				});
				console.log(tmp);
				opt += '</ol>';
				$(document).find("#deleteModalLabel").html("Student List");
				$(document).find("#delete-modal-dialog").css("width", "60vw");
				return opt;
			}
			function addStu(obj){
				var info = getstInfo(obj);
				info.op = 'a';
				$.ajax({type: "GET", data: info, url: 'Edit-Class.php', success: function(data){
						if(data === 'ok'){
							alert('User added successfully.');
						} else{
							alert(data);
						}
					}, fail: function(data){
						alert(data);
					}});
			}
			function delStu(obj){
				if($(obj).hasClass('deleting')){
					alert('Deleting user, please wait.');
				}
				changeOpacity(obj, '.5');
				$(obj).addClass('deleting');
				var info = getstInfo(obj);
				info.op = 'd';
				$.ajax({type: "GET", data: info, url: 'Edit-Class.php', success: function(data){
						$(data) = data.toString();
						if($(data).trim() === 'ok'){
							changeOpacity(obj, '0');
							$(obj).remove();
						} else{
							alert(data);
						}
					}, fail: function(data){
						alert(data);
						$(obj).removeClass('deleting');
						changeOpacity(obj, '1');
					}});
			}
			function changeOpacity(obj, value){
				$(obj).animate({
					opacity: value
				}, 600);
			}

			function getstInfo(obj){
				var res = {}
				res.stfn = $(obj).find('span.fn').html().trim();
				res.stln = $(obj).find('span.ln').html().trim();
				res.stid = $(obj).find('span.id').html().trim();
				res.clid = $(obj).parent().find('div.classID').html().trim();
				res.clname = $(obj).parent().find('div.className').html().trim();
				res.cltb = res.clid + 'class' + res.clname;
				return res;
			}
			$(".btn-save").click(function(){
				$(this).addClass('disabled');
				$(this).siblings('.saving').html('Saving...');
				$(this).siblings('.saving').removeClass('hidden');
				var NewClassName = $(this).parent().siblings('.saveModalBody').find(".new-class-name").html().trim();
				var clid = $(this).parent().siblings('.saveModalBody').find(".clid").html().trim();
				var NewClassTeacherId = $(this).parent().siblings('.saveModalBody').find(".new-class-teacher-id").html().trim();
				var urlStr = "Edit-Class.php?clid=" + clid + '&';
				var send = false;
				if(NewClassName !== 'No Changes' && NewClassName !== 'undefined'){
					urlStr += "NewClassName=" + NewClassName;
					send = true;
				}
				if(NewClassTeacherId !== 'No Changes' && NewClassTeacherId !== 'undefined'){
					if(send === true){
						urlStr += "&";
					}
					urlStr += "NewClassTeacherId=" + NewClassTeacherId;
					send = true;
				}
				if(send === true){
					$.ajax({
						type: "GET",
						url: urlStr,
						datatype: "json",
						success: function(data){
						data = data.trim();
							console.log(data);
							
							if(data === '1'){
								$(".btn-save").siblings('.saving').html('Saved Successfuly');
								var newthName = $('#accordion').find('#' + clid).find('.tcnameid').find('option[value="'+NewClassTeacherId+'"]').html().trim();
								$('#accordion').find('#' + clid).find('.Id').html(newthName);
								$('#accordion').find('#' + clid).find('.current-teacher-id').html(NewClassTeacherId);
								console.log('NewClassName: ', NewClassName);
								if(NewClassName !== 'No Changes' && NewClassName !== 'undefined'){
									$('#accordion').find('#' + clid).find('.Last_Name').html(NewClassName);
								}
								
							} else if(data === 0){
								$(".btn-save").siblings('.saving').html('Saving Failed, Server Error');
							} else{
								$(".btn-save").siblings('.saving').html('Unknown Saving status. ');
							}
						},
						error: function(err){
							$('.btn-save').siblings('.saving').html('Saving Failed. Error code' + err.status);

						}

					});
				} else{
					$(".btn-save").siblings('.saving').html('Problem Creating AJAX url request.');
				}
			});
		</script>
	</body>
</html>
                            
                            
                            