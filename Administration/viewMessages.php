<?php
require_once './logout.php';
require_once './LoginCheckHeader.php';
check_admin();
$messages = getUnReadMessages();
$msgvisible = "hidden";
if (isset($_GET['permision'])) {
      $msgvisible = "";
      if ($_GET['permision'] == "Allow") {
	  $con = mysql_connect(HOST, USER, PASSWORD, "elaonlin_elamessage");
	  $x = $_GET['id'];
	  $query = "UPDATE  `elaonlin_elamessage`.`message` SET  `status` = '2' WHERE  `message`.`id` ='$x';";
	  mysql_select_db(DBMS);
	  if (mysql_query($query)) {
	        $stmsg = "Message Allowed, databse id: $x";
	  }
      } else if ($_GET['permision'] == "Deny") {
	  $con = mysql_connect(HOST, USER, PASSWORD, "elaonlin_elamessage");
	  $x = $_GET['id'];
	  $query = "UPDATE  `elaonlin_elamessage`.`message` SET  `status` = '3' WHERE  `message`.`id` ='$x';";
	  $stmsg = "Message Denied. databse id: $x";
      } else {
	  
      }
}
require_once './back.php';
logoutHTML();
?>
<html>
      <head>
	  <link href="../bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" rel="stylesheet">
	  <link href="../bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
	  <script src="../Js/jQueryLib.js"></script>
	  <script src="../bootstrap-3.1.1-dist/js/bootstrap.js"></script>
      </head>
      <body>
	  <div id="blackbk" class="<?php echo $msgvisible; ?>  " style="position: fixed; top: 4.8vh; left: 0px; width: 100%; height: 100%; opacity: .8; background-color: black; z-index: 10">
	        <form action="viewMessages.php" class="form-horizontal" method="get" role="form">
		    <div id="msg" style=" background-color: white; height: 110px; opacity: 1; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;" class="col-xs-offset-6 col-xs-4">
			<h5 >Server Message:  <?php echo $stmsg; ?>
			      <br><br>
			      <input type="submit" id="oksub" name="oksubmit" style="position: absolute; top: 60px; right: 20px;" class="btn btn-success col-xs-2" value="OK">
			      <script>
				  $("#oksub").focus();
			      </script>
		    </div>
	        </form>
	  </div>
	  <div class="bg-info" style="margin-top: -16px; width: 100%; height: 100%; cursor: default">
	        <div style="position: fixed; width: 100%; z-index: 12; opacity: 1" class=" bg-primary">
		    <h3 class="text-center"> New Messages</h3>
	        </div>
	        <br><br><br><br>
	        <table style="width: 100%; background-color: white; margin-top: 7vh; cursor: pointer" id="messageTable" class="table table-hover">
		    <tr>
			<th class="bg-primary text-center">
			      #
			</th>
			<th class="bg-primary">
			      From
			</th>
			<th class="bg-primary">
			      To
			</th>
			<th class="bg-primary">
			      Subject
			</th>
			<th class="bg-primary">
			      message
			</th>
		    </tr>
		    <?php
//			print_r($messages);
		    $i = 1;
		    foreach ($messages as $m) {
			?>
      		    <tr>
      			<td class="hidden table-key">
				  <?php echo $m['id']; ?>  
      			</td>
      			<th class="bg-primary text-center text-danger">
      			      <small> <?php echo $i++; ?> </small>
      			</th>
      			<td>
				  <?php echo $m['ffn'] . " " . $m['fln']; ?> 
      			</td>
      			<td>
				  <?php
				  foreach ($m['tn'] as $name) {
				        echo $name;
				  }
				  ?> 
      			</td>
      			<td class="subject">
				  <?php echo $m['subject']; ?>  
      			</td>
      			<td class=" message <?php echo $i; ?>">
				  <?php echo $m['message']; ?>  
      			</td>
      		    </tr>
			<?php
		    }
		    ?>
	        </table>
	        <br><br><br><br>
	  </div>
	  <form id="m" class="hidden" style="z-index: 1; position: fixed;top:0px; right:0px; width: 25vw; height: 10vh;" method="get" action="viewMessages.php">
	        Subject:<input type="text" class="form-control" id="subject" name="subject"  style="margin-bottom: 5px;" disabled="">
	        Message:<textarea class="form-control" id="message" name="message" rows="10" style="margin-bottom: 5px;" placeholder="Message" disabled=""></textarea>
	        <div class="row form-horizontal">
		    <input id="key" name="id" type="hidden">
		    <div class=" col-xs-6">
			<input  class="btn btn-success form-control col-xs-12" type="submit" name="permision" value="Allow" >	
		    </div>
		    <div class=" col-xs-6">
			<input  class="btn btn-danger form-control col-xs-12" type="submit" name="permision" value="Deny">	
		    </div>
	        </div>		    
	  </form>
	  <div class="modal fade">
<!-- Large modal -->

	  <script>
	        function redirect(string) {
		    window.location.replace("http://elaonline.ir/Administration/" + string);
	        }
	        $(document).ready(function() {
		    $("th").hover(function() {
			$("table tr th").css("backgroundColor", "#428bca");
		    });
		    $("#backBtn").click(function() {
			redirect("admin.php");
		    });
		    $("#addNewUser").click(function() {
			redirect("adduser.php");
		    });
		    $("#editUsers").click(function() {
			redirect("edituser.php");
		    });
		    $("#addNewClass").click(function() {
			redirect("addclass.php");
		    });
		    $("#result").click(function() {
			redirect("result.php");
		    });
		    $("#inbox").click(function() {
			redirect("inbox.php");
		    });
		    $("#send").click(function() {
			redirect("send.php");
		    });
		    $("tr").click(function() {
			$tr = $(document).find("tr");
			for (var i = 0; i < $tr.length; i++) {
			      $tr.removeClass("bg-warning");
			}
			$(this).addClass("bg-warning");
			$x = $(this).find(".message").html().trim();
//			console.log("TOP " + $(this).find(".message").position().top + "LEFT " + $(this).find(".message").position().left);
			$("#m").animate({
			      top: $(this).find(".message").position().top,
			      right: 0,
			}, 200, function() {
			      $("#m").removeClass("hidden");
			});
			$("#subject").val($(this).find(".subject").html().trim());
			$("#message").val($(this).find(".message").html().trim());
			$("#key").val($(this).find(".table-key").html().trim());
//			$("#m").text($(this).find(".message").html().trim());

		    });

	        })
	  </script>
      </body>
</html>
