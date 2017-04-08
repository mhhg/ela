<?php
require_once './LoginCheckHeader.php';
require_once './db_definition.php';
define("DB", "elaonlin_eladb");
define("TABLE", "users");
$msgvisible = "none";
$msg = "";
$incVis = "hidden";
$cls = "has-error";
$fileErr = "hidden";
$filename = "";
$filest = "";
$stmsg = ""; //status message
$usrRole = getUserRole();
$teacher = getTeacher();
$teacher = getTeacherActiveClass($teacher);
$stuteacher = getTeacherStudent($teacher);
$cls = getTeacherActiveClassList($teacher);
if(isset($_POST['submit'])){
	$msgvisible = "";
	$sub = $_POST['subject'];
	$message = $_POST['message'];
	$to = buildReception();
	$con = mysql_connect(HOST, USER, PASSWORD, "elaonlin_elamessage");
	$from = $teacher['mail'];
	$query = "insert into message values('', '$from', '$to', '1', '$sub', '$message');";
	mysql_select_db(DBMS);
	if(mysql_query($query)){
		$stmsg .= "Message Sent Successfully </h5>";
		$stmsg .= "<strong>From:</strong>&nbsp;" . $from . '<br>';
		$stmsg .= "<strong>TO:</strong>&nbsp;" . $to . '<br>';
		$stmsg .= "<strong>Subject:</strong>&nbsp;" . $sub . '<br>';
		$stmsg .= "<strong>Message:</strong>&nbsp;" . $message . '<br>';
	}else{
		$stmsg .= "Database Connection Failed </h5>";
		$stmsg .= "Database errore number:" . mysql_errno($con) . '<br>';
	}
}
function buildReception(){
	$to = array();
	foreach($_POST['mail'] as $stid){
		array_push($to, $stid);
	}
	$to = json_encode($to);
	return $to;
}
if(isset($_GET['oksubmit'])){
	$msgvisible = "none";
}
require_once './logout.php';
require_once './back.php';
logoutHTML();
?>
<!DOCTYPE html>
<html>
      <head>
		<meta charset="UTF-8">
		<link href="../bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="../bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="../Js/jQueryLib.js"></script>
		<script src="../bootstrap-3.1.1-dist/js/bootstrap.js"></script>
		<script src="../Js/bsFile.js" type="text/javascript"></script>
      </head>
      <body>
		<div id="blackbk" style="display: <?php echo $msgvisible; ?>; position: fixed; top: 4.8vh; left: 0px; width: 100%; height: 100%; opacity: .8; background-color: black; z-index: 10">
			<form action="publicSend.php" class="form-horizontal" method="get" role="form">
				<div id="msg" style=" background-color: white; height: 250px; opacity: 1; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;" class="col-xs-offset-6 col-xs-4">
					<h5 class="bg-info" >Server Message:  <?php echo $stmsg; ?>
						<br><br>
						<input type="submit" id="oksub" name="oksubmit" style="position: absolute; top: 200px; right: 20px;" class="btn btn-success col-xs-2" value="OK">
						<script>
							$("#oksub").focus();
						</script>
				</div>
			</form>
		</div>
		<div class="bg-info" style="margin-top: -16px; height: 100vh">
			<div style="position: fixed; width: 100%; z-index: 12; opacity: 1;" class=" bg-primary">
				<h3 class="text-center"> Set Resource,<em> <?php echo $teacher['fn']; ?> </em> </h3>
			</div>
			<br><br><br><br>
			<form class=" bg-info form-inline text-center col-xs-12 col-sm-12" onsubmit="return validate()" action="resource.php" method="post" role="form"  enctype="multipart/form-data">
				<div class="col-sm-offset-1" >
					<label for="to" class="col-sm-2 control-label">Class: </label><br>
					<br>
					<table id="cls" style="width: 90%; background-color: white; cursor: pointer;" class="col-xs-offset-0 table table-hover table-condensed">
						<tr>
							<th class="text-successs bg-primary" style="width: 20%;">
								#
							</th>
							<th class="col-xs-2 ext-successs bg-primary" style="width: 40%;">
								<small>Class</small>
							</th>
							<th class="col-xs-2 ext-successs bg-primary" style="width: 40%;">
								<small>Resources</small>
							</th>
							<th class="col-xs-2 ext-successs bg-primary" style="width: 20%;">
								<small>Option</small>
							</th>
						</tr>
						<?php
						$index = 1;
						foreach($cls as $cl){
							?>
							<tr <?php echo 'id="' . $cl['id'] . '"'; ?>>
								<td>
									<?php echo $index; ?>
								</td>
								<td>
									<?php echo $cl['name']; ?>
								</td>
								<td>
									Noting added
								</td>
								<td class="hidden identify">
									<?php echo $cl['id']; ?>
								</td>
								<td>
									<input  type="file" data-filename-placement="inside" class="glyphicon glyphicon-plus btn btn-success">
								</td>
							</tr>
							<?php
							$index++;
						}
						?>
					</table>
				</div>
			</form>
		</div>

		<script>
			$("#backBtn").click(function(){
				redirect("teacher.php");
			});
			$('input[type=file]').bootstrapFileInput();
			$('.file-inputs').bootstrapFileInput();
		</script>
      </body>
</html>
