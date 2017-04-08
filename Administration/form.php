<?php
require_once './LoginCheckHeader.php';
check_admin();
require_once './db_definition.php';
define("DB", "elaonlin_eladb");
define("TABLE", "users");
if(isset($_POST['qs'])){
	$name = $_POST['name'];
	$com = $_POST['com'];
	$qs = $_POST['qs'];
	//$a = json_encode($qs);
	//print_r(serialize($qs));
	if(!isset($name) || !isset($qs)){
		exit('No Name Found');
	}
	$a = addlst($name, $com, serialize($qs));
	$b = createtbl($name, $qs, getid());
	if($a !== false && $b !== false){
		echo 'ok';
	}else{
		echo 'prb';
	}
	exit();
}
function createtbl($name, $qs, $tid){
	$con = mysql_connect(HOST, USER, PASSWORD, DBFR);
	mysql_select_db(DBFR);
	$name = $tid . 'frm' . $name;
	$qu = "CREATE TABLE IF NOT EXISTS `$name` (`uid` varchar(256) NOT NULL, ";
	foreach($qs as $key => $q){
		if($q['type'] === 't'){
			$qu .= "`q$key` TINYINT UNSIGNED NOT NULL,";
		}else{
			$qu .= "`q$key` varchar(512) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL, ";
		}
	}
	$qu .= "PRIMARY KEY (`uid`));";
	$result = mysql_query($qu);
	mysql_close($con);
	return $result;
}
function addlst($name, $com, $str){
	$con = mysql_connect(HOST, USER, PASSWORD, DBFR);
	mysql_select_db(DBFR);
	$result = mysql_query("INSERT INTO `elaonlin_elaform`.`flist` (`id`, `name`, `com`, `struct`) VALUES ('', '$name', '$com', '$str');");
	mysql_close($con);
	return $result;
}
function getid(){
	$con = mysql_connect(HOST, USER, PASSWORD, DBFR);
	mysql_select_db(DBFR);
	$result = mysql_query("SHOW TABLE STATUS LIKE 'flist'");
	$row = mysql_fetch_array($result);
	$nextId = $row['Auto_increment'] - 1;
	mysql_close($con);
	return $nextId;
}
require_once './logout.php';
require_once './back.php';
logoutHTML();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Create Form</title>
		<style>
			.panel-title{
				font-size: 14px;
			}

			@font-face {
				font-family: 'Yekan';
				src: url('../font/BYekan.eot?#') format('eot'), /* IE6–8 */
					url('../font/BYekan.woff') format('woff'), url('../font/BYekan.ttf') format('truetype'); /* Saf3—5, Chrome4+, FF3.5, Opera 10+ */
			}
			body{
				font-family:  Yekan;
			}
			.ans{
				cursor: pointer;
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
			}

		</style>
	</head>
	<body>
		<div class="bg-info" style="margin-top: 0px; height: 100%">
			<div style="position: fixed; width: 100%; z-index: 12; opacity: 1; height: 40px;" class=" bg-primary">
				<h3 class="text-center" style="margin-top: 5px"> Create Form </h3>
			</div><br/><br/>
			<div class="form-inline col-xs-12"   >
				<p style="margin-bottom:  -2px">Header:</p>
				<div class="form-group col-xs-12" style="border: 1px silver dashed; margin-bottom: 5px;  padding: 5px; direction: rtl">
					<span>نام فرم:</span><input type="text" class="form-control" id="frmname" tabindex="1" placeholder="نام فرم" style="margin-left:10px;" onkeyup="$(this).val() !== '' ? ($('#frmn').html(' ' + $(this).val() + ' ')) : ($('#frmn').html(' ' + 'تعریف نشده' + ' '))">
					<span>توضیح:</span><textarea id="com" class="form-control"  placeholder="توضیح" tabindex="2" style="width: 50%"></textarea>
					<button id="sub" class="form-control btn-sm btn-success" tabindex="11" onclick="submit()">ثبت فرم</button>
				</div>
				<p>Tools:</p>
				<div class="col-xs-12" style="border: 1px silver dashed; margin-top: -7px; direction: rtl; padding: 10px; margin-bottom: 5px">
					<div class=" col-xs-12 col-sm-5">
						<span style="">گزینه ها:</span><br>
						<span style="">۱)</span><textarea tabindex="6" class="form-control" id="s1" placeholder="عالی" rows="1" style=""></textarea>
						<span style="">۳)</span><textarea tabindex="8" class="form-control" id="s2" placeholder="متوسط" rows="1" style="margin-top: 4px;"></textarea>
						<br/>
						<span style="">۲)</span><textarea tabindex="7" class="form-control" id="s3" placeholder="خوب" rows="1" style=""></textarea>
						<span style="">۴)</span><textarea tabindex="9" class="form-control" id="s4" placeholder="ضعیف" rows="1" style="margin-top: 4px;"></textarea>
						<button id="add" tabindex="10" disabled="disabled" class="form-control btn-sm btn-success" onclick="addQ($('#q').val(), $('#test').prop('checked') === true ? 't' : 'x')">افزودن</button>
						<br/>
					</div>
					<div class=" col-xs-12 col-sm-1">
						<span style="">نوع پاسخ:</span><br>
						<input type="radio" id="test" name="rad" tabindex="4" onchange="enableSelection()" checked="checked">&nbsp;<span>تستی</span><br/>
						<input type="radio" id="text" name="rad" tabindex="5" onchange="disableSelection()">&nbsp;<span>تشریحی</span>
					</div>
					<div class=" col-xs-12 col-sm-6">
						<span style="font-family: 'Yekan'">سوال:</span><span id="qn"> ۱ </span><br>
						<textarea class="form-control" id="q" placeholder="صورت سوال" tabindex="3" style="width: 100%;" onkeyup="enableAdd($(this).val())"></textarea>
					</div>
				</div>
				<div class="" style="direction: rtl">
					<span style="float: left; direction: ltr">Content:</span><span>نام فرم:</span><span id="frmn">&nbsp;تعریف نشده&nbsp;</span>
					<div class="panel-group col-xs-12" id="qs" style="margin-top: 5px; direction: rtl; border: 1px silver dashed;  padding: 10px;"></div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="modalerr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="direction: rtl">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="myModalLabel" style="text-align: center"></h4>
					</div>
					<div class="modal-body"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<script>
			var qs = [];
			function submit(){
				if(qs.length === 0){
					$('#modalerr .modal-title').html('فرم خالی!!!');
					$('#modalerr .modal-body').html('هیچ سوالی وارد نشده');
					$('#modalerr').modal('show');
					return;
				}
				var name = $('#frmname').val();
				if(name === ''){
					$('#modalerr .modal-title').html('نام فرم!!!');
					$('#modalerr .modal-body').html('نام فرم تعریف نشده');
					$('#modalerr').modal('show');
					return;
				}
				var com = $('#com').val();
				var a = {name: name, com: com, qs: qs};
				$('#modalerr .modal-title').html('ثبت فرم');
				$('#modalerr .modal-body').html('در حال برقراری ارتباط با سرور...');
				$('#modalerr').modal('show');
				$.post('form.php', a, function(data){
					var z ="";
					console.log(JSON.stringify(qs), '\n', data, '\n', unicodeToChar(data));
					$('#modalerr .modal-body').html(data);
					//$('#modalerr .modal-body').html( data);
				})
			}
			function unicodeToChar(text){
				return text.replace(/\\u[\dABCDEFabcdef][\dABCDEFabcdef][\dABCDEFabcdef][\dABCDEFabcdef]/g,
						function(match){
							return String.fromCharCode(parseInt(match.replace(/\\u/g, ''), 16));
						});
			}
			function Question(str, type, s1, s2, s3, s4){
				this.str = str;
				this.type = type;
				this.s1 = s1;
				this.s2 = s2;
				this.s3 = s3;
				this.s4 = s4;
			}
			function enableAdd(str){
				if(str !== "")
					$('#add').removeAttr('disabled');
				else
					$('#add').prop('disabled', 'disabled');
			}
			function addQ(str, type){
				var dup = isDuplicatedQuestion(str);
				if(dup !== -1){
					dupErr(dup);
					return;
				}
				var t = type === 't' ? getTestSelection() : {};
				var q = new Question(str, type, t[0], t[1], t[2], t[3]);
				qs.push(q);
				var n = qs.length.toPersian();
				updateUi();
				clear();
			}
			function dupErr(dup){
				$('#modalerr .modal-title').html('سوال تکراری !!!');
				$('#modalerr .modal-body').html('این سوال قبلا وارد شده است. شماره سوال: ' + (dup + 1).toPersian());
				$('#modalerr').modal('show');
			}
			var fst = true;
			function update(q){
				$('#qs').append('<div class="panel panel-default" style="background: none">' +
						'<div class="panel-heading qh" style="cursor: pointer; background: none; background-color: black;color: white; border: 1px solid black; border-top-right-radius: 10px; border-top-left-radius: 10px;"  data-parent="#qs"  onclick="qclick($(this),' + qs.indexOf(q) + ')">' +
						'<h4 class="panel-title " style="cursor: pointer">' +
						(qs.indexOf(q) + 1).toPersian() + ') ' + q.str +
						'<span style="float: left" class="' + (q.type === 'x' ? ('glyphicon glyphicon-text-width') : ('glyphicon glyphicon-ok')) + '"></span>' +
						'<button type="button" class="btn btn-danger btn-sm" style="float: left; margin-left: 15px; margin-top: -7px; padding: 1px width: 30px; height: 30px;" onclick="del(' + qs.indexOf(q) + ', $(this));"><span class="glyphicon glyphicon-trash" style="font-size: 18px"></span></button>' +
						'<button type="button" class="btn btn-info btn-sm" style="opacity: ' + (qs.indexOf(q) === 0 ? ' .6; ' : ' 1; ') + 'float: left; margin-left: 10px; margin-top: -7px; padding: 0px width: 30px; height: 30px;" onclick="up(' + qs.indexOf(q) + ', $(this));"><span class="glyphicon glyphicon-arrow-up" style="font-size: 18px"></span></button>' +
						'<button type="button" class="btn btn-info btn-sm" style="opacity: ' + (qs.indexOf(q) === qs.length - 1 ? ' .6; ' : ' 1; ') + 'float: left; margin-left: 5px; margin-top: -7px; padding: 0px width: 30px; height: 30px;" onclick="down(' + qs.indexOf(q) + ', $(this));"><span class="glyphicon glyphicon-arrow-down" style="font-size: 18px"></span></button>' +
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
			function qclick(t, x){
				if(t.hasClass('prc') !== true){
					$('.collapse').collapse('hide');
					$('#c' + x).collapse('toggle');
				}
			}
			function del(i, obj){
				$(obj).parents('.panel-heading').addClass('prc');
				qs.splice(i, 1);
				updateUi();
				setTimeout(function(){
					$(obj).parents('.panel-heading').removeClass('prc');
				}, 100);
			}
			function updateUi(){
				$('#qs').html('');
				$.each(qs, function(key, val){
					update(val);
				});
			}
			function up(i, obj){
				$(obj).parents('.panel-heading').addClass('prc');
				if(i !== 0){
					var tmp = qs[i - 1];
					qs[i - 1] = qs[i];
					qs[i] = tmp;
					updateUi();
				}
				setTimeout(function(){
					$(obj).parents('.panel-heading').removeClass('prc');
				}, 100);
			}
			function down(i, obj){
				$(obj).parents('.panel-heading').addClass('prc');
				if(i !== qs.length - 1){
					var tmp = qs[i + 1];
					qs[i + 1] = qs[i];
					qs[i] = tmp;
					updateUi();
				}
				setTimeout(function(){
					$(obj).parents('.panel-heading').removeClass('prc');
				}, 100);
			}
			function clear(){
				$('#add').prop('disabled', 'disabled');
				$('#q').val('');
				$('#s1').val('');
				$('#s2').val('');
				$('#s3').val('');
				$('#s4').val('');
				$('#q').focus();
			}
			function spanclc(sp){
				sp.children().prop('checked', 'checked');
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
			Number.prototype.toPersian = function(){
				var id = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
				return this.toString().replace(/[0-9]/g, function(w){
					return id[+w]
				});
			}
			function isDuplicatedQuestion(str){
				var res = -1;
				$.each(qs, function(key, val){
					if(str === val.str){
						res = key;
						return;
					}
				});
				return res;
			}
			function getTestSelection(){
				var t = {};
				t[0] = $('#s1').val() === '' ? 'عالی' : $('#s1').val();
				t[1] = $('#s2').val() === '' ? 'خوب' : $('#s2').val();
				t[2] = $('#s3').val() === '' ? 'متوسط' : $('#s3').val();
				t[3] = $('#s4').val() === '' ? 'ضعیف' : $('#s4').val();
				return t;
			}
			function enableSelection(){
				$('#s1').removeAttr('disabled');
				$('#s2').removeAttr('disabled');
				$('#s3').removeAttr('disabled');
				$('#s4').removeAttr('disabled');
			}
			function disableSelection(){
				$('#s1').prop('disabled', 'disabled');
				$('#s2').prop('disabled', 'disabled');
				$('#s3').prop('disabled', 'disabled');
				$('#s4').prop('disabled', 'disabled');
				$('#s1').val('');
				$('#s2').val('');
				$('#s3').val('');
				$('#s4').val('');
			}
			$("#backBtn").click(function(){
				redirect("admin.php");
			});
		</script>
	</body>
</html>

                            
                            