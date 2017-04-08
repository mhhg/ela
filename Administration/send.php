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
if ($usrRole == Student) {
      $stu = getStu();
      $stuteacher = getStuTeacher($stu);
      if (!isset($stuteacher)) {
	  $incVis = "";
	  $msg = "There is no class added for this student in the system.<br>This student can't send messages.";
      }
} else if ($usrRole == Teacher) {
      $stu = getTeacher();
      $stuteacher = getTeacherStudent($stu);
}
if (isset($_POST['submit'])) {
      $msgvisible = "";
      $sub = $_POST['subject'];
      $message = $_POST['message'];
      $to = array();
      array_push($to, $_POST['teacher']);
      $to = json_encode($to);
      $con = mysql_connect(HOST, USER, PASSWORD, "elaonlin_elamessage");
      $from = $stu['mail'];
      $query = "insert into message values('', '$from', '$to', '1', '$sub', '$message');";
      mysql_select_db(DBMS);
      if (mysql_query($query)) {
	  $stmsg .= "Message Sent Successfully </h5>";
	  $stmsg .= "<strong>From:</strong>&nbsp;" . $from . '<br>';
	  $to = $_POST['teacher'];
	  $stmsg .= "<strong>TO:</strong>&nbsp;" . $to . '<br>';
	  $stmsg .= "<strong>Subject:</strong>&nbsp;" . $sub . '<br>';
	  $stmsg .= "<strong>Message:</strong>&nbsp;" . $message . '<br>';
      } else {
	  $stmsg .= "Database Connection Failed </h5>";
	  $stmsg .= "Database errore number:" . mysql_errno($con) . '<br>';
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
	        <form action="send.php" class="form-horizontal" method="get" role="form">
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
	  <div class="bg-info" style="margin-top: -16px;">
	        <div class="row bg-primary">
		    <h3 class="text-center"> Send Message,<em> <?php echo $stu['fn']; ?> </em> </h3>
	        </div>
	        <br>
	        <form class=" bg-info form-horizontal col-xs-12" onsubmit="return validate()" action="send.php" method="post" role="form"  enctype="multipart/form-data">
		    <div class="form-group">
			<label for="to" class="col-sm-2 control-label">To: </label>
			<div class="col-sm-3">
			      <select class="form-control" id="to" name="teacher">
				  <?php
				  foreach ($stuteacher as $th) {
				        echo '<option value="' . $th['mail'] . '">' . $th['fname'] . "&nbsp;" . $th['lname'] . "</option>";
				  }
				  ?>
			      </select>
			</div>
		    </div>
		    <div class="form-group">
			<label for="subject" class="col-sm-2 control-label">Subject:</label>
			<div class="col-sm-3">
			      <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" >
			</div>
		    </div>
		    <div class="form-group">
			<label for="message" class="col-sm-2  control-label">Message:</label>
			<div class="col-sm-3">
			      <textarea class="form-control" id="message" name="message" rows="10" placeholder="Message"></textarea>
			</div>
		    </div>
		    <div id="errgroup" class="form-group text-danger ">
			<div id="err" class="hidden col-sm-10 col-sm-offset-2  text-danger">

			</div>
			<div id="errm" class="hidden col-sm-10 col-sm-offset-2  text-danger">

			</div>
			<div class="col-sm-10 col-sm-offset-2  text-danger <?php echo "$incVis"; ?>">
			      <?php echo "$msg"; ?>
			</div>
		    </div>
		    <div class="form-group">
			<div class="col-sm-offset-3 col-sm-3">
			      <button type="submit" name="submit" class="col-xs-offset-4 col-xs-4 btn btn-default">Send</button>
			</div>
		    </div>
	        </form>
	  </div>
	  <script>
	        function validate() {
		    if ($("#to").val() === null){
			return false;
		    }
//		    alert("SUBJECT: " + $("#subject").val() + "\n Message: " + $("#message").val());
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
<?php
if ($usrRole == Student) {
      echo 'redirect("stu.php")';
} else {
      echo 'redirect("teacher.php")';
}
?>
	        });
	  </script>
      </body>
</html>
