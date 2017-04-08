<?php
require_once './LoginCheckHeader.php';
check_admin();
require_once './db_definition.php';
define("DB", "elaonlin_eladb");
define("TABLE", "users");
$stu = getAllUsersByRole(Student);
$teacher = getAllUsersByRole(Teacher);
$admin = getAllUsersByRole(Admin);
$class = getAllClass();
$msgvisible = "none";
$msg = "";
$incVis = "hidden";
$cls = "has-error";
$fileErr = "hidden";
$filename = "";
$filest = "";
$stmsg = ""; //status message
if (isset($_POST['submit'])) {
	
}
if (isset($_GET['oksubmit'])) {
	$msgvisible = "none";
}
require_once './logout.php';
require_once './back.php';
logoutHTML();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Users</title>
		<meta charset="UTF-8">
		<link href="../bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="../bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="../Js/jQueryLib.js"></script>
		<script src="../bootstrap-3.1.1-dist/js/bootstrap.js"></script>
		<style>
			.panel-title{
				font-size: 14px;
			}
		</style>
	</head>
	<body>
		<div id="blackbk" style="display: <?php echo $msgvisible; ?>; position: fixed; top: 4.8vh; left: 0px; width: 100%; height: 100%; opacity: .8; background-color: black; z-index: 10">
			<form action="edituser.php" class="form-horizontal" method="get" role="form">
				<div id="msg" style=" background-color: white; height: 250px; opacity: 1; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;" class="col-xs-offset-6 col-xs-4">
					<h5 class="bg-info" >Server Message: User Added Successfully</h5> <?php echo $stmsg; ?>
					<br><br>
					<img src="<?php echo $filename; ?>" alt="User Picture" class="img-circle" width="150" height="150" style="position: absolute; top: 10px; right: 10px;">
					<input type="submit" id="oksub" name="oksubmit" style="position: absolute; top: 200px; right: 20px;" class="btn btn-success col-xs-2" value="OK">
					<script>
						$("#oksub").focus();</script>
				</div>
			</form>
		</div>
		<div class="bg-info" style="margin-top: -16px;">
			<div style="position: fixed; width: 100%; z-index: 12; opacity: 1;" class=" bg-primary">
				<h3 class="text-center"> Edit Class </h3>
			</div>
			<form class="bg-info form-inline col-xs-12 " onsubmit="return validate()" action="edituser.php" method="post" role="form">
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
					<div class="panel-group col-xs-12 col-sm-6" id="accordion">
						<label for="accordion" class="col-xs-offset-1 control-label">Student</label>
						<br>
						<table style="width: 100%; background-color: white; cursor: pointer;" class=" table-condensed">
							<tr>
								<th class="text-center text-successs bg-primary" style="width: 3%;">#</th>
								<th class="col-xs-2 text-center ext-successs bg-primary">ID</th>
								<th class="col-xs-2 ext-successs text-center bg-primary">Name</th>
								<th class="col-xs-2 ext-successs text-center bg-primary">Teacher</th>
								<th class="col-xs-2 ext-successs text-center bg-primary">Status</th>
								<th class="col-xs-2 ext-successs text-center bg-primary">Option</th>
							</tr>
						</table>
						<?php
						$index = 1;
						foreach ($class as $cl) {
							?>
							<div class="panel panel-default" style="margin-top: 0px;">
								<div class="panel-heading" style="background-image: none; background-color: white; height: 30px; padding-top: 4px;">
									<div class="panel-title">
										<div class="col-xs-1" style="width: 7%; margin-left: -17px"><strong><?php echo $index; ?></strong></div>
										<div class="First_Name col-xs-2 text-center" ><?php echo $cl['id']; ?></div>
										<div class="Last_Name col-xs-2 text-center" ><?php echo $cl['name']; ?></div>
										<div class="Id col-xs-3 text-center" ><?php echo $cl['teacher']; ?></div>									
										<div class="Password col-xs-3 text-center" ><span class="badge"><?php echo $cl['status']; ?></span></div>
										<button   data-toggle="modal" data-target="#deleteModal" type="button" class="btn btn-sm deleteUsr" <?php echo 'id="' . $cl['id'] . '"'; ?> style="float: right; margin-top: -2; margin-right: -14px"><span class="glyphicon glyphicon-trash" style="font-size: 16"></span></button>
										<!--<button id="deleteUsr"  type="button" class="btn btn-sm edit" <?php echo 'id="' . $cl['id'] . '"'; ?> style="float: right; margin-top: -2; margin-right: -14px"><span class="glyphicon glyphicon-trash" style="font-size: 16"></span></button>-->
										<button  type="button" data-toggle="collapse" data-parent="#accordion" <?php echo 'href="#' . $index . '"'; ?> class="btn btn-default btn-sm" <?php echo 'id="' . $cl['id'] . '"'; ?> style="float: right; margin-top: -3; margin-right: 2px;"><span class="glyphicon glyphicon-pencil" style="font-size: 16"></span></button>
									</div>
								</div>
								<div <?php echo 'id="' . $index . '"'; ?> class="panel-collapse collapse right" style="width: 100%" >
									<div class="panel-body " style=" height: 26px; padding-top: 0px; padding-left: 0px">
										<input  type="email" class="Edit_First_Name form-control"  placeholder="First Name" style="border-radius: 20px; height:26px;padding:0px 8px;font-size:13px;line-height:1.5; width: 9vw; margin-left: 2.2vw">
										<input  type="email" class="Edit_Last_Name form-control"  placeholder="Last Name" style="border-radius: 20px; height:26px;padding:0px 8px;font-size:13px;line-height:1.5; width: 9vw; margin-left: .2vw">
										<input  type="email" class="Edit_Id form-control"  placeholder="User Name" style="border-radius: 20px; height:26px;padding:0px 8px;font-size:13px;line-height:1.5; width: 9vw; margin-left: .2vw">
										<input  type="email" class="Edit_Password form-control"  placeholder="Password" style="border-radius: 20px; height:26px;padding:0px 8px;font-size:13px;line-height:1.5; width: 9vw; margin-left: .2vw">
										<button type="button" class="btn btn-sm btn-primary changePhoto"  data-toggle="modal" data-target="#photoModal" <?php echo 'id="' . $cl['id'] . '"'; ?> style="float: right; margin-top: -2; margin-right: -14px"><span class="glyphicon glyphicon-user" style="font-size: 16"></span></button>
										<button type="button" class="btn btn-sm btn-success saveUsr" data-toggle="modal" data-target="#saveModal" <?php echo 'id="' . $cl['id'] . '"'; ?> style="float: right; margin-top: -2; margin-right: 2px"><span class="glyphicon glyphicon-floppy-save" style="font-size: 16"></span></button>
									</div>
								</div>
							</div>
							<?php
							$index++;
						}
						?>
						<!-- Delete Modal -->
						<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header bg-primary" style="padding:10px;">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="font-size: 30">&times;</span><span class="sr-only">Close</span></button>
										<h4 class="modal-title" id="deleteModalLabel" style="margin: 0px;">Delete User</h4>
									</div>
									<div class="modal-body deleteModalBody">

									</div>
									<div class="modal-footer" style="padding:10px;">
										<button type="button" class="btn btn-default col-xs-3 " data-dismiss="modal" style="float: right">No</button>
										<button type="button" class="btn btn-primary col-xs-3" style="float: right; margin-right: 10px;">Yes</button>
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
									<div  class="modal-body photoModalBody" >

									</div>
									<div class="modal-footer" style="padding:10px;">
										<p style="display: inline; float: left" class="text-danger hidden err">There is no changes made.</p>
										<button type="button" class="btn btn-default col-xs-3 " data-dismiss="modal" style="float: right">No</button>
										<button type="button" class="btn btn-primary col-xs-3 btn-save" style="float: right; margin-right: 10px;">Yes</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<script>
			$("th").hover(function() {
				$("table tr th").css("backgroundColor", "#428bca");
			});
			var stunum = 1;
			$(".deleteUsr").click(function() {
				$(document).find(".deleteModalBody").html("<p class='lead'>Are you sure you want to permanently delete this user?</p>");
				$(document).find(".deleteModalBody").append("<h5 style='display: inline; margin-left: 15px;'>First Name: </h5>");
				$(document).find(".deleteModalBody").append($(this).siblings(".First_Name").html().trim() + "<br>");
				$(document).find(".deleteModalBody").append("<h5 style='display: inline; margin-left: 15px;'>Last Name: </h5>");
				$(document).find(".deleteModalBody").append($(this).siblings(".Last_Name").html().trim() + "<br>");
				$(document).find(".deleteModalBody").append("<h5 style='display: inline; margin-left: 15px;'>Id: </h5>");
				$(document).find(".deleteModalBody").append($(this).siblings(".Id").html().trim() + "<br>");
				$(document).find(".deleteModalBody").append("<h5 style='display: inline; margin-left: 15px;'>Password: </h5>");
				$(document).find(".deleteModalBody").append($(this).siblings(".Password").html().trim() + "<br>");
				$(document).find(".deleteModalBody").append("<img src='http://elaonline.ir/usrpic/sample.jpeg' alt='User Picture' class='img-circle' width='150' height='150' style='position: absolute; top: 6vh; right: 2vw;'>");
				$(document).find(".deleteModalBody").append("<br><h5 class='help-block' style='display: inline;'>Note: This action can not be restored.</h5>");
			});
			$(".saveUsr").click(function() {
				console.log($(this).siblings(".Edit_First_Name").val());
				var changes = false;
				$(document).find(".saveModalBody").html("<p class='lead'>Are you sure you want to save changes?</p><br>");
				$(document).find(".saveModalBody").append
					  (
						    "<table width='90%' class='table-hover ' style='margin-left: 30px; cursor: default'>\n\
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
							<th width='30%' style='font-size: 15px' class='lead'> Fist Name: </th>\n\
							<td width='30%' style='font-size: 16px'>" + $(this).parent().parent().siblings().find(".First_Name").html().trim() + "</td>\n\
							<td width='30%' style='font-size: 16px'>" + ($(this).siblings(".Edit_First_Name").val() !== "" ? change() || ($(this).siblings(".Edit_First_Name").val()) : "No Changes") + "</td>\n\
						</tr>\n\
						<tr>\n\
							<th width='30%' style='font-size: 15px' class='lead'> Last Name: </th>\n\
							<td width='30%' style='font-size: 16px'>" + $(this).parent().parent().siblings().find(".Last_Name").html().trim() + "</td>\n\
							<td width='30%' style='font-size: 16px'>" + ($(this).siblings(".Edit_Last_Name").val() !== "" ? change() || $(this).siblings(".Edit_Last_Name").val() : "No Changes") + "</td>\n\
						</tr>\n\
						<tr>\n\
							<th width='30%' style='font-size: 15px' class='lead'> ID: </th>\n\
							<td width='30%' style='font-size: 16px'>" + $(this).parent().parent().siblings().find(".Id").html().trim() + "</td>\n\
							<td width='30%' style='font-size: 16px'>" + ($(this).siblings(".Edit_Id").val() !== "" ? change() || $(this).siblings(".Edit_Id").val() : "No Changes") + "</td>\n\
						</tr>\n\
						<tr>\n\
							<th width='30%' style='font-size: 15px' class='lead'> Password: </th>\n\
							<td width='30%' style='font-size: 16px'>" + $(this).parent().parent().siblings().find(".Password").html().trim() + "</td>\n\
							<td width='30%' style='font-size: 16px'>" + ($(this).siblings(".Edit_Password").val() !== "" ? change() || addSpan($(this).siblings(".Edit_Password").val()) : "No Changes") + "</td>\n\
						</tr>\n\
					  </table>"
						    );
				$(document).find(".saveModalBody").append("<img src='http://elaonline.ir/usrpic/sample.jpeg' alt='User Picture' class='img-circle' width='120' height='120' style='position: absolute; top: 0vh; right: 0vw;'>");
				function change() {
					changes = true;
					return false;
				}
				function addSpan(x) {
					return '<span class="badge">' + x + '</span>';
				}
				console.log(changes);
				if (changes === false) {
					$(".btn-save").addClass("disabled");
					$(".err").removeClass("hidden");
				} else {
					$(".err").addClass("hidden");
					$(".btn-save").removeClass("disabled");
				}
			});
			$(".changePhoto").click(function() {
			$(document).find(".photoModalBody").append("<img src='http://elaonline.ir/usrpic/sample.jpeg' alt='User Picture' class='img-circle' width='170' height='170' style=''>");
//			$(document).find(".photoModalBody").append("<img src='' alt='User Picture' class='img-circle' width='170' height='170' style='float: right'>"); 
			});
			$("#backBtn").click(function() {
				redirect("admin.php");
			});
		</script>
	</body>
</html>
