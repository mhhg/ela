<?php
require_once './LoginCheckHeader.php';
check_admin();
require_once './db_definition.php';
define("DB", "elaonlin_eladb");
define("TABLE", "users");
$cls = getAllClassByStatus(1);
$frm = getAllForms();
if(isset($_POST['att'])){
	$att = $_POST['att'];
	if(!isset($att)){
		exit('No Attachment Found');
	}
	$con = mysql_connect(HOST, USER, PASSWORD, DBCL);
	mysql_select_db(DBCL);
	$res = true;
	foreach($att as $key => $val){
		if(setForm($val['clid'], $val['fid'], $con) === false){
			$res = false;
		}
	}
	mysql_close($con);
	if($res === true){
		exit('OK');
	}else{
		exit('ERR');
	}
}
function setForm($c, $f, $con){
	$result = mysql_query("UPDATE `clslist` SET `frm`='$f' WHERE `id`='$c';", $con);
	return $result;
}
require_once './logout.php';
require_once './back.php';
logoutHTML();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Attach Form</title>
		<script src="../Js/jquery-ui.min.js" type="text/javascript"></script>
		<style>
			.hovered{
				border: 1px dotted black;
				background-color: silver;
			}
			.headerHovered{
				border: 2px dotted black;
				background: none;
				background-color: white;
			}
			@font-face {
				font-family: 'Yekan';
				src: url('../font/BYekan.eot?#') format('eot'), /* IE6–8 */
					url('../font/BYekan.woff') format('woff'), url('../font/BYekan.ttf') format('truetype'); /* Saf3—5, Chrome4+, FF3.5, Opera 10+ */
			}
			.ans:hover{

				-webkit-animation: cssAnimation 1s 1 ease;
				-moz-animation: cssAnimation 1s 1 ease;
				-o-animation: cssAnimation 1s 1 ease;
				-webkit-animation-fill-mode: forwards; /* Safari and Chrome */
				animation-fill-mode: forwards;
			}
			@-webkit-keyframes cssAnimation {
				from {  background-color: white; }
				to {  background-color: #afd9ee; }
			}.ans:hover{

				-webkit-animation: cssAnimation 1s 1 ease;
				-moz-animation: cssAnimation 1s 1 ease;
				-o-animation: cssAnimation 1s 1 ease;
				-webkit-animation-fill-mode: forwards; /* Safari and Chrome */
				animation-fill-mode: forwards;
			}
			@-webkit-keyframes cssAnimation {
				from {  background-color: white; }
				to {  background-color: #afd9ee; }
			}
		</style>
		<script>
			function unicodeToChar(text){
				return text.replace(/\\u[\dABCDEFabcdef][\dABCDEFabcdef][\dABCDEFabcdef][\dABCDEFabcdef]/g,
						function(match){
							return String.fromCharCode(parseInt(match.replace(/\\u/g, ''), 16));
						})
			}
		</script>
	</head>
	<body>
		<div class="bg-info" style="margin-top: 0px; height: 100%">
			<div style="position: fixed; width: 100%; z-index: 12; opacity: 1; height: 40px;" class=" bg-primary">
				<h3 class="text-center" style="margin-top: 5px"> Attach Form </h3>
			</div><br/><br/><br/>
			<div id="forms" class="col-xs-3">
				<table id="frm" style="width: 100%; background-color: white; cursor: default; margin-left: 5px; font-size: 14px;" class="col-xs-offset-0 table  table-condensed table-hover">
					<tr>
						<th class="text-successs bg-primary" style="width: 4%;">
							ID
						</th>
						<th class="col-xs-1 text-successs bg-primary" >
							<small>Form</small>
						</th>
						<th width="2%" class="text-successs bg-primary" >
							<small>View</small>
						</th>
					</tr>
					<?php
					foreach($frm as $key => $f){
						?>
						<tr <?php echo 'id="' . $f['id'] . '"'; ?> class="frm">
							<td>
								<?php echo $key; ?>
							</td>
							<td style="font-family: Yekan">
								<?php echo $f['name']; ?>
							</td>
							<td style="font-family: Yekan">
								<script>
									var zz = '<?php echo (json_encode($f['struct'])) ?>';
									console.log(zz, '\n', unicodeToChar(zz));
								</script>
								<button class="form-control btn btn-default btn-xs" style="height: 25px" onclick="updateUi(JSON.parse(zz), '<?php echo $f['name']; ?>');">view</button>
							</td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>
			<div id="classes" class="col-xs-4">
				<table id="cls" style="width: 100%; background-color: white; cursor: default; margin-left: 0px; font-size: 14px;" class="col-xs-offset-0 table  table-condensed table-hover">
					<tr id="header">
						<th class="text-successs bg-primary" style="width: 4%;">
							ID
						</th>
						<th class="col-xs-1 text-successs bg-primary" >
							<small>Class</small>
						</th>
						<th class="col-xs-2 text-successs bg-primary" >
							<small>Teacher</small>
						</th>
					</tr>
					<?php
					foreach($cls as $cl){
						?>
						<tr <?php echo 'id="' . $cl['id'] . '"'; ?> class="cls">
							<td>
								<?php echo $cl['id']; ?>
							</td>
							<td>
								<?php echo $cl['name']; ?>
							</td>
							<td>
								<?php
								$th = getUserNameById($cl['teacher']);
								echo $th['fn'] . ' ' . $th['ln'];
								?>
							</td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>
			<div id="res" class="col-xs-5" style="">
				<table id="cls" style="width: 100%; background-color: white; cursor: default; margin-left: 0px; font-size: 14px;" class="col-xs-offset-0 table  table-condensed">
					<tr>
						<th class="text-successs bg-primary" style="width: 4%;">
							<small>CID</small>
						</th>
						<th class="col-xs-1 text-successs bg-primary" >
							<small>CN</small>
						</th>
						<th class="col-xs-2 text-successs bg-primary" >
							<small>Teacher</small>
						</th>
						<th class="col-xs-1 text-successs bg-primary" >
							<small>FID</small>
						</th>
						<th class="col-xs-1 text-successs bg-primary" >
							<small>Form Name</small>
						</th>
						<th class="col-xs-1 text-successs bg-primary" >
							<button id='sbt' class="form-control btn btn-xs btn-success" onclick="submit()"  style="height: 25px; width: 70px; float: right">Submit</button>
						</th>
					</tr>
				</table>
			</div>
			<!--			<div id="d" class="ui-draggable" style="width: 300px; height: 300px; background: red; position: relative; left: 800px; top: 101px;"> </div>
						<div id="a" style="position: absolute; left: 200px;width: 300px; height: 300px; border: 1px solid black" ></div>-->
		</div>
		<div class="modal fade" id="modalerr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="direction: rtl">
			<div class="modal-dialog" style="width: 90vw">
				<div class="modal-content" >
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="myModalLabel" style="text-align: center"></h4>
					</div>
					<div class="modal-body" ><div class="panel-group col-xs-12" id="qs" style="margin-top: 5px; direction: rtl; border: 1px silver dashed;  padding: 10px;"></div></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<script>
			var att = [];
			$(init);
			function init(){
				$.each($('#forms tr'), function(key, val){
					if($(val).hasClass('frm')){
						$(val).draggable({
							containmentBy: window,
							cursor: 'move',
							helper: myHelper,
						});
					}

				});
				$.each($('#classes tr'), function(key, val){
					if($(val).hasClass('cls')){
						$(val).droppable({
							drop: handleDropEvent,
							hoverClass: 'hovered'
						});
					}

				});
				$('#header').droppable({
					drop: handleDropEvent,
					hoverClass: 'headerHovered'
				});
//				$('#d').draggable({
//					containmentBy: '#a',
//					cursor: 'move',
//					snap: '#a',
//					helper: myHelper,
//					stop: handleDragStop
//				});
				function myHelper(event){
					var h = $(this).clone(false);
					h.css({
						backgroundColor: 'gold',
						width: $(this).width(),
						zIndex: '10',
					});
					//console.log(h);
					return h;
				}

//				function handleDragStop(event, ui){
//					var offsetXPos = parseInt(ui.offset.left);
//					var offsetYPos = parseInt(ui.offset.top);
//					console.log("Drag stopped!\n\nOffset: (" + offsetXPos + ", " + offsetYPos + ")\n");
//				}
				function handleDropEvent(event, ui){
					var f = ui.draggable.clone();
					//console.log($(this).children('td'), f);
					var c = $(this).clone(false);
					c.css({
						backgroundColor: 'white',
						width: $(this).width(),
						zIndex: '10',
					});
					f.css({
						backgroundColor: 'white',
						width: $(this).width(),
						zIndex: '10',
					});
					if($(c).attr('id') === 'header'){
						addAttAll($(f));
						return;
					}
					addAtt(c, f);
				}
				$("#a").droppable({
					drop: handleDropEvent,
					hoverClass: 'hovered'
				});
			}
			function addAttAll(f){
				$.each($('#classes tr'), function(key, val){
					if($(val).hasClass('cls')){
						addAtt($(val).clone(false), $(f).clone(false));
					}
				});
			}
			function Attach(c, f){
				this.fid = f;
				this.clid = c;
			}
			function addAtt(cdiv, fdiv){
				c = $(cdiv).children().eq(0).html().trim();
				f = $(fdiv).children().eq(0).html().trim();
				console.log(c, f);
				var at = new Attach(c, f);
				if(isDup(at)){
					return;
				}
				att.push(at);
				uplist($(cdiv).children(), $(fdiv).children());
			}
			function isDup(at){
				var i = -1;
				$.each(att, function(key, val){
					if(at.fid === val.fid && at.clid === val.clid){
						i = key;
						return;
					}
				});
				if(i !== -1){
					alert('duplicated index:' + i);
					return true;
				}
				console.log('index ' + i);
				return false;
			}
			function uplist(c, f){
				$('#res table').append('<tr>', c, f, '</tr>');
			}
			function Question(str, type, s1, s2, s3, s4){
				this.str = str;
				this.type = type;
				this.s1 = s1;
				this.s2 = s2;
				this.s3 = s3;
				this.s4 = s4;
			}
			function allowDrop(ev){
				ev.preventDefault();
			}

			function drag(ev){
				ev.dataTransfer.setData("text/html", ev.target.id);
			}
			function drop(ev){
				ev.preventDefault();
				var data = ev.dataTransfer.getData("text/html");
				ev.target.appendChild(document.getElementById(data));
			}
			var qs = [];
			function updateUi(qss, name){

				console.log(qss);
				qs = qss;
				$('#qs').html('');
				$.each(qs, function(key, val){
					update(val);
				});
				$('#modalerr .modal-title').html(name);
				$('#modalerr').modal('show');
			}
			function update(q){
				$('#qs').append('<div class="panel panel-default" style="background: none">' +
						'<div class="panel-heading qh" style="cursor: pointer; background: none; background-color: black;color: white; border: 1px solid black; border-top-right-radius: 10px; border-top-left-radius: 10px;"  data-parent="#qs"  onclick="qclick($(this),' + qs.indexOf(q) + ')">' +
						'<h4 class="panel-title " style="cursor: pointer">' +
						(qs.indexOf(q) + 1).toPersian() + ') ' + q.str +
						'<span style="float: left" class="' + (q.type === 'x' ? ('glyphicon glyphicon-text-width') : ('glyphicon glyphicon-ok')) + '"></span>' +
						'</h4>' +
						'</div>' +
						'<div id="c' + qs.indexOf(q) + '" class="panel-collapse collapse">' +
						'<div class="panel-body" style="padding: 0px; direction: rtl; background: white">' +
						setBody(q) +
						'</div>' +
						'</div>' +
						'</div>');
				$('#qn').html(' ' + (qs.indexOf(q) + 2).toPersian() + ' ');
				$('#c' + qs.indexOf(q)).collapse('hide');
				setTimeout(function(){
					$('#c' + qs.indexOf(q)).collapse('hide');
				}, 1100);
			}
			Number.prototype.toPersian = function(){
				var id = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
				return this.toString().replace(/[0-9]/g, function(w){
					return id[+w]
				});
			}
			function spanclc(sp){
				sp.children().prop('checked', 'checked');
			}
			function qclick(t, x){
				if(t.hasClass('prc') !== true){
					$('#c' + x).collapse('toggle');
				}
			}
			function setBody(q){
				var res = "";
				if(q.type === 't'){
					var i = 1;
					var s = {};
					$.each(q, function(key, val){
						if(key !== 'str' && key !== 'type')
							s[i] = '<span class="text-center col-xs-6 col-sm-3 ans" style="height: 40px; margin: 0px; padding: 10px" onclick="spanclc($(this))">' + (i++).toPersian() + ')&nbsp<input type="radio" name="' + 'Q' + qs.indexOf(q) + '">&nbsp' + val + '</span>';
					});
					res += s[4] + s[3] + s[2] + s[1];
				} else{
					res += '<textarea class="form-control" id="' + 'Q' + qs.indexOf(q) + '" placeholder="" style="width: 100%; height: 70px;"></textarea>';
				}
				return res;
			}
			function submit(){
				if(att.length === 0){
					alert('No Attachment!!');
					return;
				}
				var a = {att: att};
				$('#sb').val('submitting');
				$.post('attachform.php', a, function(data){
					alert(data);
				});
				$('#sbt').val('submitted');
			}
			$("#backBtn").click(function(){
				redirect("admin.php");
			}
			);
		</script>
	</body>
</html>

                            