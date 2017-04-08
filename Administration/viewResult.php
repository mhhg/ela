<?php
if(isset($_GET['submit'])){
	$filename = "http://elaonline.ir/Administration/result.jpg";
	header('Content-Description: File Transfer');
	header("Content-type: image/jpeg");
	header("Content-disposition: attachment; filename=result");
	$img = imagecreatefromjpeg($filename);
	$white = imagecolorallocate($img, 255, 255, 255);
	$grey = imagecolorallocate($img, 128, 128, 128);
	$black = imagecolorallocate($img, 0, 0, 0);
	$font = 'arial.ttf';
	imagettftext($img, 50, 0, 705, 463, $black, $font, $_GET['FirstName']);
	imagettftext($img, 50, 0, 705, 600, $black, $font, $_GET['TeachersName']);
	imagettftext($img, 50, 0, 705, 740, $black, $font, $_GET['className']);
	imagettftext($img, 55, 0, 1360, 878, $black, $font, $_GET['ClassActivity']);
	imagettftext($img, 55, 0, 1360, 1020, $black, $font, $_GET['Speaking']);
	imagettftext($img, 55, 0, 1360, 1160, $black, $font, $_GET['Midterm']);
	imagettftext($img, 55, 0, 1360, 1300, $black, $font, $_GET['Final']);
	imagettftext($img, 55, 0, 1360, 1449, $black, $font, $_GET['Total']);
//		imagettftext($img, 55, 0, 1360, 1449, $black, $font, "100");

	function view(){
		global $img;
		ob_start();
		imagejpeg($img, NULL, 100);
		$rawImageBytes = ob_get_clean();
		echo "<img src='data:image/jpeg;base64," . base64_encode($rawImageBytes) . "' height='700' width='550' />";
	}
	function fillBlock(){
		global $img, $black;
		$x1 = 915;
		$y1 = 1550;
		$x2 = 1588;
		$y3 = 1650;
		$w1 = 961;
		$w2 = $x2 + 961 - $x1;
		$h1 = 1602;
		$h2 = $y3 + 1602 - $y1;
		switch($_GET['pc']){
			case 1:
				imagefilledrectangle($img, $x1, $y1, $w1, $h1, $black);
				break;
			case 3:
				imagefilledrectangle($img, $x2, $y1, $w2, $h1, $black);
				break;
			case 2:
				imagefilledrectangle($img, $x1, $y3, $w1, $h2, $black);
				break;
			case 4:
				imagefilledrectangle($img, $x2, $y3, $w2, $h2, $black);
				break;
		}
	}
	function show(){
		global $img;
		ob_start();
		imagejpeg($img, NULL, 100);
		$rawImageBytes = ob_get_clean();
		readfile("data:image/jpeg;base64," . base64_encode($rawImageBytes));
	}
	fillBlock();
	//view();
	show();
	exit();
}
require_once './logout.php';
require_once './LoginCheckHeader.php';
check_student();
define("DB", "elaonlin_eladb");
define("TABLE", "users");
if(isset($_POST['an'])){
	$an = $_POST['an'];
	$name = $_POST['name'];
	$fid = $_POST['id'];
	$uid = $_POST['uid'];
	$con = mysql_connect(HOST, USER, PASSWORD, DBFR);
	mysql_select_db(DBFR);
	$ftb = $fid . 'frm' . $name;
	$query = saveAnsQuery($an, $ftb, $uid);
	$result = mysql_query($query, $con);
	if($result === true){
		$result = 'Success!';
	}else{
		$result = 'Error!';
	}
	exit($result);
}
function saveAnsQuery($an, $ftb, $uid){
	$query = "INSERT INTO `elaonlin_elaform`.`$ftb`   VALUES ( '$uid', "; 
	foreach($an as $key=>$val){
		if($val['type'] === 't'){
			$query .= " '" . $val['i'] . "',";
		}else{
			$query .= " '" . $val['str'] . "',";
		}
	}
	$query[strlen($query)-1]= " ";
	$query .= ");";
	return $query;
}
$msgvisible = "none";
$msg = "";
$incVis = "hidden";
$cls = "has-error";
$fileErr = "hidden";
$filename = "";
$filest = "";
$stmsg = ""; //status message
//$usrRole = getUserRole();
//$teacher = getTeacher();
$stu = getStu();
$stu = getStuResult($stu);
$hasForm = false;
$fid = NULL;
function checkClassForm(){
	global $stu, $hasForm, $fid;
	$con = mysql_connect(HOST, USER, PASSWORD, DBCL);
	mysql_select_db(DBCL);
	foreach($stu['cl'] as $clid){
		$frm = getClassForm($clid, $con);
		if($frm !== 'none'){
			if(checkForms($frm) === false){
				$fid = $frm;
				$hasForm = true;
				break;
			}
		}
	}
	mysql_close($con);
}
function getClassForm($clid, $con){
	$result = mysql_query("SELECT `frm` FROM `clslist` WHERE `id`='$clid';", $con);
	$row = mysql_fetch_array($result);
	return $row['frm'];
}
function checkForms($fid){
	global $stu;
	$con = mysql_connect(HOST, USER, PASSWORD, DBFR);
	mysql_select_db(DBFR);
	$result = mysql_query("SELECT `name` FROM `flist` WHERE `id`='$fid';", $con);
	$row = mysql_fetch_array($result);
	return checkFromFill(($fid . 'frm' . $row['name']), $con, $stu['mail']);
}
function checkFromFill($ftb, $con, $uid){
	$result = mysql_query("SELECT `uid` FROM `$ftb` WHERE `uid`='$uid';", $con);
	$row = mysql_fetch_array($result);
	if($row['uid'] !== $uid){
		$result = false;
	}else{
		$result = true;
	}
	mysql_close($con);
	return $result;
}
if($stu['cl'] == NULL){
	$stmsg .= "<br>No Class!";
	$msgvisible = "";
}else{
	checkClassForm();
}
if($stu['result'] == NULL){
	$stmsg .= "<br>No Result!";
	$msgvisible = "";
}

require_once './back.php';
logoutHTML();
if(isset($_GET['oksubmit'])){
	$msgvisible = "none";
}
if($hasForm === false || $stu['result'] == NULL){
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
				<form action="viewResult.php" class="form-horizontal" method="get" role="form">
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
			<div class="bg-info" style="margin-top: -16px; width: 100%; height: 100%">
				<div class="bg-primary" style="position: fixed; width: 100%; z-index: 10;">
					<h3 class="text-center"> Set Student's Result <em> <?php echo $teacher['fn']; ?> </em> </h3>
				</div>
				<form class=" bg-info form-horizontal col-xs-12" style="padding-top: 50px" action="viewResult.php" method="get" role="form">
					<div class="row">
						<div class="col-xs-6" >
							<div class="form-group">
								<label for="subject" class="col-sm-2 control-label">Results:</label>
								<p class="col-sm-12 help-block">Click on a result to show.</p>
								<table id="stu" style="width: 100%; background-color: white; cursor: pointer;" class="col-xs-offset-0 table  table-hover table-condensed">
									<tr id='headerTR' style="cursor: default">
										<th class="text-successs bg-primary" style="width: 5%;">
											#
										</th>
										<th class="text-successs bg-primary " style="width: 5%">
											$
										</th>
										<th class="text-successs bg-primary">
											Class
										</th>
										<th class="text-successs bg-primary">
											Teacher
										</th>
										<th class="text-successs bg-primary"  style="width: 30%">
											Status
										</th>
									</tr>
									<?php
									$index = 1;
									if($stu['result'] != NULL){
										foreach($stu['result'] as $st){
											?>
											<tr <?php echo 'class="' . $st['clid'] . '"'; ?>>
												<td>
													<?php echo $index; ?>
												</td>
												<td>
													<input  type="radio" <?php echo 'id="' . $st['clid'] . '"'; ?> name="stu" value="<?php echo $st['id'] ?>" > 
												</td>
												<td class="hidden fname">
													<?php echo $stu['fn']; ?>
												</td>
												<td class="hidden lname">
													<?php echo $stu['ln']; ?>
												</td>
												<td>
													<?php echo $st['clname']; ?>
												</td>
												<td class="thn">
													<?php
													$usr = getUserNameById($st['teacher']);
													echo $usr['fn'] . " " . $usr['ln'];
													?>
												</td>
												<td class="status text-center small " style="border: 1px solid black">
													<?php
													$x = $st['pc'];
													if($x == 1){
														echo 'Failed';
													}else if($x == 2){
														echo 'Passed';
													}else if($x == 3){
														echo 'Passed Conditionally';
													}else if($x == 4){
														echo 'Passed as the Top Student';
													}else{
														echo 'No Result';
													}
													?>
												</td>
												<td class="hidden" id="statusId">
													<?php echo $st['pc']; ?>
												</td>
												<td class="hidden" id='stuClassIdTr'>
													<?php echo $st['clid']; ?>
												</td>
												<td class="hidden" id='stuClassNameTr'>
													<?php echo $st['clname']; ?>
												</td>
												<td class="hidden" id='ClassActivityInput'>
													<?php echo $st['ClassActivity']; ?>
												</td>
												<td class="hidden" id='SpeakingInput'>
													<?php echo $st['Speaking']; ?>
												</td>
												<td class="hidden" id='MidtermInput'>
													<?php echo $st['Midterm']; ?>
												</td>
												<td class="hidden" id='FinalInput'>
													<?php echo $st['Final']; ?>
												</td>
												<td class="hidden" id='TotalInput'>
													<?php echo $st['Total']; ?>
												</td>

											</tr>
											<?php
											$index++;
										}
									}
									?>
								</table>
							</div>
						</div>
						<div class=" col-xs-6">
							<div id="MarkForm" class="bg-success" style="position: fixed; border: 2px dotted black; height: 600px; border-radius: 5px; margin-top: 1.2vh; width: 48vw; background: rgb(225,255,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(225,255,255,1) 0%, rgba(225,255,255,1) 5%, rgba(253,255,255,1) 10%, rgba(230,248,253,1) 30%, rgba(200,238,251,1) 54%, rgba(190,228,248,1) 75%, rgba(177,216,245,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(225,255,255,1)), color-stop(5%,rgba(225,255,255,1)), color-stop(10%,rgba(253,255,255,1)), color-stop(30%,rgba(230,248,253,1)), color-stop(54%,rgba(200,238,251,1)), color-stop(75%,rgba(190,228,248,1)), color-stop(100%,rgba(177,216,245,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(225,255,255,1) 0%,rgba(225,255,255,1) 5%,rgba(253,255,255,1) 10%,rgba(230,248,253,1) 30%,rgba(200,238,251,1) 54%,rgba(190,228,248,1) 75%,rgba(177,216,245,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(225,255,255,1) 0%,rgba(225,255,255,1) 5%,rgba(253,255,255,1) 10%,rgba(230,248,253,1) 30%,rgba(200,238,251,1) 54%,rgba(190,228,248,1) 75%,rgba(177,216,245,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(225,255,255,1) 0%,rgba(225,255,255,1) 5%,rgba(253,255,255,1) 10%,rgba(230,248,253,1) 30%,rgba(200,238,251,1) 54%,rgba(190,228,248,1) 75%,rgba(177,216,245,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(225,255,255,1) 0%,rgba(225,255,255,1) 5%,rgba(253,255,255,1) 10%,rgba(230,248,253,1) 30%,rgba(200,238,251,1) 54%,rgba(190,228,248,1) 75%,rgba(177,216,245,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e1ffff', endColorstr='#b1d8f5',GradientType=0 ); /* IE6-9 */">
								<div id="marks">
									<div class="form-group">
										<label  class="col-sm-3 control-label lead" ><strong>Student:</strong></label>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><label  class="control-label" id="stuName"></label></strong>
										<input type="hidden" id='stuFn' name="FirstName" value="NULL">
										<input type="hidden" id='stuThName' name="TeachersName" value="NULL">
										<input type="hidden" id='stuClassNameInput' name="className" value="NULL">
										<input type="hidden" id='stuClassIdInput' name="classId" value="NULL">
										<input type="hidden" id='statusIdInput' name="pc" value="NULL">
									</div>
									<div class="form-group">
										<label for="ClassActivity" class="col-sm-3 control-label lead">Class Activity:</label>
										<div class="col-sm-9">
											<div class="col-xs-11">
												<input disabled="" type="range" id='ClassActivity' name='ClassActivity'  class="disabled col-xs-5 has-feedback" value="0" min="0" max="25"  style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
												<input type="range" id='ClassActivity' name='ClassActivity'  class=" hidden col-xs-5 has-feedback" value="0" min="0" max="25"  style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
												<p style="display: inline">0</p>
												<p style="display: inline; float: right">25</p>
											</div>
											<div class='col-xs-1' style="margin-top: 5px;">
												<strong class='mark' id='ClassActivityValue'>0 </strong>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="Speaking" class="col-sm-3 control-label lead">Speaking:</label>
										<div class="col-sm-9">
											<div class="col-xs-11">
												<input disabled="" type="range" id='Speaking'  name='Speaking' class="disabled  col-xs-5 has-feedback" value="0" min="0" max="25" style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
												<input type="range" id='Speaking'  name='Speaking' class="hidden  col-xs-5 has-feedback" value="0" min="0" max="25" style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
												<p style="display: inline">0</p>
												<p style="display: inline; float: right">25</p>
											</div>
											<div class='col-xs-1' style="margin-top: 5px;">
												<strong class='mark' id='SpeakingValue'>0 </strong>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="Midterm" class="col-sm-3 control-label lead">Midterm Exam:</label>
										<div class="col-sm-9">
											<div class="col-xs-11">
												<input  disabled="" type="range" id='Midterm' name='Midterm' class="disabled  col-xs-5 has-feedback" value="0" min="0" max="10" style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
												<input   type="range" id='Midterm' name='Midterm' class="hidden  col-xs-5 has-feedback" value="0" min="0" max="10" style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
												<p style="display: inline">0</p>
												<p style="display: inline; float: right">10</p>
											</div>
											<div class='col-xs-1' style="margin-top: 5px;">
												<strong class='mark' id='MidtermValue'>0 </strong>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="Final" class="col-sm-3 control-label lead">Final Exam:</label>
										<div class="col-sm-9">
											<div class="col-xs-11">
												<input disabled="" type="range" id='Final' name='Final'  class="disabled col-xs-5 has-feedback" value="0" min="0" max="40"  style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
												<input type="range" id='Final' name='Final'  class="hidden col-xs-5 has-feedback" value="0" min="0" max="40"  style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
												<p style="display: inline">0</p>
												<p style="display: inline; float: right">40</p>
											</div>
											<div class='col-xs-1' style="margin-top: 5px;">
												<strong class='mark' id='FinalValue'>0 </strong>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="Total" class="col-sm-3 control-label lead">Total Score:</label>
										<div class="col-sm-9">
											<div class="col-xs-11">
												<input disabled="" type="range" id='Total' name='Total' class="disabled col-xs-5 has-feedback" value="0" min="0" max="100"  style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
												<input  type="range" id='Total' name='Total' class="hidden col-xs-5 has-feedback" value="0" min="0" max="100"  style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
												<p style="display: inline">0</p>
												<p style="display: inline; float: right">100</p>
											</div>
											<div class='col-xs-1' style="margin-top: 5px;">
												<strong id='TotalValue'>0 </strong>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="Failed" class="col-sm-3 control-label lead">Present Condition:</label>
									<div class="col-sm-9">
										<div class="col-xs-11" style="border: 1px dotted black; border-radius: 5px; padding: 10px;  cursor: default; background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
											<input disabled="" type="radio" id="Failed" value="Failed" > <strong id="FailedLabale" style="cursor: default"> &nbsp;Failed</strong><br>
											<input disabled="" type="radio" id="Passed"  value="Passed"> <strong id="PassedLabale" style="cursor: default">&nbsp;Passed</strong><br>
											<input disabled="" type="radio" id="PassedConditionally" value="PassedConditionally"><strong id="PassedConditionallyLable" style="cursor: default">&nbsp; Passed Conditionally</strong><br>
											<input disabled="" type="radio" id="PassedastheTopStudent"  value="PassedastheTopStudent"><strong id="PassedastheTopStudentLable" style="cursor: default">&nbsp; Passed as the Top Student</strong>
										</div>
										<div class='col-xs-1' style="margin-top: 5px;">

										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<div class="col-xs-11">
											<button type="submit" name="submit" class="btn col-xs-12 btn-danger btn-lg" >Download Image</button>
										</div>

									</div>
								</div>
							</div>
							<br><br>

						</div>
					</div>
				</form>
			</div>
			<script>
				$("#backBtn").click(function(){
					redirect("stu.php");
				});
				$("#MarkForm").hide();
				$(document).ready(function(){
					var stuTR = $("#stu").find("tr");
					stuTR.each(function(){
						var st = $(this).find(".status");
						var value = $(this).find(".status").html();
						if(value !== undefined){
							value = value.trim();
							console.log(value);
							if(value === "Failed"){
								$(st).addClass("bg-danger");
							} else if(value === "Passed"){
								$(st).addClass("bg-success");
							} else if(value === "Passed Conditionally"){
								$(st).addClass("bg-warning");
							} else if(value === "Passed as the Top Student"){
								$(st).addClass("bg-primary");
							} else if(value === "No Result"){
								$(st).addClass("bg-info");
							}
						}
					});
				});
				function printValue(str){
					var input = "#" + str;
					var inputValue = input + "Value";
					$(inputValue).text($(input).val());
					calculateTotal();
					return true;
				}
				function calculateTotal(){
					var mark = $("#MarkForm").find(".mark");
					var totalValue = 0;
					mark.each(function(){
						totalValue += parseInt($(this).text());
					});
					$("#Total").val(totalValue);
					$("#TotalValue").text(totalValue);
					return true;
				}
				var a = ['Failed', 'Passed', 'PassedConditionally', 'PassedastheTopStudent'];
				var i = 0;
				$("#stu tr").click(function(){
					if($(this).attr("id") === "headerTR"){
						return false;
					}
					var stuClassId = $(this).find("#stuClassIdTr").html().trim();
					var stuClassName = $(this).find("#stuClassNameTr").html().trim();
					var ClassActivity = $(this).find("#ClassActivityInput").html().trim();
					var Speaking = $(this).find("#SpeakingInput").html().trim();
					var Midterm = $(this).find("#MidtermInput").html().trim();
					var Final = $(this).find("#FinalInput").html().trim();
					var Total = $(this).find("#TotalInput").html().trim();
					var PresentCondition = $(this).find("#statusId").html().trim();
					var markArr = [ClassActivity, Speaking, Midterm, Final, Total];
					console.log(markArr);
					var i = 0;
					var j = 0;
					$("#marks").find("#statusIdInput").val(PresentCondition);
					$("#marks").find("input").each(function(){
						if(j > 4){
							$(this).val(markArr[i]);
							printValue($(this).attr("id"));
						}
						if(j > 4 && j % 2 === 0){
							i++;
						}
						j++;
					});
					var value = $(this).find(".status").html();
					if(value !== undefined){
						value = value.trim();
						console.log(value);
						if(value === "Failed"){
							$("#Failed").prop('checked', true);
						} else if(value === "Passed"){
							$("#Passed").prop('checked', true);
						} else if(value === "Passed Conditionally"){
							$("#PassedConditionally").prop('checked', true);
						} else if(value === "Passed as the Top Student"){
							$("#PassedastheTopStudent").prop('checked', true);
						} else if(value === "No Result"){
							$("#Failed").prop('checked', true);
						}
					}
					$("#MarkForm").show();
					$("#stuClassIdInput").val(stuClassId);
					$("#stuClassNameInput").val(stuClassName);
					$("#stu").find("tr").each(function(){
						$(this).removeClass("bg-success");
					});
					if($(this).hasClass("bg-success")){
						$(this).find("td > input").prop('checked', false);
					} else{
						$(this).find("td > input").prop('checked', true);
						$(this).addClass("bg-success");
					}
					var fn = $(this).find(".fname").html().trim();
					var ln = $(this).find(".lname").html().trim();
					var thn = $(this).find(".thn").html().trim();
					$("#MarkForm").find("#stuName").html(fn + " " + ln);
					$("#stuFn").val(fn + ' ' + ln);
					$("#stuThName").val(thn);
				});

				//	        $(this).find("td > input").prop('checked', true);
				//	        $("#stb").append('<tr class="' + $(this).find("td").html().trim() + '"><td class="num">' + stunum + '</td><td>' + $(this).find(".fname").html().trim() + '</td><td>' + $(this).find(".lname").html().trim() + '</td></tr>');

			</script>		  
		</body>
	</html>
	<?php
}else{
	$frm = getFormByID($fid);
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Report Card</title>
			<style>
				.panel-title{
					font-size: 14px;
				}

				@font-face {
					font-family: 'Yekan';
					src: url('../font/BYekan.eot?#') format('eot'), /* IE6–8 */
						url('../font/BYekan.woff') format('woff'), url('../font/BYekan.ttf') format('truetype'); /* Saf3—5, Chrome4+, FF3.5, Opera 10+ */
				}
				body{
					font-family: defualt, Yekan;
				}
				.ans{
					cursor: pointer;
				}
				.ans:hover{

					-webkit-animation: cssAnimation 1s 1 ease;
					-moz-animation: cssAnimation 1s 1 ease;
					-o-animation: cssAnimation 1s 1 ease;
					-webkit-animation-fill-mode: forwards; /* Safari and Chrome */
					animation-fill-mode: forwards;
				}
				@-webkit-keyframes cssAnimation {
					from {  background-color: white; }
					to {  background-color: #afd9ee; }
				}

			</style>
		</head>
		<body> 
			<div class="bg-info" style="margin-top: 0px; height: 100%">
				<div style="position: fixed; width: 100%; z-index: 12; opacity: 1; height: 40px;" class=" bg-primary">
					<h3 class="text-center" style="margin-top: 10px"> برای مشاهده کارنامه لطفا فرم زیر را تکمیل فرمایید.</h3>
				</div><br/><br/><br/>
				<div class="form-inline col-xs-12"   >
					<div class="" style="direction: rtl">
						<div style="margin-right: 15vw; font-size: 18px">
							<strong><span>نام فرم:</span></strong><span id="frmn">&nbsp;<?php echo $frm['name']; ?>&nbsp;</span><br/><br/>
							<strong><span>توضیح:</span></strong><span id="frmn">&nbsp;<?php echo $frm['com']; ?>&nbsp;</span><br/>
							<button class="btn form-control btn-success " style="float: left; margin-left: 70px; width: 90px" onclick="send()">ارسال</button>
						</div>
						<div class="panel-group col-xs-12" id="qs" style="margin-top: 0px; direction: rtl; padding: 30px 70px 70px ;"></div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="modalerr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="direction: rtl">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="myModalLabel" style="text-align: center"></h4>
						</div>
						<div class="modal-body"></div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<script>
				var zz = '<?php print_r(json_encode($frm['struct'])) ?>';
				var name = '<?php echo $frm['name']; ?>';
				var id = '<?php echo $frm['id']; ?>';
				var qs = JSON.parse(zz);
				var uid = '<?php echo $stu['mail']; ?>';
				console.log(qs);
				Number.prototype.toPersian = function(){
					var id = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
					return this.toString().replace(/[0-9]/g, function(w){
						return id[+w]
					});
				}
				updateUi();
				$('#c0').collapse('show');
				function unicodeToChar(text){
					return text.replace(/\\u[\dABCDEFabcdef][\dABCDEFabcdef][\dABCDEFabcdef][\dABCDEFabcdef]/g,
							function(match){
								return String.fromCharCode(parseInt(match.replace(/\\u/g, ''), 16));
							});
				}
				function Question(str, type, s1, s2, s3, s4){
					this.str = str;
					this.type = type;
					this.s1 = s1;
					this.s2 = s2;
					this.s3 = s3;
					this.s4 = s4;
				}
				function Answer(type, str, i){
					this.type = type;
					this.str = str;
					this.i = i;
				}
				function update(q){
					$('#qs').append('<div class="panel panel-default" style="background: none">' +
							'<div class="panel-heading qh" style="cursor: pointer; background: none; background-color: black;color: white; border: 1px solid black; border-top-right-radius: 10px; border-top-left-radius: 10px;"  data-parent="#qs" data-toggle="collapse" href="#c' + qs.indexOf(q) + '">' +
							'<h4 class="panel-title " style="cursor: pointer">' +
							(qs.indexOf(q) + 1).toPersian() + ') ' + q.str +
							'<span style="float: left" class="' + (q.type === 'x' ? ('glyphicon glyphicon-text-width') : ('glyphicon glyphicon-ok')) + '"></span>' +
							'</h4>' +
							'</div>' +
							'<div id="c' + qs.indexOf(q) + '" class="panel-collapse collapse">' +
							'<div class="panel-body" style="padding: 0px; direction: rtl; background: white">' +
							setBody(q) +
							'</div>' +
							'</div>' +
							'</div>');
				}
				function updateUi(){
					$('#qs').html('');
					$.each(qs, function(key, val){
						update(val);
					});
				}
				function send(){
					var an = [];
					var send = true;
					$.each(qs, function(key, val){
						if(send !== true){
							return;
						}
						var i = -1;
						var str = "";
						if(val.type === 't'){
							i = getTestSelection(key);
							if(i === -1){
								send = false;
								$('#modalerr .modal-title').html('سوال بدون پاسخ');
								$('#modalerr .modal-body').html(' لطفا به سوال شماره' + ' ' + (key + 1) + ' ' + 'پاسخ دهید');
								$('#modalerr').modal('show');
								return;
							}
						} else{
							str = $('#c' + key).children().children().val();
							if(str === ""){
								send = false;
								$('#modalerr .modal-title').html('سوال بدون پاسخ');
								$('#modalerr .modal-body').html('لطفا به سوال شماره' + (key + 1) + 'پاسخ دهید');
								$('#modalerr').modal('show');
								return;
							}
						}
						var a = new Answer(val.type, str, i);
						an.push(a);
					});
					if(send !== true)
						return;
					var a = {uid: uid, name: name, id: id, an: an};
					$('#modalerr .modal-title').html('ثبت فرم');
					$('#modalerr .modal-body').html('در حال برقراری ارتباط با سرور...');
					$('#modalerr').modal('show');
					$.post('viewResult.php', a, function(data){
						$('#modalerr .modal-body').html( data === 'Success!' ? ('فرم با موفقیت ذخیره شد' + '<br/>' + '<span style="direction: rtl">Redirecting to Report Cards.</span>') : 'Err saving form');;
						setTimeout(function(){
							window.location.reload();
						}, 500);
						
					});
				}
				function spanclc(sp){
					sp.children().prop('checked', 'checked');
				}
				function setBody(q){
					var res = "";
					if(q.type === 't'){
						var i = 1;
						var s = {};
						$.each(q, function(key, val){
							if(key !== 'str' && key !== 'type')
								s[i] = '<span class="text-center col-xs-6 col-sm-3 ans" style="height: 40px; margin: 0px; padding: 10px" onclick="spanclc($(this))">' + (i++).toPersian() + ')&nbsp<input type="radio" name="' + 'Q' + qs.indexOf(q) + '">&nbsp' + val + '</span>';
						});
						res += s[4] + s[3] + s[2] + s[1];
					} else{
						res += '<textarea class="form-control" id="' + 'Q' + qs.indexOf(q) + '" placeholder="" style="width: 100%; height: 70px;"></textarea>';
					}
					return res;
				}

				function getTestSelection(i){
					var test = $('#c' + i).children().children().children();
					var res = -1;
					if(test.eq(0).prop('checked') === true){
						res = 4;
					} else if(test.eq(1).prop('checked') === true){
						res = 3;
					} else if(test.eq(2).prop('checked') === true){
						res = 2;
					} else if(test.eq(3).prop('checked') === true){
						res = 1;
					}
					return res;
				}
				$("#backBtn").click(function(){
					redirect("stu.php");
				});
			</script>
		</body>
	</html>
<?php }
?>

                            
                            
                            
                            
                            