<?php
require_once './LoginCheckHeader.php';
check_admin();
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
if (isset($_POST['submit'])) {
	$fn = $_POST['fname'];
	$ln = $_POST['lname'];
	$mail = $_POST['email'];
	$pass = $_POST['pass'];
	$role = $_POST['role'];
	if (isset($fn) && isset($ln) && isset($mail) && isset($pass) && isset($role) && $fn != "" && $ln != "" && $mail != "" && $pass != "" && $role != "") {
		if ($role == "student") {
			$role = 0;
		} else if ($role == "teacher") {
			$role = 1;
		} else {
			$role = "Unknown";
		}
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$temp = explode(".", $_FILES["pic"]["name"]);
		$extension = end($temp);
		$filename = "http://elaonline.ir/usrpic/sample.jpeg";
		if (!empty($_FILES["pic"]['name'])) {
//	        $_FILES['pic']['name'] = $mail;
			if ((($_FILES["pic"]["type"] == "image/gif") || ($_FILES["pic"]["type"] == "image/jpeg") || ($_FILES["pic"]["type"] == "image/jpg") || ($_FILES["pic"]["type"] == "image/pjpeg") || ($_FILES["pic"]["type"] == "image/x-png") || ($_FILES["pic"]["type"] == "image/png")) && ($_FILES["pic"]["size"] < 300000) && in_array($extension, $allowedExts)) {
				if ($_FILES["pic"]["error"] > 0) {
					$fileErr = "";
					$msg = "Unknown Error, Call Site's Programmer.";
					$incVis = "";
				} else {
//			echo "Upload: " . $_FILES["pic"]["name"] . "<br>";
//			echo "Type: " . $_FILES["pic"]["type"] . "<br>";
//			echo "Size: " . ($_FILES["pic"]["size"] / 1024) . " kB<br>";
//			echo "Temp pic: " . $_FILES["pic"]["tmp_name"] . "<br>";
					if (file_exists("usrpic/" . $_FILES["pic"]["name"])) {
						$fileErr = "";
						$msg = $_FILES['pic']['name'] . "Already exists in usrpic directory. try uploading a diffrent picture to avoid duplication";
						$incVis = "";
					} else {
						$filename = $mail . $extension;
						if (move_uploaded_file($_FILES["pic"]["tmp_name"], "usrpic/$filename")) {
							$filename .= $mail . $extension;
							$msg = "File OK.";
						}
//			      echo "<br><br>Stored in: " . "usrpic/" . $_FILES["pic"]["name"];
					}
				}
			} else if (($_FILES["pic"]["type"] != "image/gif") && ($_FILES["pic"]["type"] != "image/jpeg") && ($_FILES["pic"]["type"] != "image/jpg") && ($_FILES["pic"]["type"] != "image/pjpeg") && ($_FILES["pic"]["type"] != "image/x-png") && ($_FILES["pic"]["type"] != "image/png") || !in_array($extension, $allowedExts)) {
				$fileErr = "";
				$msg = "File Type error. ." . $_FILES['pic']['type'] . "is not alowed as an image.";
			} else if ($_FILES["pic"]["size"] >= 300000) {
				$fileErr = "";
				$msg = "File Size error. " . $_FILES['pic']['size'] . "is larger than 300KB.";
			}
		}
		$msgvisible = "";
		$con = mysql_connect(HOST, USER, PASSWORD, DB);
		$query = "Insert into users values('$mail', '$pass', '$fn', '$ln',  '$role', '');";
		mysql_select_db(DB);
		if (mysql_query($query)) {
			$msgvisible = ""; //set server message visible.
			$x = $_POST['role'];
			$stmsg .= "<br><strong> First Name: </strong> $fn <br> <strong> Last Name: </strong> $ln <br> <strong>Mail/UserID:</strong> $mail <br> <strong>Password:</strong> $pass <br><strong> Role:</strong>  $x ";
		} else {
			$stmsg = "Database Connection Failed, maybe email currenly exist in database, try setting a uniqe email address";
		}
	} else {
		$stmsg = "something missing.";
		$incVis = "";
	}
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
		<meta charset="UTF-8">
		<link href="../bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="../bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="../Js/jQueryLib.js"></script>
		<script src="../bootstrap-3.1.1-dist/js/bootstrap.js"></script>
	</head>
	<body>
		<div id="blackbk" style="display: <?php echo $msgvisible; ?>; position: fixed; top: 4.8vh; left: 0px; width: 100%; height: 100%; opacity: .8; background-color: black; z-index: 10">
			<form action="adduser.php" class="form-horizontal" method="get" role="form">
				<div id="msg" style=" background-color: white; height: 250px; opacity: 1; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;" class="col-xs-offset-6 col-xs-4">
					<h5 class="bg-info" >Server Message: User Added Successfully</h5> <?php echo $stmsg; ?>
					<br><br>
					<img src="<?php echo $filename; ?>" alt="User Picture" class="img-circle" width="150" height="150" style="position: absolute; top: 10px; right: 10px;">
					<input type="submit" id="oksub" name="oksubmit" style="position: absolute; top: 200px; right: 20px;" class="btn btn-success col-xs-2" value="OK">
					<script>
						$("#oksub").focus();
					</script>
				</div>
			</form>
		</div>
		<div class="bg-info" style="margin-top: -16px;">
			<div style="position: fixed; width: 100%; z-index: 12; opacity: 1" class=" bg-primary">
				<h3 class="text-center"> Add New User </h3>
			</div>
			<br><br><br><br>
			<form class=" bg-info form-horizontal col-xs-12" action="adduser.php" method="post" role="form"  enctype="multipart/form-data">
				<div class="form-group">
					<label for="fname" class="col-sm-2 control-label">First Name</label>
					<div class="col-sm-3">
						<input type="text" class="form-control  " name="fname" placeholder="First Name" >
					</div>
				</div>
				<div class="form-group">
					<label for="lname" class="col-sm-2 control-label">Last Name</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" name="lname" placeholder="Last Name" >
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="pass" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-3">
						<input type="password" class="form-control" name="pass" placeholder="Password">
					</div>
				</div>
				<div class="form-group ">
					<label for="lname" class="col-sm-2 control-label">Gender:</label>
					<div class="col-sm-3">
						<div class="radio">
							<label>
								<input type="radio" name="gender" id="optionsRadios1" value="male" checked>
								Male &nbsp; &nbsp;
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gender" id="optionsRadios2" value="female">
								Female
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="pic" class="col-sm-2 control-label">Picture</label>
					<div class="col-sm-3">
						<input type="file" class="btn btn-block" name="pic" id="pic" >
						<p class="help-block">Only jpeg, size limit: 300KB</p>
					</div>
				</div>
				<div class="form-group ">
					<label for="lname" class="col-sm-2 control-label">Role:</label>
					<div class="col-sm-3">
						<div class="radio">
							<label>
								<input type="radio" name="role" id="optionsRadios1" value="student" checked>
								Student &nbsp; &nbsp;
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="role" id="optionsRadios2" value="teacher">
								Teacher
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group  <?php echo "$cls"; ?> <?php echo "$incVis"; ?>">
						<label for="pass" class="col-sm-2 control-label"></label>
						<div class="col-sm-10">
							<p class="help-block">First Name, Last name, Email and Password are required.<br> Make sure you entered all, then try again.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group  <?php echo "$cls"; ?> <?php echo "$fileErr"; ?>">
						<label for="pass" class="col-sm-2 control-label"></label>
						<div class="col-sm-10">
							<p class="help-block"><?php echo "$msg"; ?></p>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-3">
						<button type="submit" name="submit" class="col-xs-offset-4 col-xs-4 btn btn-default">Add</button>
					</div>
				</div>
			</form>
		</div>
		<script>
			$("#backBtn").click(function() {
				redirect("admin.php")
			});
		</script>
	</body>
</html>
