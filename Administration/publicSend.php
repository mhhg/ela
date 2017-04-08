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
if (isset($_POST['submit'])) {
      $msgvisible = "";
      $sub = $_POST['subject'];
      $message = $_POST['message'];
      $to = buildReception();
      $con = mysql_connect(HOST, USER, PASSWORD, "elaonlin_elamessage");
      $from = $teacher['mail'];
      $query = "insert into message values('', '$from', '$to', '1', '$sub', '$message');";
      mysql_select_db(DBMS);
      if (mysql_query( $query)) {
	  $stmsg .= "Message Sent Successfully </h5>";
	  $stmsg .= "<strong>From:</strong>&nbsp;" . $from . '<br>';
	  $stmsg .= "<strong>TO:</strong>&nbsp;" . $to . '<br>';
	  $stmsg .= "<strong>Subject:</strong>&nbsp;" . $sub . '<br>';
	  $stmsg .= "<strong>Message:</strong>&nbsp;" . $message . '<br>';
      } else {
	  $stmsg .= "Database Connection Failed </h5>";
	  $stmsg .= "Database errore number:" . mysql_errno($con) . '<br>';
      }
}
function buildReception(){
      $to = array();
      foreach ($_POST['mail'] as $stid) {
	  array_push($to, $stid);
      }
      $to = json_encode($to);
      return $to;
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
	        <div class="row bg-primary">
		    <h3 class="text-center"> Compose Messages,<em> <?php echo $teacher['fn']; ?> </em> </h3>
	        </div>
	        <br>
	        <form class=" bg-info form-horizontal col-xs-12" onsubmit="return validate()" action="publicSend.php" method="post" role="form"  enctype="multipart/form-data">
		    <div class="row">
			<div class="col-xs-6" >
			      <div class="form-group">
				  <label for="subject" class="col-sm-2 control-label">Reception:</label>
				  <table id="stu" style="width: 100%; background-color: white; cursor: pointer;" class="col-xs-offset-0 table table-hover table-condensed">
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
						<small>Class</small>
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
      						<input  type="checkbox" <?php echo 'id="' . $st['clid'] . '"'; ?> name="mail[]" value="<?php echo $st['id'] ?>" > 
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
      					    <td class="hidden">
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
			      <div class="form-group">
				  <label for="subject" class="col-sm-2 control-label">Subject:</label>
				  <div class="col-sm-6">
				        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" >
				  </div>
			      </div>
			      <div class="form-group">
				  <label for="message" class="col-sm-2  control-label">Message:</label>
				  <div class="col-sm-6">
				        <textarea class="form-control" id="message" name="message" rows="10" placeholder="Message"></textarea>
				  </div>
			      </div>
			      <div id="errgroup" class="form-group text-danger ">
				  <div id="err" class="hidden col-sm-10 col-sm-offset-2  text-danger">

				  </div>
				  <div id="errm" class="hidden col-sm-10 col-sm-offset-2  text-danger">

				  </div>
			      </div>
			      <div class="form-group">
				  <div class="col-sm-offset-3 col-sm-6">
				        <button type="submit" name="submit" class="col-xs-offset-6 col-xs-4 btn btn-default">Send</button>
				  </div>
			      </div>
			      <br><br>
			      <label for="to" class="col-sm-2 control-label">Class: </label>
			      <div class="form-group ">
				  <table id="cls" style="width: 50%; background-color: white; cursor: pointer;" class="col-xs-offset-0 table table-hover table-condensed">
				        <tr>
					    <th class="text-successs bg-primary" style="width: 2%;">
						#
					    </th>
					    <th class="text-successs bg-primary " style="width: 3%">
						$
					    </th>
					    <th class="col-xs-2 ext-successs bg-primary">
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
      						<input type="checkbox" <?php echo 'id="' . $cl['id'] . '"'; ?>  value="<?php echo $cl['id']; ?>" > 
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
		    </div>
	        </form>
	  </div>
	  <script>
	        $("#stu tr").click(function() {
		    if ($(this).hasClass("bg-success")) {
			$(this).find("td > input").prop('checked', false);
		    } else {
			$(this).find("td > input").prop('checked', true);
		    }
		    $(this).toggleClass("bg-success");
	        });
	        $("#cls tr").click(function() {
		    if ($(this).hasClass("bg-success")) {
			var thisCLID = $(this).find(".identify").html().trim();
			var trs = $("#stu").find("tr");
			trs.each(function(){
			      if($(this).hasClass(thisCLID)){
				  $(this).find("td > input").prop('checked', false);
				  $(this).removeClass("bg-success");
			      }
			});
			$(this).find("td > input").prop('checked', false);
		    } else {
			var thisCLID = $(this).find(".identify").html().trim();
			var trs = $("#stu").find("tr");
			trs.each(function(){
			      if($(this).hasClass(thisCLID)){
				  $(this).find("td > input").prop('checked', true);
				  $(this).addClass("bg-success");
			      }
			      
			});
			$(this).find("td > input").prop('checked', true);
		    }
		    $(this).toggleClass("bg-success");
	        });
//	        $(this).find("td > input").prop('checked', true);
//	        $("#stb").append('<tr class="' + $(this).find("td").html().trim() + '"><td class="num">' + stunum + '</td><td>' + $(this).find(".fname").html().trim() + '</td><td>' + $(this).find(".lname").html().trim() + '</td></tr>');
	        function validate() {
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
			$("#errm").append("Message is empty.  Enter your text and try again.");
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
