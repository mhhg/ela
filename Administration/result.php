<?php
require_once './LoginCheckHeader.php';
require_once './db_definition.php';
check_teacher();
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
if (isset($_GET['submit'])) {
	$msgvisible = "";
	$stu['id'] = $_GET['stu'];
	$stu['clid'] = $_GET['classId'];
	$stu['clname'] = $_GET['className'];
	$stu['PresentCondition'] = $_GET['PresentCondition'];
	$stuClassTableName = $stu['clid'] . "class" . $stu['clname'];
	$stid = $stu['id'];
	$stClid = $stu['clid'];
	$ClassActivity = $_GET['ClassActivity'];
	$Speaking = $_GET['Speaking'];
	$Midterm = $_GET['Midterm'];
	$Final = $_GET['Final'];
	$Total = $_GET['Total'];
	$fn = $_GET['FirstName'];
	$ln = $_GET['LastName'];
	$PresentCondition = $stu['PresentCondition'];
	$PresentConditionValue = -1;
	if ($PresentCondition == "Failed") {
		$PresentConditionValue = 1;
	} else if ($PresentCondition == "Passed") {
		$PresentConditionValue = 2;
	} else if ($PresentCondition == "PassedConditionally") {
		$PresentConditionValue = 3;
	} else if ($PresentCondition == "PassedastheTopStudent") {
		$PresentConditionValue = 4;
	} else {
		$stmsg .= "Error Fetching Student Condition";
		exit();
	}
	$con = mysql_connect(HOST, USER, PASSWORD, DBCL);
	mysql_select_db(DBCL, $con);
	$query = "UPDATE  `elaonlin_elaclass`.`$stuClassTableName` SET `status` = '1', `PresentCondition` = '$PresentConditionValue', `ClassActivity` = '$ClassActivity', `Speaking` = '$Speaking',  `Midterm` = '$Midterm', `Final` = '$Final', `Total` = '$Total'  WHERE  `id` = '$stid' ;";
	if (mysql_query($query, $con)) {
		$stmsg .= "Result has been set successfully.<br>"
			  . "Student: $fn" . " " . $ln . "<br>"
			  . "ClassActivity: '$ClassActivity',  " . "<br>"
			  . "Speaking: '$Speaking',  " . "<br>"
			  . "Midterm: '$Midterm',  " . "<br>"
			  . "Final: '$Final',  " . "<br>"
			  . "Total: '$Total',  " . "<br>"
			  . "PresentCondition: '$PresentCondition',  ";
	} else {
		$x = mysql_error();
		$stmsg .= "Result Set Failed. Err: $x";
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
			<form action="result.php" class="form-horizontal" method="get" role="form">
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
		<div class="bg-info" style="margin-top: -16px; width: 100%; height: 100vh">
			<div class="bg-primary" style="position: fixed; width: 100%; z-index: 10;">
				<h3 class="text-center"> Report Cards,<em> <?php echo $teacher['fn']; ?> </em> </h3>
			</div><br>
			<form class=" bg-info form-horizontal col-xs-12" style="padding-top: 50px" onsubmit="return validate()" action="result.php" method="get" role="form">
				<div class="row">
					<div class="col-xs-6" >
						<div class="form-group">
							<label for="subject" class="col-sm-2 control-label">Student List:</label>
							<table id="stu" style="width: 100%; background-color: white; cursor: pointer;" class="col-xs-offset-0 table  table-hover table-condensed">
								<tr id='headerTR' style="cursor: default">
									<th class="text-successs bg-primary" style="width: 5%;">
										#
									</th>
									<th class="text-successs bg-primary " style="width: 5%">
										$
									</th>
									<th class="text-successs bg-primary">
										First Name
									</th>
									<th class="text-successs bg-primary">
										Last Name
									</th>
									<th class="col-xs-1 ext-successs bg-primary">
										<small>Class</small>
									</th>
									<th class=" ext-successs bg-primary text-center" style="width: 26%">
										<small>Status</small>
									</th>
								</tr>
								<?php
								$index = 1;
								$lastname = array();
								foreach ($stuteacher as $key => $row) {
									$lastname[$key] = $row['lname'];
								}
								array_multisort($lastname, SORT_ASC, $stuteacher);
								foreach ($stuteacher as $st) {
									?>
									<tr <?php echo 'class="' . $st['clid'] . '"'; ?>>
										<td>
											<?php echo $index; ?>
										</td>
										<td>
											<input  type="radio" <?php echo 'id="' . $st['clid'] . '"'; ?> name="stu" value="<?php echo $st['id'] ?>" > 
										</td>
										<td class="fname">
											<?php echo $st['fn']; ?>
										</td>
										<td class="lname">
											<?php echo $st['ln']; ?>
										</td>
										<td>
											<?php echo $st['clname']; ?>
										</td>

										<td class="status text-center small " style="border: 1px solid black">
											<?php
											$x = $st['pc'];
											if ($x == 1) {
												echo 'Failed';
											} else if ($x == 2) {
												echo 'Passed';
											} else if ($x == 3) {
												echo 'Passed Conditionally';
											} else if ($x == 4) {
												echo 'Passed as the Top Student';
											} else {
												echo 'No Result';
											}
											?>
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
								?>
							</table>
						</div>
						<label for="to" class="col-sm-2 control-label">Class: </label>
						<div class="form-group ">
							<table id="cls" style="width: 100%; background-color: white; cursor: default;" class="col-xs-offset-0 table  table-condensed">
								<tr>
									<th class="text-successs bg-primary" style="width: 4%;">
										#
									</th>
									<th class="col-xs-2 text-successs bg-primary" >
										<small>Class</small>
									</th>
								</tr>
								<?php
								$index = 1;
								foreach ($cls as $cl) {
									?>
									<tr <?php echo 'id="' . $cl['id'] . '"'; ?>>
										<td>
											<?php echo $index; ?>
										</td>
										<td>
											<?php echo $cl['name']; ?>
										</td>
										<td class="hidden identify">
											<?php echo $cl['id']; ?>
										</td>
									</tr>
									<?php
									$index++;
								}
								?>
							</table>
						</div>
					</div>
					<div class=" col-xs-6">
						<div id="MarkForm" class="bg-success" style="position: fixed; border: 2px dotted black;  border-radius: 5px; margin-top: 0vh; width: 48vw; background: rgb(225,255,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(225,255,255,1) 0%, rgba(225,255,255,1) 5%, rgba(253,255,255,1) 10%, rgba(230,248,253,1) 30%, rgba(200,238,251,1) 54%, rgba(190,228,248,1) 75%, rgba(177,216,245,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(225,255,255,1)), color-stop(5%,rgba(225,255,255,1)), color-stop(10%,rgba(253,255,255,1)), color-stop(30%,rgba(230,248,253,1)), color-stop(54%,rgba(200,238,251,1)), color-stop(75%,rgba(190,228,248,1)), color-stop(100%,rgba(177,216,245,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(225,255,255,1) 0%,rgba(225,255,255,1) 5%,rgba(253,255,255,1) 10%,rgba(230,248,253,1) 30%,rgba(200,238,251,1) 54%,rgba(190,228,248,1) 75%,rgba(177,216,245,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(225,255,255,1) 0%,rgba(225,255,255,1) 5%,rgba(253,255,255,1) 10%,rgba(230,248,253,1) 30%,rgba(200,238,251,1) 54%,rgba(190,228,248,1) 75%,rgba(177,216,245,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(225,255,255,1) 0%,rgba(225,255,255,1) 5%,rgba(253,255,255,1) 10%,rgba(230,248,253,1) 30%,rgba(200,238,251,1) 54%,rgba(190,228,248,1) 75%,rgba(177,216,245,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(225,255,255,1) 0%,rgba(225,255,255,1) 5%,rgba(253,255,255,1) 10%,rgba(230,248,253,1) 30%,rgba(200,238,251,1) 54%,rgba(190,228,248,1) 75%,rgba(177,216,245,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e1ffff', endColorstr='#b1d8f5',GradientType=0 ); /* IE6-9 */">
							<div id="marks">
								<div class="form-group">
									<label  class="col-sm-3 control-label lead" ><strong>Student:</strong></label>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><label  class="control-label" id="stuName"></label></strong>
									<input type="hidden" id='stuFn' name="FirstName" value="NULL">
									<input type="hidden" id='stuLn' name="LastName" value="NULL">
									<input type="hidden" id='stuClassNameInput' name="className" value="NULL">
									<input type="hidden" id='stuClassIdInput' name="classId" value="NULL">
								</div>
								<div class="form-group">
									<label for="ClassActivity" class="col-sm-3 control-label lead">Class Activity:</label>
									<div class="col-sm-9">
										<div class="col-xs-11">
											<input type="range" id='ClassActivity' name='ClassActivity' class="form-control col-xs-5 has-feedback" value="0" min="0" max="25" oninput="return printValue('ClassActivity');" style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
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
											<input type="range" id='Speaking' name='Speaking' class="form-control col-xs-5 has-feedback" value="0" min="0" max="25" oninput="return printValue('Speaking');" style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
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
											<input type="range" id='Midterm' name="Midterm" class="form-control col-xs-5 has-feedback" value="0" min="0" max="10" oninput="return printValue('Midterm');" style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
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
											<input type="range" id='Final' name="Final" class="form-control col-xs-5 has-feedback" value="0" min="0" max="40" oninput="return printValue('Final');" style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
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
											<input type="range" id='Total' name="Total" class="disabled col-xs-5 has-feedback" value="0" min="0" max="100" oninput="return printValue('Total');" style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">
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
										<input type="radio" id="Failed" name="PresentCondition" value="Failed" checked=""> <strong id="FailedLabale" style="cursor: pointer"> &nbsp;Failed</strong><br>
										<input type="radio" id="Passed" name="PresentCondition" value="Passed"> <strong id="PassedLabale" style="cursor: pointer">&nbsp;Passed</strong><br>
										<input type="radio" id="PassedConditionally" name="PresentCondition" value="PassedConditionally"><strong id="PassedConditionallyLable" style="cursor: pointer">&nbsp; Passed Conditionally</strong><br>
										<input type="radio" id="PassedastheTopStudent" name="PresentCondition" value="PassedastheTopStudent"><strong id="PassedastheTopStudentLable" style="cursor: pointer">&nbsp; Passed as the Top Student</strong>
									</div>
									<div class='col-xs-1' style="margin-top: 5px;">

									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<div class="col-xs-11">
										<button type="submit" name="submit" class="btn col-xs-12 btn-default" style="background: rgb(240,249,255); /* Old browsers */background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(240,249,255,1)), color-stop(47%,rgba(203,235,255,1)), color-stop(100%,rgba(161,219,255,1))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* IE10+ */background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 ); /* IE6-9 */">Set Result</button>
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
			$(document).ready(function() {
				var stuTR = $("#stu").find("tr");
				stuTR.each(function() {
					var st = $(this).find(".status");
					var value = $(this).find(".status").html();
					if (value !== undefined) {
						value = value.trim();
						console.log(value);
						if (value === "Failed") {
							$(st).addClass("bg-danger");
						} else if (value === "Passed") {
							$(st).addClass("bg-success");
						} else if (value === "Passed Conditionally") {
							$(st).addClass("bg-warning");
						} else if (value === "Passed as the Top Student") {
							$(st).addClass("bg-primary");
						} else if (value === "No Result") {
							$(st).addClass("bg-info");
						}
					}
				});
			});
			$("#FailedLabale").click(function() {
				$("#Failed").prop("checked", true);
			});
			$("#PassedLabale").click(function() {
				$("#Passed").prop("checked", "checked");
			});
			$("#PassedConditionallyLable").click(function() {
				$("#PassedConditionally").prop("checked", true);
			});
			$("#PassedastheTopStudentLable").click(function() {
				$("#PassedastheTopStudent").prop("checked", true);
			});
			var a = ['Failed', 'Passed', 'PassedConditionally', 'PassedastheTopStudent'];
			var i = 0;
//			   $("#radios").find("input").each(function() {
//				    $(this).val(a[i++]);
////				    alert($(this).val());
//			   })
//			   $("#Failed").val("Failed");
//			   $("#Passed").val("Passed");
//			   $("#PassedConditionally").val("PassedConditionally");
//			   $("#PassedastheTopStudent").val("PassedastheTopStudent");
			$("#MarkForm").hide();
			function printValue(str) {
				var input = "#" + str;
				var inputValue = input + "Value";
				$(inputValue).text($(input).val());
				calculateTotal();
				return true;
			}
			function calculateTotal() {
				var mark = $("#MarkForm").find(".mark");
				var totalValue = 0;
				mark.each(function() {
					totalValue += parseInt($(this).text());
				});
				$("#Total").val(totalValue);
				$("#TotalValue").text(totalValue);
				return true;
			}
			//	        var i = 1;;
			//	        $("#stu").find("tr").each(function() {
			//		    if(i % 2 === 0){
			//			$(this).css("backgroundColor", "white");
			//		    }
			//		    i++;
			//	        });
			$("#stu tr").click(function() {
				if ($(this).attr("id") === "headerTR") {
					return false;
				}
				var stuClassId = $(this).find("#stuClassIdTr").html().trim();
				var stuClassName = $(this).find("#stuClassNameTr").html().trim();
				var ClassActivity = $(this).find("#ClassActivityInput").html().trim();
				var Speaking = $(this).find("#SpeakingInput").html().trim();
				var Midterm = $(this).find("#MidtermInput").html().trim();
				var Final = $(this).find("#FinalInput").html().trim();
				var Total = $(this).find("#TotalInput").html().trim();
				var markArr = [ClassActivity, Speaking, Midterm, Final, Total];
				console.log(markArr);
				var i = 0;
				var j = 0;
				$("#marks").find("input").each(function() {
					if (j > 3) {
						$(this).val(markArr[i++]);
						console.log(this);
						printValue($(this).attr("id"));
					}
					j++;
				});
				var value = $(this).find(".status").html();
				if (value !== undefined) {
					value = value.trim();
					console.log(value);
					if (value === "Failed") {
						$("#Failed").prop('checked', true);
					} else if (value === "Passed") {
						$("#Passed").prop('checked', true);
					} else if (value === "Passed Conditionally") {
						$("#PassedConditionally").prop('checked', true);
					} else if (value === "Passed as the Top Student") {
						$("#PassedastheTopStudent").prop('checked', true);
					} else if (value === "No Result") {
						$("#Failed").prop('checked', true);
					}
				}
				calculateTotal();
				$("#MarkForm").show();
				$("#stuClassIdInput").val(stuClassId);
				$("#stuClassNameInput").val(stuClassName);
				$("#stu").find("tr").each(function() {
					$(this).removeClass("bg-success");
				});
				if ($(this).hasClass("bg-success")) {
					$(this).find("td > input").prop('checked', false);
				} else {
					$(this).find("td > input").prop('checked', true);
					$(this).addClass("bg-success");
				}
				var fn = $(this).find(".fname").html().trim();
				var ln = $(this).find(".lname").html().trim();
				$("#MarkForm").find("#stuName").html(fn + " " + ln);
				$("#stuFn").val(fn);
				$("#stuLn").val(ln);
			});

			//	        $(this).find("td > input").prop('checked', true);
			//	        $("#stb").append('<tr class="' + $(this).find("td").html().trim() + '"><td class="num">' + stunum + '</td><td>' + $(this).find(".fname").html().trim() + '</td><td>' + $(this).find(".lname").html().trim() + '</td></tr>');
			function validate() {
				i = 0;
				$("#radios").find("input").each(function() {
					$(this).val(a[i++]);
				})
				if ($("#subject").val() !== "" && $("#message").val() !== "") {
					return true;
				}
				if ($("#subject").val() === "" && $("#err").hasClass("hidden")) {
					$("#err").removeClass("hidden");
					$("#err").append("Subject is required.<br> ");
					return false;
				} else if ($("#subject").val() !== "") {
					$("#err").addClass("hidden");
				}
				if ($("#message").val() === "" && $("#errm").hasClass("hidden")) {
					$("#errm").removeClass("hidden");
					$("#errm").append("Message is empty.  Make sure you entered, then try again.");
					return false;
				} else if ($("#message").val() !== "") {
					$("#errm").addClass("hidden");
				}
				return false;

			}
			$("#backBtn").click(function() {
				redirect("teacher.php");
			});
		</script>
	</body>
</html>

                            
                            