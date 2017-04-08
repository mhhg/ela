<?php
$cls = ""; //error class
$incVis = "hidden"; //Help block visibility
session_start();
require_once './password.php';
//print_r($USERS);
if(isset($_POST['submit'])){
	if($USERS[$_POST["id"]]['pass'] == $_POST["password"]){ /// check if submitted  username and password exist in $USERS array  
		$_SESSION["logged"]['id'] = $_POST["id"];
		$_SESSION["logged"]['role'] = $USERS[$_POST["id"]]['role'];
	}else{
		$cls = "has-error";
		$incVis = "";
	};
};
$redirect = "none";
if(array_key_exists($_SESSION["logged"]['id'], $USERS)){ //// check if user is logged or not  
	if($_SESSION["logged"]['role'] == Student){
		$redirect = "stu.php";
	}elseif($_SESSION["logged"]['role'] == Teacher){
		$redirect = "teacher.php";
	}elseif($_SESSION["logged"]['role'] == Admin){
		$redirect = "admin.php";
	}else{
		echo 'Errore unknown user role in database.';
		exit();
	}
}else{
	global $cls, $incVis;
	?>
	<html>
		<head>
			<link href="../bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" rel="stylesheet">
			<link href="../bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
			<script src="../Js/jQueryLib.js"></script>
			<script src="../bootstrap-3.1.1-dist/js/bootstrap.js"></script>
		</head>
		<body style="background-color: silver">
	 		  <img src="../img/logo1.png" alt="ELA Logo" style="top: 5vh; position: absolute; width: 18vw; height: auto; left: 40vw; " />
	 		  <form class=" form-horizontal col-md-5" style="margin-top: 30vh; margin-left: 29.16666vw; border-radius: 15px; border: 1px solid black; box-shadow: 3px 5px 20px black; background-color: white" action="login.php" method="post" role="form">
	 			   <h2 style="margin: 0px; border-top-left-radius: 15px; border-top-right-radius: 15px; margin-left: -15px;  margin-right: -15px; background-color: #413cc8; color: white; height: 7vh; padding-left: 20px; padding-top: 1vh; margin-bottom: 5vh; box-shadow: 0px 6px 15px black">Log In </h2>
	 			   <div class="row">
	 				    <div class="form-group <?php echo $cls; ?>">
	 					     <label for="usr" class="col-sm-4 control-label">User Name</label>
	 					     <div class="col-sm-6">
	 							<input type="text" name="id" class="form-control" id="usr" placeholder="User Name" >
	 					     </div>
	 				    </div>
	 			   </div>
	 			   <div class="row">
	 				    <div class="form-group <?php echo "$cls"; ?>">
	 					     <label for="pass" class="col-sm-4 control-label">Password</label>
	 					     <div class="col-sm-6">
	 							<input type="password" name="password" class=" form-control" id="pass" placeholder="Password">
	 					     </div>
	 				    </div>
	 			   </div>
	 			   <div class="row">
	 				    <div class="form-group  <?php echo "$cls"; ?> <?php echo "$incVis"; ?>">
	 					     <label for="pass" class="col-sm-2 control-label"></label>
	 					     <div class="col-sm-10">
	 							<p class="help-block">Incorrect username/password. Please, try again.</p>
	 					     </div>
	 				    </div>
	 			   </div>
	 			   <div class="row">
	 				    <div class="form-group">
	 					     <div class="col-sm-offset-2 col-sm-10">
	 							<div class="checkbox">
	 								 <label>
	 									  <input type="checkbox"> Remember me
	 								 </label>
	 							</div>
	 					     </div>
	 				    </div>
	 			   </div>
	 			   <br>
	 			   <div class="row">
	 				    <div class="form-group form-inline">
	 					     <div class="col-sm-12">
								<a href="http://elaonline.ir/index.php" class="btn-danger form-inline col-xs-offset-2 col-xs-3 btn btn-default" >Back to ELA</a>
								<button  type="submit" name="submit"  class="btn-success form-inline col-xs-offset-2 col-xs-3 btn btn-default">Submit</button>
	 					     </div>
	 				    </div>
	 			   </div>
	 			   <br>
	 		  </form>
	 		  <script>
	 		  </script>
	 	 </body>
	</html>
	<?php
}
?>
<html>
	<head>
	</head>
	<body>
		<script>
			function redirect(string) {
				window.location.replace("http://elaonline.ir/Administration/" + string);
			}
			var red = '<?php echo $redirect; ?>';
			console.log('Logged in as' + red);
			if(red !== 'none'){
				if(red === 'stu.php'){
					redirect('stu.php');
				}else if(red === 'teacher.php'){
					redirect('teacher.php');
				}else if (red === 'admin.php'){
					redirect('admin.php');
				}
			}
		</script>
	</body>
</html>

                            
                            
                            