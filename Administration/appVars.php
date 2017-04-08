<?php ?>
<html>
	<head>
	</head>

	<body>
		<script src="../Js/jQueryLib.js" type="text/javascript"></script>
		<button  id='x'> fuck </button>
		<script>
			var Click = false;
			$("#x").click(function() {
				if (!Click) {
					Click = true;
					console.log("Fucker");
				}else{
					Click = false;
				}
			});
		</script>
	</body>
</html>
