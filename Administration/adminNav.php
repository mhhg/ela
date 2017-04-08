                                <link href="../bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" rel="stylesheet">
			<link href="../bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
			<script src="../Js/jQueryLib.js"></script>
			<script src="../bootstrap-3.1.1-dist/js/bootstrap.js"></script>
			<meta charset="UTF-8">
		<style>
			#adm{
				z-index: 15;
				position: fixed;
				top: 0px;
				width: 100%;
			}
			#adm button{
				margin: 5px 20% 5px 20% !important;
				display: block;
				cursor: pointer;
				width: 70%;
				text-align: center;
			}
			#adm .btns{
				display: none;
				
			}
			#adm ol{
				margin: 0px 0px 0px 0px !important;
				padding: 10px 10px 10px 70px;
				font-size: 18px !important;
				background: black;
				color: white;
				border: 1px solid black;
				width: 100%;
				cursor: pointer;
				position: absolute;
			}
			#adm span{

				top: 0px;
				display: inline-table;
				background: none;
				height: 0px !important;
				overflow: hidden;
			}

			#adm .buttons{
				width: 100%;
				background: none;
				height: 0px;
				padding-top: 40px;
			}
			#adm .height{
				height: 500px;
			}
		</style>
		<div id="adm"></div>
		<script>
			function redirect(string){
				window.location.replace("http://elaonline.ir/Administration/" + string);
			}
			var adm = {'Users': {'Add': 'adduser', 'Edit': 'edituser'}, 'Class': {'Add': 'addclass', 'Edit': 'Edit-Class', 'Report Cards': 'adminResult', 'Class Reports': 'ClassReports'}, 'Message': {'View': 'viewMessages'}, 'Forms': {'Create': 'form', 'Attach': 'attachform', 'Stat': undefined}, 'Uploads': {'Material': undefined}};
			var gly = {'Users': 'glyphicon-user', 'Class': 'glyphicon-book', 'Message': 'glyphicon-envelope', 'Forms': 'glyphicon-th-list', 'Uploads': 'glyphicon-floppy-disk'};
			$(document).ready(function(){
				$("th").hover(function(){
					$("table tr th").css("backgroundColor", "#428bca");
				});
				var s = "";

				$.each(adm, function(key, val){
					s += '<span class="a" onclick="toggler($(this))"><ol class="lead glyphicon ' + gly[key] + '" >&nbsp; ' + key + '</ol><div class="buttons" >';
					$.each(val, function(vk, vv){
						s += '<button class="btn btn-default btns" onclick="redh($(this))">' + vk + '</button>';
					});
					s += '</div></span>';
				});
				$('#adm').append(s);
//				$('#adm').children().eq(0).css('paddingLeft','30px');
				$('#adm span').width(screen.width / Object.keys(adm).length - 60 );

			});
			function toggler(obj){
				$.each($(obj).siblings(), function(key, val){
					$(val).css('overflow','hidden');
					$(val).children('.buttons').css('height', '0px');
				});
				$(obj).css('overflow','visible');
				$(obj).addClass('clk');
				$(obj).children().children('.btns').css('display', 'block');
				$(obj).children('.buttons').animate({
					height: ($(obj).children('.buttons').children().eq(0).height() * $(obj).children('.buttons').children().length * 2)
				}, 100);
				setTimeout(function(){
					$(obj).removeClass('clk');
				},100);
			}
			$('html').click(function(){
				$.each($('#adm').children(), function(key, val){
					if($(val).hasClass('clk')){
						return;
					}
					$(val).children().children('.btns').css('display','none');
					$(val).css('overflow','hidden');
					$(val).children('.buttons').css('height', '0px');
				});
			});
			function redh(obj){
				var k = $(obj).html().trim();
				var p = $(obj).parent().parent().find('ol').html().trim().toString().substring(7)
				var to = adm[p][k] + '.php';
				redirect(to);
			}
		</script>



                            