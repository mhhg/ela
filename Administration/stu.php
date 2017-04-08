<?php
require_once './LoginCheckHeader.php';
check_student();
$stu = getStu();
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//print_r(getcwd());
if(isset($_POST['upload'])){
	exit('nothing uploaded');
}
if(!empty($_FILES)){
	$id = $stu['mail'];
	$imagename = $id;
	$res = move_uploaded_file($_FILES["upload"]["tmp_name"], "../usrpic/" . $id . ".jpg");
	if ($res === True){
		exit('Image Successfully uploaded.');
	}else{
		exit("Error while uploading image");
	}
	
}
if(isset($_GET['pass'])){
	$stid = $_GET['pass'];
	if($stu['mail'] != $_GET['pass']){
		exit('Access Denied');
	}
	echo getuserpass($stid);
	exit();
}
function getuserpass($id){
	$con = mysql_connect(HOST, USER, PASSWORD, DBCL);
	mysql_select_db(DB);
	$query = "select id, pass from users where id='$id';";
	$result = mysql_query($query, $con);
	while($row = mysql_fetch_array($result)){
		$res = $row['pass'];
	}
	mysql_close($con);
	return $res;
}
function changepass($id, $pass){
	$con = mysql_connect(HOST, USER, PASSWORD, DBCL);
	mysql_select_db(DB);
	$query = "update users set pass='$pass' where id='$id';";
	$result = mysql_query($query, $con);
	mysql_close($con);
	if($result == 1){
		return 'Succsess!';
	}else{
		return 'Failed. Err' . mysql_errno();
	}
}
if(isset($_GET['setpass'])){
	$stid = $_GET['pass'];
	if($stu['mail'] != $_GET['setpass']){
		exit('Access Denied');
	}
	$id = $_GET['setpass'];
	$old = $_GET['old'];
	$new = $_GET['new'];
	if($id == "" || $old == "" || $new == ""){
		//exit('Err: something not set.');
	}
	$realOld = getuserpass($id);
	if($realOld !== $old){
		exit('Current pass mismatch');
	}
	if($old === $new){
		exit('There is no changes!!');
	}
	echo changepass($id, $new);
	exit();
}
require_once './logout.php';
logoutHTML();
$stu = getStu();
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
		<div class="bg-info" style="margin-top: -16px; width: 100%; height: 100%; cursor: default">
			<div style="position: fixed; width: 100%; z-index: 12; opacity: 1" class=" bg-primary">
				<h3 class="text-center"> Welcome <strong class="lead" style="color: black;"><?php echo $stu['fn']; ?></strong> , Student's Profile </h3>
			</div>
			<br>
			<img id="upic" src="<?php echo $stu['pic']; ?>" alt="User Picture" class="img-circle" width="250" height="250" style="position: absolute; top: 8vh; right: 2vw;">
			<div id="upicchange" class="text-center img-circle" style=" position: absolute; top: 8vh; right: 2vw; width: 250px; height: 250px; opacity: 0; background-color: white; box-shadow: 0px 0px 30px black">
				<div  class="text-center">
					<p id="change" style="margin-top: 45%; font-size: 20px; z-index: 10"><strong>Change Your Picture</strong></p>
					<p id="up"  style="margin-top: 15%; font-size: 20px; color: gray"><strong>Upload</strong></p>
				</div>
			</div>
			<br><br><br>
			<input type="file" id="picfile" class="hidden" name="uploadfile" >
			<div class=" col-xs-offset-1">
				<table style="width: 70%; background-color: white; margin-top: 7vh;" class="table table-hover">
					<tr>
						<th class="text-successs bg-primary" width="40%">
							Name
						</th>
						<th class="bg-primary">
							E-mail
						</th>
						<th class="bg-primary">
							Class
						</th>
						<th class="bg-primary" width="11%">
							Options
						</th>
					</tr>
					<tr>
						<td class="hidden" id="rfn">
							<?php echo $stu['fn']; ?>
						</td>
						<td class="hidden" id="rln">
							<?php echo $stu['ln']; ?>
						</td>
						<td class="hidden" id="stid">
							<?php echo $stu['mail']; ?>
						</td>
						<td>
							<?php echo $stu['fn'] . " " . $stu['ln']; ?>
						</td>
						<td>
							<?php echo $stu['mail']; ?>
						</td>
						<td>
							<?php
							if($stu['cl'] != NULL){
								foreach($stu['cl'] as $cl){
									echo fetchClassNameByClassId($cl) . ", ";
								}
							}else{
								echo 'No Class';
							}
							?>
						</td>
						<td>
							<button  id="picmodal" class="btn btn-sm btn-info" style="float: right;"><span class="glyphicon glyphicon-user" style="font-size: 16"></span></button>
							<button id="editModalBtn"  data-toggle="modal" data-target="#editModal" type="button" class="btn btn-sm deleteUsr btn-default" style="float: right; margin-right: 5px;"><span class="glyphicon glyphicon-pencil" style="font-size: 16"></span></button>
						</td>
					</tr>
				</table>

			</div>
			<br><br><br><br><br><br>
			<div class=" ">
				<div class="col-xs-4 col-xs-offset-1">
					<table style="width: 95%; background-color: white" class=" table table-hover">
						<tr>
							<th class="text-successs bg-primary">
								Class
							</th>
							<th class="bg-primary"></th>
						</tr>
						<tr>
							<td width="80%" style="padding-left: 50px;" class=" lead">Report Cards</td>
							<td><button type="button" id="result" class="col-xs-12   btn btn-warning">View</button></td>
						</tr>
						<tr>
							<td width="80%" style="padding-left: 50px;" class=" lead"> Materials </td>
							<td><button type="button" id="resource" class="col-xs-12   btn btn-warning">Download</button></td>
						</tr>

					</table>
				</div>
				<div class="col-xs-4">
					<table style="width: 95%; background-color: white" class="col-xs-offset-0 table table-hover">
						<tr>
							<th class="text-successs bg-primary">
								Messages
							</th>
							<th class="bg-primary">&nbsp;</th>
						</tr>
						<tr>
							<td width="80%" style="padding-left: 50px;" class=" lead">Received Messages</td>
							<td><button type="button" id="inbox" class="col-xs-12   btn btn-warning">Inbox</button></td>
						</tr>
						<tr>
							<td width="80%" style="padding-left: 50px;" class=" lead">Contact Your Teacher</td>
							<td><button type="button" id="send" class="col-xs-12   btn btn-warning">Compose</button></td>
						</tr>
					</table>
				</div>
			</div>
			<br>
		</div>
		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="saveModalLabel" aria-hidden="true">
			<div class="modal-dialog" style="width: 50vw" >
				<div class="modal-content" style="width: 50vw">
					<div class="modal-header bg-primary" style="padding:10px;">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="font-size: 30">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="saveModalLabel" style="margin: 0px;">Change Password</h4>
					</div>
					<div  class="modal-body saveModalBody" >
						<table class="table-hover" style="width: 100%; line-height: 2.5">
							<tr>
								<td style="width: 30%">

								</td>
								<td style="width: 33%"> <strong>Current</strong> </td>
								<td >
									<strong>New</strong>
								</td>	
							</tr>
							<tr>
								<td>
									<strong>Password:</strong>
								</td>
								<td id="pass"></td>
								<td id="newlstName">
									<input type="text" class="Edit_Pass form-control" onkeyup="enable_submit()" placeholder="Password" style="border-radius: 20px; height:30px;padding:0px 8px;font-size:13px;line-height:1.5; width: 12vw;">
								</td>
							</tr>
						</table>
					</div>
					<div class="modal-footer" style="padding:10px;">
						<p style="display: inline; float: left" class="text-danger hidden err">There is no changes made.</p>
						<button type="button" class="btn btn-primary col-xs-2 btn-save disabled" style="float: right; margin-right: 10px;">Change</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" >
				<div class="modal-content"  >
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="myModalLabel">Upload Image</h4>
					</div>
					<div class="modal-body" style="height: 30vh">

					</div>
					<div class="modal-footer" style="float: bottom">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<script>
			function redirect(string){
				window.location.replace("http://elaonline.ir/Administration/" + string);
			}
			$(document).ready(function(){
				$("th").hover(function(){
					$("table tr th").css("backgroundColor", "#428bca");
				});
				$("#addNewUser").click(function(){
					redirect("adduser.php");
				});
				$("#editUsers").click(function(){
					redirect("edituser.php");
				});
				$("#addNewClass").click(function(){
					redirect("addclass.php");
				});
				$("#result").click(function(){
					redirect("viewResult.php");
				});
				$("#inbox").click(function(){
					redirect("inbox.php");
				});
				$("#send").click(function(){
					redirect("send.php");
				});
				$("#editModalBtn").click(function(){
					$("#editModal").find("#pass").html('Getting your password');
					changed = false;
					$("#editModal").find(".Edit_Pass").val('');
					$("#editModal").find(".btn-save").addClass('disabled');
					$("#editModal").find(".err").addClass('hidden');
					$("#editModal").find(".err").html('');
					var stid = $("#stid").html().trim();
					$.ajax({type: "GET", url: "stu.php?pass=" + stid, datatype: "json",
						success: function(data){
							$("#editModal").find("#pass").html(data);
						}
					});
				});

				$(".btn-save").click(function(){
					$(this).addClass('disabled');
					var stid = $("#stid").html().trim();
					var oldpass = $("#editModal").find("#pass").html().trim();
					var newpass = $("#editModal").find(".Edit_Pass").val();
					$("#editModal").find(".err").removeClass('hidden');
					$("#editModal").find(".err").html("Changing password...");
					if(newpass === ""){
						return;
					}
					$.ajax({type: "GET", url: "stu.php?setpass=" + stid + "&old=" + oldpass + "&new=" + newpass, datatype: "json",
						success: function(data){
							$("#editModal").find(".err").removeClass('hidden');
							$("#editModal").find(".err").html(data);
							if(data == "Succsess!"){
								var usrname = $("#rfn").html().trim();
								$("#editModal").find(".err").append(" <strong>" + usrname + "</strong> you should use <strong>" + newpass + "</strong> as password for your next login");
								$("#editModal").find("#pass").html(newpass);
								changed = true;
							}

						},
						error: function(err){
							$("#editModal").find(".err").removeClass('hidden');
							$("#editModal").find(".err").html("Problem connection to server");
						}
					});
				});
			})
			var changed = false;
			function enable_submit(){
				if(changed === true){
					$("#editModal").find(".btn-save").addClass('disabled');
					return;
				}
				var currentpass = $("#editModal").find("#pass").html().trim();
				var val = $("#editModal").find(".Edit_Pass").val();
				if(val !== "" && val !== currentpass){
					$("#editModal").find(".btn-save").removeClass('disabled');
					$("#editModal").find(".err").addClass('hidden');
				} else if(val === currentpass){
					$("#editModal").find(".err").removeClass('hidden');
					$("#editModal").find(".err").html("There is no changes!");
					$("#editModal").find(".btn-save").addClass('disabled');
				} else{
					$("#editModal").find(".btn-save").addClass('disabled');
				}
			}
			$('#picmodal').click(function(){
				$('#picfile').click();
			})
			var canup = false;
			$('#change').click(function(){
				$('#picfile').click();
			});
			$("#up").click(function(){
				if(canup === true){
					upload();
				}

			});
			$('#up').mouseenter(function(){
				if(canup === true){
					$(this).css('color', 'brown');
				}
			});
			$('#up').mouseleave(function(){

				if(canup === true){
					$(this).css('color', 'black');
				}
			});
			$('#change').mouseenter(function(){
				$(this).css('color', 'brown');
			});
			$('#change').mouseleave(function(){
				$(this).css('color', 'black');
			});
			$('#upicchange').mouseenter(function(){
				$("#upicchange").animate({
					opacity: '.7'
				}, 'fast');
			});
			$('#upicchange').mouseleave(function(){
				$("#upicchange").animate({
					opacity: '0'
				}, 'slow')
			});
			function readURL(input){
				if(input.files && input.files[0]){
					var reader = new FileReader();

					reader.onload = function(e){
						$('#upic').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#picfile").change(function(){
				readURL(this);
				var file = document.getElementById("picfile");
				if(file.files[0] !== undefined){
					canup = true;
					$('#up').css('color', 'black');
				} else{
					canup = false;
				}
			});

			function upload()
			{
				var file = document.getElementById("picfile");
				var f = file.files[0];
				console.log(f);
				console.log(f.type);
				console.log(f.size);
				var typeerr = false;
				var sizeerr = false;
				var fileok = false;
				if(f.size <= 1000000 && f.type === 'image/jpeg'){
					fileok = true;
				} else{
					fileok = false;
					if(f.size > 1000000){
						sizeerr = true;
					}
					if(f.type !== 'image/jpeg'){
						typeerr = true;
					}
				}
				var src = $('#upic').attr('src')
				$('#myModal').modal('show', 'true');
				$('#myModal .modal-body').html('<table width="99%" class="table-hover">\n\
					<tr class=' + (fileok !== true ? 'bg-danger' : 'bg-success') + '><td width="17%"><strong>File Name: </strong></td><td>' + f.name + '<td></tr>\n\
					<tr class=' + (typeerr === true ? 'bg-danger' : 'bg-success') + ' ><td><strong>File Type: </strong></td><td>' + f.type + '<td></tr>\n\
					<tr class=' + (sizeerr === true ? 'bg-danger' : 'bg-success') + '><td><strong>File Size: </strong></td><td>' + f.size / 1000 + 'KB<td></tr></table>');
				if(f.size < 2000000 && typeerr != true){
					$('#myModal .modal-body').append("<img src='" + src + "' alt='User Picture' class='img-circle' width='200' height='200' style='position: absolute; top: -1vh; right: 1vw;'>");
				} else{
					$('#myModal .modal-body').append("<p  style='position: absolute; top: 7vh; right: 3vw;'> Unable to view image <br>" + (sizeerr == true ? "image is too large<br>" : "") + (typeerr == true ? "This is not allowed as image<br>" : "") + "</p>");
				}
				if(fileok == true){
					$('#myModal .modal-body').append('<br> Uploading image. please wait.');
				}else{
					return;
					$('#myModal .modal-body').append('<br> Unable to upload image. because of' +  (sizeerr == true ? "image is too large<br>" : "") + (typeerr == true ? "This is not allowed as image<br>" : "")  );	
				}
				setTimeout(function(){
					var formData = new FormData();
				formData.append("upload", file.files[0]);
				$.ajax({
						xhr: function(){
							var xhr = new window.XMLHttpRequest();
							xhr.upload.addEventListener("progress", function(evt){
								if(evt.lengthComputable){
									var percentComplete = evt.loaded / evt.total;
									console.log('up' + percentComplete);
								}
							}, false);

							xhr.addEventListener("progress", function(evt){
								if(evt.lengthComputable){
									var percentComplete = evt.loaded / evt.total;
									console.log('dl' + percentComplete);
								}
							}, false);

							return xhr;
						},
						url: "stu.php",
						type: "POST",
						data: formData,
						async: true,
						success: function(msg){
							$('#myModal .modal-body').append('<br>' + msg);
						},
						cache: false,
						contentType: false,
						processData: false
					});
				}, 300);

			}
		</script>
	</body>
</html>

                            