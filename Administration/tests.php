<?php
require_once './LoginCheckHeader.php';
check_admin();
require_once './db_definition.php';
$fileErr = "hidden";
$filename = "";
$filest = "";
$stmsg = ""; //status message
//if(isset($_POST['submit'])){
//	$fn = $_POST['fname'];
//	$ln = $_POST['lname'];
//	$mail = $_POST['email'];
//	$pass = $_POST['pass'];
//	$role = $_POST['role'];
//	if(isset($fn) && isset($ln) && isset($mail) && isset($pass) && isset($role) && $fn != "" && $ln != "" && $mail != "" && $pass != "" && $role != ""){
//		if($role == "student"){
//			$role = 0;
//		}else if($role == "teacher"){
//			$role = 1;
//		}else{
//			$role = "Unknown";
//		}
//		$allowedExts = array("gif", "jpeg", "jpg", "png");
//		$temp = explode(".", $_FILES["pic"]["name"]);
//		$extension = end($temp);
//		$filename = "http://elaonline.ir/usrpic/sample.jpeg";
//		if(!empty($_FILES["pic"]['name'])){
////	        $_FILES['pic']['name'] = $mail;
//			if((($_FILES["pic"]["type"] == "image/gif") || ($_FILES["pic"]["type"] == "image/jpeg") || ($_FILES["pic"]["type"] == "image/jpg") || ($_FILES["pic"]["type"] == "image/pjpeg") || ($_FILES["pic"]["type"] == "image/x-png") || ($_FILES["pic"]["type"] == "image/png")) && ($_FILES["pic"]["size"] < 300000) && in_array($extension, $allowedExts)){
//				if($_FILES["pic"]["error"] > 0){
//					$fileErr = "";
//					$msg = "Unknown Error, Call Site's Programmer.";
//					$incVis = "";
//				}else{
////			echo "Upload: " . $_FILES["pic"]["name"] . "<br>";
////			echo "Type: " . $_FILES["pic"]["type"] . "<br>";
////			echo "Size: " . ($_FILES["pic"]["size"] / 1024) . " kB<br>";
////			echo "Temp pic: " . $_FILES["pic"]["tmp_name"] . "<br>";
//					if(file_exists("usrpic/" . $_FILES["pic"]["name"])){
//						$fileErr = "";
//						$msg = $_FILES['pic']['name'] . "Already exists in usrpic directory. try uploading a diffrent picture to avoid duplication";
//						$incVis = "";
//					}else{
//						$filename = $mail . $extension;
//						if(move_uploaded_file($_FILES["pic"]["tmp_name"], "usrpic/$filename")){
//							$filename .= $mail . $extension;
//							$msg = "File OK.";
//						}
////			      echo "<br><br>Stored in: " . "usrpic/" . $_FILES["pic"]["name"];
//					}
//				}
//			}else if(($_FILES["pic"]["type"] != "image/gif") && ($_FILES["pic"]["type"] != "image/jpeg") && ($_FILES["pic"]["type"] != "image/jpg") && ($_FILES["pic"]["type"] != "image/pjpeg") && ($_FILES["pic"]["type"] != "image/x-png") && ($_FILES["pic"]["type"] != "image/png") || !in_array($extension, $allowedExts)){
//				$fileErr = "";
//				$msg = "File Type error. ." . $_FILES['pic']['type'] . "is not alowed as an image.";
//			}else if($_FILES["pic"]["size"] >= 300000){
//				$fileErr = "";
//				$msg = "File Size error. " . $_FILES['pic']['size'] . "is larger than 300KB.";
//			}
//		}
//		$msgvisible = "";
//		$con = mysql_connect(HOST, USER, PASSWORD, DB);
//		$query = "Insert into users values('$mail', '$pass', '$fn', '$ln',  '$role', '');";
//		mysql_select_db(DB);
//		if(mysql_query($query)){
//			$msgvisible = ""; //set server message visible.
//			$x = $_POST['role'];
//			$stmsg .= "<br><strong> First Name: </strong> $fn <br> <strong> Last Name: </strong> $ln <br> <strong>Mail/UserID:</strong> $mail <br> <strong>Password:</strong> $pass <br><strong> Role:</strong>  $x ";
//		}else{
//			$stmsg = "Database Connection Failed, maybe email currenly exist in database, try setting a uniqe email address";
//		}
//	}else{
//		$stmsg = "something missing.";
//		$incVis = "";
//	}
//}
if(isset($_GET['retriveData'])){
//	$ts = load_tests_data();
//	print_r($ts);
	?>
	<div class="bg-info" style="margin-top: -16px;">
		<div style="position: fixed; width: 100%; z-index: 12; opacity: 1" class=" bg-primary">
			<h3 class="text-center"> Add New User </h3>
		</div>
		<br><br><br><br>
		
		<div class=" bg-info form-horizontal col-xs-12">
			<table>
				<tr>
					<th>
					</th>
				</tr>
			</table>
		</div>
	</div>
	<?php
	exit();
}
if(isset($_GET['oksubmit'])){
	$msgvisible = "none";
}
//require_once './logout.php';
//require_once './back.php';
//logoutHTML();
class tests{
	public $head;
	public $name;
	public $text;
	public $pic;
	public $tagid;
	function __construct(){
		$this->name = "mohammad";
	}
}
$ts = array();
$ts[0] = new tests();
$ts[0]->head = "first";
$ts[1] = new tests();
$ts[1]->head = "second";
$tags[0] = "camb";
$tags[1] = "ets";
//write_tests_tags($tags);
//write_tests_data($ts);
function write_tests_tags($ts){
	$con = mysql_connect(HOST, USER, PASSWORD, DBCMS);
	mysql_select_db(DBCMS, $con);
	$a = json_encode($ts);
	$query = "INSERT INTO tests values('', '$a');";
	$result = mysql_query($query, $con);
	mysql_close($con);
}
function write_tests_data($ts){
	$con = mysql_connect(HOST, USER, PASSWORD, DBCMS);
	mysql_select_db(DBCMS, $con);
	foreach($ts as $t){
		$a = json_encode($t);
		$query = "INSERT INTO tests values('', '$a');";
		$result = mysql_query($query, $con);
	}
	mysql_close($con);
	return $ts;
}
function load_tests_data(){
	$ts = array();
	$con = mysql_connect(HOST, USER, PASSWORD, DBCMS);
	$query = "Select * from tests;";
	mysql_select_db(DBCMS, $con);
	$result = mysql_query($query, $con);
	$i = 0;
	while($row = mysql_fetch_array($result)){
		$a = json_decode($row['content']);
		$ts[$row['id']] = $a;
	}
	mysql_close($con);
	return $ts;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tests</title>
		<meta charset="UTF-8">
		<link href="../bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="../bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="../Js/jQueryLib.js"></script>
		<script src="../bootstrap-3.1.1-dist/js/bootstrap.js"></script>
	</head>
	<body>
		<button id="stuPreview" style="position: absolute; margin-left: 200px;">fuck</button>
		<script>
			$(document).ready(function(){
				$.ajax({
					type: "GET",
					url: "tests.php?retriveData",
					datatype: "html",
					success: function(data){
						console.log(data);
						$("body").append(data);
					}
				});
			});
			$("#backBtn").click(function(){
				redirect("admin.php")
			});
		</script>
	</body>
</html>
