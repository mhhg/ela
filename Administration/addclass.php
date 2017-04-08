<?php
require_once './LoginCheckHeader.php';
check_admin();
require_once './db_definition.php';
define("DB", "elaonlin_eladb");
define("TABLE", "users");
setTeachers();
setStudents();
$sb = "";
if(!$STUDENTS){
	$sb = "disabled";
}
$msgvisible = "none";
$msg = "";
$incVis = "hidden";
$cls = "has-error";
$stmsg = ""; //status message
$cl = array();
if(isset($_POST['submit'])){
	if(isset($_POST['clname']) && !empty($_POST['clname'])){
		$msgvisible = "";
		if(insertIntoClsList()){
			if(getClassID()){
				if(makeClass()){
					$msgvisible = "";
					if(!setStudentsClass()){
						$stmsg .= "<br>Class successfully added.";
					}else{
						$stmsg .= "<br>Error, Failed to add Students in class. mybe from resubmition. try adding again.<br> if problem still exist call site's programmer.";
					}
				}else{
					$clid = $cl['id'];
					$stmsg .= "Problem Creating a new class. CLID: $clid in database.<br>";
				}
			}else{
				$clid = $cl['id'];
				$stmsg .= "Problem getting class id: CLID: $clid.<br>";
			}
		}else{
			$stmsg .= "Problem inserting a new class row, in Class List.<br>";
		}
	}else{
		$incVis = "";
	}
}
function insertIntoClsList(){
	global $stmsg;
	$cl['name'] = $_POST['clname'];
	$cl['name'] = str_replace(' ', '', $cl['name']);
	$cl['teacher'] = $_POST['teacher'];
	$a = $cl['teacher'];
	$clsdbcon = mysql_connect(HOST, USER, PASSWORD, "elaonlin_elaclass");
	mysql_select_db(DBCL);
	if(mysql_query('insert into clslist value("", "' . $cl['name'] . '", "1", "' . $cl['teacher'] . '", "","none");', $clsdbcon)){
		return 1;
	}
//	$stmsg .= print_r(mysql_error(), true);
	return 0;
}
function makeClass(){
	global $stmsg, $cl;
	$con = mysql_connect(HOST, USER, PASSWORD, "elaonlin_elaclass");
	if(!$con){
		$stmsg .= "<br>Database Connection failed elaonlin_elaclass";
	}
	$clid = $cl['id'];
	$x = $clid . "class" . $_POST['clname'];
	$query = "CREATE TABLE $x (id varchar(255), fname varchar(255), lname varchar(255), ClassActivity tinyint(11), Speaking tinyint(11), Midterm tinyint(11), Final tinyint(11), Total tinyint(11), PresentCondition tinyint(11), status tinyint(11));";
//      $query = "CREATE TABLE 2aa (id varchar(255));";
	mysql_select_db(DBCL, $con);
	if(mysql_query($query, $con)){
		foreach($_POST['mail'] as $stid){
			$stu = getStuDetails($stid);
			$stname = $stu['fn'];
			$stlname = $stu['ln'];
			$query = "insert into $x values('$stid', '$stname', '$stlname', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '-1' , '1');";
			mysql_select_db(DBCL, $con);
			if(!mysql_query($query, $con)){
				$stmsg .= 'Adding Students to new class db Err<br>';
				return 0;
			}
		}
	}else{
		$a = mysql_error();
		$stmsg .= '<br>Class Table Creation in elaClass ErrNO:' . $a . '<br>';
		return 0;
	}
	mysql_close($con);
	return 1;
}
function getStuDetails($stid){
	$con = mysql_connect(HOST, USER, PASSWORD, DB);
	$query = "select * from users where `users`.`id` ='$stid'";
	mysql_select_db(DB);
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$stu = array();
	$stu['fn'] = $row['fname'];
	$stu['ln'] = $row['lname'];
	return $stu;
}
function getClassID(){
	global $cl, $stmsg;
	$con = mysql_connect(HOST, USER, PASSWORD, "elaonlin_elaclass");
	$query = "select * from clslist order by id DESC LIMIT 1;";
	mysql_select_db(DBCL, $con);
	$result = mysql_query($query, $con);
	$s = -1;
	while($row = mysql_fetch_array($result)){
		$s = $row['id'];
	}
	if($s == -1){
		$s = 2;
	}
	$cl['id'] = $s;
	mysql_close($con);
	return 1;
}
function getEncodedClass($x){
	global $cl, $stmsg;
	$ans;
	$con = mysql_connect(HOST, USER, PASSWORD, DB);
	$query = "Select * from users WHERE  `users`.`id` ='$x';";
	mysql_select_db(DB);
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if($row['classid'] == NULL){
		$clsidArr = array();
		array_push($clsidArr, $cl['id']);
		$ans = json_encode($clsidArr);
	}else{
		$clsidArr = array();
		$clsidArr = json_decode($row['classid']);
		array_push($clsidArr, $cl['id']);
		$ans = json_encode($clsidArr);
	}
//      $stmsg .= "$ans";
	mysql_close($con);
	return $ans;
}
function setStudentsClass(){
	global $stmsg, $cl;
	$con = mysql_connect(HOST, USER, PASSWORD, DB);
	mysql_select_db(DBCL, $con);
	foreach($_POST['mail'] as $x){
		$stuNewClass = getEncodedClass($x);
		$query = "UPDATE  `elaonlin_eladb`.`users` SET  `classid` = '$stuNewClass' WHERE  `users`.`id` ='$x';";
		if(mysql_query($query, $con)){
			
		}else{
			$stmsg .= "<br>Database connection failed, student";
			return 1;
		}
	}
	mysql_close($con);
	return 0;
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
			<form action="addclass.php" class="form-horizontal" method="post" role="form">
				<div id="msg" style=" background-color: white; height: 250px; opacity: 1; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;" class="col-xs-offset-6 col-xs-4">
					<h5 class="bg-info" >Server Message: User Added Successfully</h5> <?php echo $stmsg; ?>
					<input type="submit" id="oksub" name="oksubmit" style="position: absolute; top: 200px; right: 20px;" class="btn btn-success col-xs-2" value="OK">
					<script>
						$("#oksub").focus();
					</script>
				</div>
			</form>
		</div>
		<div class="bg-info" style="margin-top: -16px;">
			<div style="position: fixed; width: 100%; z-index: 12; opacity: 1;" class=" bg-primary">
				<h3 class="text-center"> Add Class </h3>
			</div>
			<form class="bg-info form-horizontal col-xs-12" onsubmit="return validate()" action="addclass.php" method="post" role="form">
				<div class="row" style="margin-top: 9vh;">
					<label for="clname" class="col-sm-2 control-label">Class Name</label>
					<div class="col-sm-3">
						<input type="text" class="form-control  " id="clname" name="clname" placeholder="Class Name" >
					</div>
					<label for="thname" class="col-sm-2 control-label">Teacher</label>
					<div class="col-sm-3">
						<select class="form-control" name="teacher">
							<?php
							foreach($TEACHERS as $th){
								echo '<option value="' . $th['mail'] . '">' . $th['fname'] . "&nbsp;" . $th['lname'] . "</option>";
							}
							?>
						</select>
					</div>
					<div class=" col-sm-2">
						<button type="submit" name="submit" class="<?php echo $sb; ?> col-xs-offset-4 col-xs-4 btn btn-default">Add</button>
					</div>
				</div>
				<div id="errgroup" class="form-group  <?php echo "$cls"; ?>">
					<div id="err" class="col-sm-10 col-sm-offset-2 help-block  <?php echo "$incVis"; ?>">
						Class name is required. Make sure you entered, then try again.
					</div>
					<div id="errstu" class="col-sm-10 col-sm-offset-2 help-block  <?php echo "$incVis"; ?>">
						No Student Selected.
					</div>
				</div>
				<br><br>
				<div class="col-xs-6 col-xs-offset-0">
					<label for="clname" class="col-sm-4 control-label">Select Students</label>
					<table style="width: 100%; background-color: white; cursor: pointer;" class="col-xs-offset-0 table table-hover table-condensed">
						<tr>
							<th class="text-successs bg-primary" style="width: 5%;">
								#
							</th>
							<th class="text-successs bg-primary " style="width: 7%">
								$
							</th>
							<th class="text-successs bg-primary">
								First Name
							</th>
							<th class="text-successs bg-primary">
								Last Name
							</th>
							<th class="col-xs-2 ext-successs bg-primary">
								<small>Current Class</small>
							</th>
						</tr>
						<?php
						$index = 1;
						$lastname = array();
						if($STUDENTS){
							foreach($STUDENTS as $key => $row){
								$lastname[$key] = $row['lname'];
							}
							array_multisort($lastname, SORT_ASC, $STUDENTS);
							foreach($STUDENTS as $st){
								?>
								<tr <?php echo 'id="' . $index . '"'; ?>>
									<td>
										<?php echo $index; ?>
									</td>
									<td>
										<input type="checkbox" <?php echo 'id="' . $index . '"'; ?> name="mail[]" value="<?php echo $st['mail'] ?>"> 
									</td>
									<td class="fname">
										<?php echo $st['fname']; ?>
									</td>
									<td class="lname">
										<?php echo $st['lname']; ?>
									</td>
									<td>
										<?php ?>
									</td>
								</tr>
								<?php
								$index++;
							}
						}
						?>
					</table>
				</div>
				<div class="col-xs-6 col-xs-offset-0">
					<label for="clname" class="col-sm-4 control-label">Selected Students</label>
					<table style="width: 100%; background-color: white; cursor: pointer;" id="stb" class="col-xs-offset-0 table table-hover table-condensed">
						<tr>
							<th class="text-successs bg-primary" style="width: 5%;">
								#
							</th>
							<th class="text-successs bg-primary">
								First Name
							</th>
							<th class="text-successs bg-primary">
								Last Name
							</th>
						</tr>
					</table>
				</div>
			</form>
		</div>
		<script>
			$("th").hover(function(){
				$("table tr th").css("backgroundColor", "#428bca");
			});
			var stunum = 1;
			$("tr").click(function(){
				if($(this).hasClass("bg-success")){
					$(this).find("td > input").prop('checked', false);
					$("#stb").find('.' + $(this).find("td").html().trim() + '').remove();
					stunum--;
					var i = 0;
					var x = $("#stb tr");
					x.each(function(){
						$this = $(this);
						$this.find(".num").html(i);
						i++;
					});
				} else{
					$(this).find("td > input").prop('checked', true);
					$("#stb").append('<tr class="' + $(this).find("td").html().trim() + '"><td class="num">' + stunum + '</td><td>' + $(this).find(".fname").html().trim() + '</td><td>' + $(this).find(".lname").html().trim() + '</td></tr>');
					stunum++;
				}
				$(this).toggleClass("bg-success");
			})
			$("#backBtn").click(function(){
				redirect("admin.php");
			});
			function validate(){
				if($("#clname").val() == ""){
					$("#err").removeClass("hidden");
					return false;
				} else if($("#stb").find("tr").length >= 1){
					return true;
				} else{
					$("#errstu").removeClass("hidden");
					return false;
				}
				return false;
			}
		</script>
	</body>
</html>
                            
                            