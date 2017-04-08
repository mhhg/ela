<?php
session_start();
if(isset($_POST['logout'])){
	logout();
}
$redirect = "none";
function logout(){
	global $redirect;
	$redirect = "login.php";
	if(isset($_SESSION['logged'])){
		unset($_SESSION['logged']);
	}
		?>
		<html>
			<body>
				<script>
					function redirect(string){
						window.location.replace("http://elaonline.ir/Administration/" + string);
					}
					var red = '<?php echo $redirect; ?>';
					console.log(red);
					if(red !== 'none'){
						if(red === 'login.php'){
							redirect('login.php');
						}
					}
				</script>
			</body>
		</html>
		<?php
		exit();
}
function logoutHTML(){
	global $redirect;
	?>
	<html>
		<head>
			<meta charset="UTF-8">
			<link href="../bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" rel="stylesheet">
			<link href="../bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
			<script src="../Js/jQueryLib.js"></script>
			<script src="../bootstrap-3.1.1-dist/js/bootstrap.js"></script>
		</head>
		<body>
			<div style="position: fixed; top: 3px; right: 3px; z-index: 100;">
				<form method="post" action="logout.php">
					<input type="submit" value="log out" class="btn-toolbar btn btn-default" name="logout">
				</form>
			</div>
			
		</body>
	</html>
	<?php
}

                            
                            