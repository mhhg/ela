<?php
require_once 'db_definition.php';
define("TABLE","users");
define("ACTIVE","1");
define("FINISHED","2");
$con = mysql_connect(HOST, USER, PASSWORD, DB);
$query = selectAll(TABLE);
mysql_select_db(DB);
$result = mysql_query($query);
$TEACHERS;
$STUDENTS;
while($row = mysql_fetch_array($result)){
	$USERS[$row['id']]['pass'] = $row['pass'];
	$USERS[$row['id']]['role'] = $row['role'];
}
mysql_close($con);
function check_logged(){
	global $_SESSION, $USERS;
	if(!array_key_exists($_SESSION["logged"]['id'], $USERS)){
			require_once './logout.php';
		logout();
		exit();
	};
}
function check_admin($nav='true'){
	global $_SESSION, $USERS;
	if($_SESSION['logged']['role']!=Admin){
		require_once './logout.php';
		logout();
		exit();
	}else if ($nav === 'true'){
		require_once 'adminNav.php';
	}
}
function check_teacher(){
	global $_SESSION, $USERS;
	if($_SESSION['logged']['role']!=Admin&&$_SESSION['logged']['role']!=Teacher){
		require_once './logout.php';
		logout();
		exit();
	};
}
function check_student(){
	global $_SESSION, $USERS;
	if($_SESSION['logged']['role']!=Admin&&$_SESSION['logged']['role']!=Student){
		require_once './logout.php';
		logout();
		exit();
	};
}
//Get All Users part
function setTeachers(){
	global $TEACHERS;
	$con = mysql_connect(HOST, USER, PASSWORD, DB);
	$query = "Select * from users WHERE  `users`.`role` ='1';";
	mysql_select_db(DB);
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result)){
		$TEACHERS[$row['id']]['fname'] = $row['fname'];
		$TEACHERS[$row['id']]['lname'] = $row['lname'];
		$TEACHERS[$row['id']]['mail'] = $row['id'];
	}
	mysql_close($con);
}
function setStudents(){
	global $STUDENTS;
	$con = mysql_connect(HOST, USER, PASSWORD, DB);
	$query = "Select * from users WHERE  `users`.`role` ='0';";
	mysql_select_db(DB);
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result)){
		$STUDENTS[$row['id']]['fname'] = $row['fname'];
		$STUDENTS[$row['id']]['lname'] = $row['lname'];
		$STUDENTS[$row['id']]['mail'] = $row['id'];
	}
	mysql_close($con);
}
//Get One Student
function getStu(){
	$stu = array();
	$stid = getStid();
	if($stid===0){
		return 0;
	}
	$con = mysql_connect(HOST, USER, PASSWORD, DB);
	$query = "Select * from users WHERE  `users`.`id` ='$stid';";
	mysql_select_db(DB, $con);
	$result = mysql_query($query, $con);
	while($row = mysql_fetch_array($result)){
		$stu['mail'] = $row['id'];
		$stu['fn'] = $row['fname'];
		$stu['ln'] = $row['lname'];
		$stu['cl'] = $row['classid'];
		$stu['cl'] = decodeClass($stu);
	}
	$stu['pic'] = "http://elaonline.ir/usrpic/sample.jpeg";
	$x = "../usrpic/".$stu['mail'] . ".jpg";
	if(file_exists($x)){
		$stu['pic'] = $x;
	}
	mysql_close($con);
	return $stu;
}
function getStuClassesById($stid){
	$stu = array();
	$con = mysql_connect(HOST, USER, PASSWORD, DB);
	$query = "Select * from users WHERE  `users`.`id` ='$stid';";
	mysql_select_db(DB, $con);
	$result = mysql_query($query, $con);
	while($row = mysql_fetch_array($result)){
		$stu['id'] = $row['id'];
		$stu['cl'] = $row['classid'];
		$stu['cl'] = decodeClass($stu);
	}
	mysql_close($con);
	return $stu;
}
function getStuResult($stu){
	$con = mysql_connect(HOST, USER, PASSWORD, DBCL);
	mysql_select_db(DBCL, $con);
	if($stu['cl']==NULL){
		return $stu;
	}
	foreach($stu['cl'] as $clid){
		$query = "select * from clslist where `clslist`.`id` = '$clid';";
		$result = mysql_query($query, $con);
		$row = mysql_fetch_array($result);
		$clname = $row['name'];
		$teacher = $row['teacher'];
		$tb = $clid."class".$clname;
		$stid = $stu['mail'];
		$query = "select * from $tb where `$tb`.`id` = '$stid' AND `$tb`.`status` = '2';";
		$result = mysql_query($query, $con);
		if(!$result) return;
		$row = mysql_fetch_array($result);
		$pc = $row['PresentCondition'];
		if(checkPresentCondition($pc)){
			$stu['result'][$clid]['clid'] = $clid;
			$stu['result'][$clid]['clname'] = $clname;
			$stu['result'][$clid]['teacher'] = $teacher;
			$stu['result'][$clid]['ClassActivity'] = $row['ClassActivity'];
			$stu['result'][$clid]['Speaking'] = $row['Speaking'];
			$stu['result'][$clid]['Midterm'] = $row['Midterm'];
			$stu['result'][$clid]['Final'] = $row['Final'];
			$stu['result'][$clid]['Total'] = $row['Total'];
			$stu['result'][$clid]['pc'] = $row['PresentCondition'];
		}
	}
	mysql_close($con);
	return $stu;
}
function getUserNameById($id){
	$con = mysql_connect(HOST, USER, PASSWORD, DBCL);
	mysql_select_db(DB, $con);
	$query = "select * from users where `users`.`id` = '$id';";
	$result = mysql_query($query, $con);
	$row = mysql_fetch_array($result);
	$usr['fn'] = $row['fname'];
	$usr['ln'] = $row['lname'];
	mysql_close($con);
	return $usr;
}
function getAllActiveClass(){
	$con = mysql_connect(HOST, USER, PASSWORD, DBCL);
	mysql_select_db(DBCL, $con);
	$class = array();
	$query = "select * from clslist where  `clslist`.`status` = 1;";
	$result = mysql_query($query, $con);
	while($row = mysql_fetch_array($result)){
		$class[$row['id']]['id'] = $row['id'];
		$class[$row['id']]['name'] = $row['name'];
		$class[$row['id']]['teacher'] = $row['teacher'];
	}
	return $class;
}
function getAllUnAcceptedResults($class){
	$con = mysql_connect(HOST, USER, PASSWORD, DBCL);
	mysql_select_db(DBCL, $con);
	$stu = array();
	if($class==NULL){
		return NULL;
	}
	foreach($class as $cl){
		$clid = $cl['id'];
		$clname = $cl['name'];
		$teacher = $cl['teacher'];
		$tb = $clid."class".$clname;
		$query = "select * from $tb where `$tb`.`status` = '1';";
		$result = mysql_query($query, $con);
		while($row = mysql_fetch_array($result)){
			$pc = $row['PresentCondition'];
			if(checkPresentCondition($pc)){
				$stu[$row['id']]['clid'] = $clid;
				$stu[$row['id']]['clname'] = $clname;
				$stu[$row['id']]['teacher'] = $teacher;
				$stu[$row['id']]['fn'] = $row['fname'];
				$stu[$row['id']]['ln'] = $row['lname'];
				$stu[$row['id']]['id'] = $row['id'];
				$stu[$row['id']]['ClassActivity'] = $row['ClassActivity'];
				$stu[$row['id']]['Speaking'] = $row['Speaking'];
				$stu[$row['id']]['Midterm'] = $row['Midterm'];
				$stu[$row['id']]['Final'] = $row['Final'];
				$stu[$row['id']]['Total'] = $row['Total'];
				$stu[$row['id']]['pc'] = $row['PresentCondition'];
			}
		}
	}
	mysql_close($con);
	return $stu;
}
function checkPresentCondition($pc){
	if($pc==1||$pc==2||$pc==3||$pc==4){
		return 1;
	}
	return 0;
}
function getUserRole(){
	global $_SESSION;
	$usrRole = $_SESSION['logged']['role'];
	return $usrRole;
}
function getStid(){
	$stid = 0;
	session_start();
	if(isset($_SESSION['logged']['id'])){
		$stid = $_SESSION['logged']['id'];
	}else{
		return 0;
	}
	return $stid;
}
function decodeClass($stu){
	$ans = array();
	$ans = json_decode($stu['cl']);
	return $ans;
}
function getStuTeacher($stu){
	$stuthID = array();
	if(!isset($stu['cl'])){
		return;
	}
	foreach($stu['cl'] as $clid){
		array_push($stuthID, getStuTeacherID($clid));
	}
	$stuth = array();
	foreach($stuthID as $thID){
		array_push($stuth, getStuTeacherDetails($thID['id']));
	}
	return $stuth;
}
function getStuTeacherID($clid){
	$con = mysql_connect(HOST, USER, PASSWORD, "elaonlin_elaclass");
	$query = "Select * from clslist WHERE `clslist`.`id` = '$clid' And `clslist`.`status` = '1' ;";
	mysql_select_db(DBCL);
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$thID['id'] = $row['teacher'];
	mysql_close($con);
	return $thID;
}
function getStuTeacherDetails($thID){
	$con = mysql_connect(HOST, USER, PASSWORD, DB);
	$query = "Select * from users WHERE `users`.`id` = '$thID';";
	mysql_select_db(DB);
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$stuth['fname'] = $row['fname'];
	$stuth['lname'] = $row['lname'];
	$stuth['mail'] = $row['id'];
	mysql_close($con);
	return $stuth;
}
function getUnReadMessages(){
	$newMessages = array();
	$con = mysql_connect(HOST, USER, PASSWORD, "elaonlin_elamessage");
	$userCon = mysql_connect(HOST, USER, PASSWORD, "elaonlin_eladb", true);
	$query = "Select * from message WHERE `message`.`status` = '1';";
	mysql_select_db(DBMS, $con);
	$result = mysql_query($query, $con);
	$i = 0;
	while($row = mysql_fetch_array($result)){
		$newMessages[$i]['id'] = $row['id'];
		$newMessages[$i]['from'] = $row['fromid'];
		$newMessages[$i]['to'] = json_decode($row['toid']);
		$newMessages[$i]['subject'] = $row['subject'];
		$newMessages[$i]['message'] = $row['message'];
		$fid = $row['fromid'];
		$query = "select * from users where `users`.`id` = '$fid';";
		mysql_select_db(DB, $userCon);
		$fResult = mysql_query($query, $userCon);
		$frow = mysql_fetch_array($fResult);
		$newMessages[$i]['ffn'] = $frow['fname'];
		$newMessages[$i]['fln'] = $frow['lname'];
		foreach($newMessages[$i]['to'] as $tid){
			$query = "select * from users where `users`.`id` = '$tid';";
			$tResult = mysql_query($query, $userCon);
			$trow = mysql_fetch_array($tResult);
			$newMessages[$i]['tn'][] = $trow['fname'];
			$newMessages[$i]['tn'][] .= " ".$trow['lname'];
		}
		$i++;
	}
	mysql_close($con);
	mysql_close($userCon);
	return $newMessages;
}
function getUserAllMessages($usr){
	$newMessages = array();
	$con = mysql_connect(HOST, USER, PASSWORD, "elaonlin_elamessage", true);
	$userCon = mysql_connect(HOST, USER, PASSWORD, "elaonlin_eladb", true);
	$usrid = $usr['mail'];
	$query = "Select * from message WHERE `message`.`status` = '2';";
	mysql_select_db(DBMS, $con);
	$result = mysql_query($query, $con);
	$i = 0;
	while($row = mysql_fetch_array($result)){
		$x = json_decode($row['toid']);
		if(!in_array($usrid, $x)){
			continue;
		}
		$newMessages[$i]['id'] = $row['id'];
		$newMessages[$i]['from'] = $row['fromid'];
		$newMessages[$i]['to'] = $x;
		$newMessages[$i]['subject'] = $row['subject'];
		$newMessages[$i]['message'] = $row['message'];
		$fid = $row['fromid'];
		$query = "select * from users where `users`.`id` = '$fid';";
		mysql_select_db(DB, $userCon);
		$fResult = mysql_query($query, $userCon);
		$frow = mysql_fetch_array($fResult);
		$newMessages[$i]['ffn'] = $frow['fname'];
		$newMessages[$i]['fln'] = $frow['lname'];
		$i++;
		mysql_select_db(DBMS, $con);
	}
	mysql_close($con);
	mysql_close($userCon);
	return $newMessages;
}
//Get One Teacher
function getTeacherActiveClass($teacher){
	$tid = $teacher['mail'];
	$con = mysql_connect(HOST, USER, PASSWORD, "elaonlin_elaclass");
	$query = "select * from clslist where `clslist`.`status` = '1' AND `clslist`.`teacher` = '$tid';";
	mysql_select_db(DBCL);
	$result = mysql_query($query);
	$i = 0;
	$teacher['clid'] = array();
	$teacher['clname'] = array();
	while($row = mysql_fetch_array($result)){
		array_push($teacher['clid'], $row['id']);
		array_push($teacher['clname'], $row['name']);
	}
	mysql_close($con);
	return $teacher;
}
function getTeacherActiveClassList($teacher){
	$tid = $teacher['mail'];
	$con = mysql_connect(HOST, USER, PASSWORD, "elaonlin_elaclass");
	$query = "select * from clslist where `clslist`.`status` = '1' AND `clslist`.`teacher` = '$tid';";
	mysql_select_db(DBCL);
	$result = mysql_query($query);
	$i = 0;
	$cl = array();
	while($row = mysql_fetch_array($result)){
		$cl[$row['id']]['id'] = $row['id'];
		$cl[$row['id']]['name'] = $row['name'];
	}
	mysql_close($con);
	return $cl;
}
function getTeacherStudent($teacher){
	$con = mysql_connect(HOST, USER, PASSWORD, "elaonlin_elaclass");
	$stu = array();
	foreach($teacher['clid'] as $cl){
		$query = "select * from clslist where `clslist`.`id` = '$cl';";
		mysql_select_db(DBCL, $con);
		$result = mysql_query($query, $con);
		if(!$result){
			print_r(mysql_error());
		}
		$row = mysql_fetch_array($result);
		print_r(mysql_error());
		$tableName = $row['id']."class".$row['name'];
		$stu = fetchStudentFromClass($stu, $tableName, $row['name'], $row['id']);
	}
	mysql_close($con);
//      print_r($stu);
	return $stu;
}
function fetchStudentFromClass($stu, $tbname, $clname, $clid){
	$con = mysql_connect(HOST, USER, PASSWORD, "elaonlin_elaclass");
	$query = "select * from $tbname";
	mysql_select_db(DBCL, $con);
	$result = mysql_query($query, $con);
	while($row = mysql_fetch_array($result)){
		$stu[$row['id']]['id'] = $row['id'];
		$stu[$row['id']]['fn'] = $row['fname'];
		$stu[$row['id']]['ln'] = $row['lname'];
		$stu[$row['id']]['clname'] = $clname;
		$stu[$row['id']]['clid'] = $clid;
		$stu[$row['id']]['pc'] = $row['PresentCondition'];
		$stu[$row['id']]['ClassActivity'] = $row['ClassActivity'];
		$stu[$row['id']]['Speaking'] = $row['Speaking'];
		$stu[$row['id']]['Midterm'] = $row['Midterm'];
		$stu[$row['id']]['Final'] = $row['Final'];
		$stu[$row['id']]['Total'] = $row['Total'];
	}
	mysql_close($con);
	return $stu;
}
function getTeacher(){
	$stu = array();
	$stid = getStid();
	if($stid===0){
		return 0;
	}
	$con = mysql_connect(HOST, USER, PASSWORD, DB);
	$query = "Select * from users WHERE  `users`.`id` ='$stid';";
	mysql_select_db(DB, $con);
	$result = mysql_query($query, $con);
	while($row = mysql_fetch_array($result)){
		$stu['mail'] = $row['id'];
		$stu['fn'] = $row['fname'];
		$stu['ln'] = $row['lname'];
	}
	$stu['pic'] = "http://elaonline.ir/usrpic/sample.jpeg";
	$x = "http://elaonline.ir/usrpic/".$stu['mail'];
	if(file_exists($x)){
		$stu['pic'] = $x;
	}
	mysql_close($con);
	return $stu;
}
function print_r2($val){
	echo '<pre>';
	print_r($val);
	echo '</pre>';
}
function getAllUsersByRole($role){
	$usr = array();
	$con = mysql_connect(HOST, USER, PASSWORD, DB);
	$query = "Select * from users where `users`.`role` ='$role';";
	mysql_select_db(DB, $con);
	$result = mysql_query($query, $con);
	while($row = mysql_fetch_array($result)){
		$usr[$row['id']]['id'] = $row['id'];
		$usr[$row['id']]['pass'] = $row['pass'];
		$usr[$row['id']]['fn'] = $row['fname'];
		$usr[$row['id']]['ln'] = $row['lname'];
	}
	mysql_close($con);
	return $usr;
}
function fetchClassNameByClassId($clid){
	$con = mysql_connect(HOST, USER, PASSWORD, DBCL);
	$query = "select * from clslist where `clslist`.`id` = '$clid';";
	mysql_select_db(DBCL, $con);
	$result = mysql_query($query, $con);
	$row = mysql_fetch_array($result);
	mysql_close($con);
	return $row['name'];
}
function getAllClassByStatus($status){
	$con = mysql_connect(HOST, USER, PASSWORD, DBCL);
	mysql_select_db(DBCL, $con);
	$class = array();
	$query = "select * from clslist WHERE `clslist`.`status` = '$status';";
	$result = mysql_query($query, $con);
	while($row = mysql_fetch_array($result)){
		$class[$row['id']]['id'] = $row['id'];
		$class[$row['id']]['name'] = $row['name'];
		$class[$row['id']]['teacher'] = $row['teacher'];
		$class[$row['id']]['status'] = $row['status'];
	}
	return $class;
}
function getAllForms(){
	$con = mysql_connect(HOST, USER, PASSWORD, DBFR);
	mysql_select_db(DBFR);
	$result = mysql_query("SELECT * FROM `flist`;", $con);
	$frm = array();
	while($row = mysql_fetch_array($result)){
		$frm[$row['id']]['id'] = $row['id'];
		$frm[$row['id']]['name'] = $row['name'];
		$frm[$row['id']]['struct'] = unserialize($row['struct']);
	}
	mysql_close($con);
	return $frm;
}
function getFormByID($fid){
	$con = mysql_connect(HOST, USER, PASSWORD, DBFR);
	mysql_select_db(DBFR);
	$result = mysql_query("SELECT * FROM `flist` WHERE `id`='$fid';", $con);
	$frm = array();
	while($row = mysql_fetch_array($result)){
		$frm['id'] = $row['id'];
		$frm['name'] = $row['name'];
		$frm['com'] = $row['com'];
		$frm['struct'] = unserialize($row['struct']);
	}
	mysql_close($con);
	return $frm;
}