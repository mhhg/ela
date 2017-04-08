<?php
require_once './logout.php';
require_once './LoginCheckHeader.php';
$usrRole = getUserRole();
$usr = getTeacher();
$messages = getUserAllMessages($usr);
$msgvisible = "hidden";
if (isset($_GET['permision'])) {
	 
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
		  
		  <style>
		 
		  </style>
	 </head>
	 <body>
		  <div id="blackbk" class="<?php echo $msgvisible; ?>  " style="position: fixed; top: 4.8vh; left: 0px; width: 100%; height: 100%; opacity: .8; background-color: black; z-index: 10">
			   <form action="viewMessages.php" class="form-horizontal" method="get" role="form">
				    <div id="msg" style=" background-color: white; height: 110px; opacity: 1; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;" class="col-xs-offset-6 col-xs-4">
					     <h5 >Server Message:  <?php echo $stmsg; ?>
							<br><br>
							<input type="submit" id="oksub" name="oksubmit" style="position: absolute; top: 60px; right: 20px;" class="btn btn-success col-xs-2" value="OK">
							<script> $("#oksub").focus();</script>
				    </div>
			   </form>
		  </div>
		  <div class="bg-info xs" style="margin-top: -16px; width: 100%; height: 100%; cursor: default">
		    <div id="my_modal" class="modal fade">
        <div class="modal-dialog" style="width: 90vw">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
			   <div style="position: fixed; width: 100%; z-index: 12; opacity: 1" class=" bg-primary">
				    <h3 class="text-center"> New Messages <em><?php if ($messages == NULL) {
	 echo "No New Messages";
} ?></em></h3>
			   </div>
			   <br><br><br>
			   <table style="width: 100%; background-color: white; margin-top: 3vh; cursor: pointer" id="messageTable" class="table table-hover">
				    <tr>
					     <th class="bg-primary text-center">
							#
					     </th>
					     <th class="bg-primary">
							From
					     </th>
					     <th class="bg-primary">
							Subject
					     </th>
					     <th class="bg-primary">
							message
					     </th>
				    </tr>
				    <?php
				    $i = 1;
				    foreach ($messages as $m) {
					     ?>
	 				    <tr class="message_row">
	 					     <td class="hidden table-key">
	 <?php echo $m['id']; ?>  
	 					     </td>
	 					     <th class="bg-primary text-center text-danger">
	 							<small> <?php echo $i++; ?> </small>
	 					     </th>
	 					     <td class="from">
								 <?php echo $m['ffn'] . " " . $m['fln']; ?> 
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
			   <input type="text" class="form-control" id="subject" name="subject"  style="margin-bottom: 5px;" disabled="">
			   <textarea class="form-control" id="message" name="message" rows="10" style="margin-bottom: 5px;" placeholder="Message" disabled=""></textarea>
			   <div class="row form-horizontal">
				    <input id="key" name="id" type="hidden">
			   </div>		    
		  </form>
		  

		  <script>
		  
			   function redirect(string) {
				    window.location.replace("http://elaonline.ir/Administration/" + string);
			   }
			   $(document).ready(function() {
			   
			   $(".message a").click(function(){
			   	return;
			   });
				    $("th").hover(function() {
					     $("table tr th").css("backgroundColor", "#428bca");
				    });
				    $("#backBtn").click(function() {
<?php
if ($usrRole == Student) {
	 echo 'redirect("stu.php")';
} else {
	 echo 'redirect("teacher.php")';
}
?>
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
					     //			console.log("TOP " + $(this).find(".message").position().top + "LEFT " + 	$(this).find(".message").position().left);
 $('#my_modal .modal-body').html($(this).find(".message").html().trim());
            $('#my_modal .modal-title').html($(this).find(".subject").html().trim());
            $('#my_modal .modal-footer').html($(this).find(".from").html().trim());

            $('#my_modal').modal('show');
					 
					     $("#subject").val($(this).find(".subject").html().trim());
					     $("#message").val($(this).find(".message").html().trim());
					     $("#key").val($(this).find(".table-key").html().trim());
					     //$("#m").text($(this).find(".message").html().trim());

				    });

			   })
		  </script>
	 </body>
</html>