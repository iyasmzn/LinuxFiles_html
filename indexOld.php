<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="dashboard/style.css">
	<title>Iyasmzn</title>
</head>
<body onload="animateTitle();">
	<div id="background"></div>
	<div id="card">
		<p><a href="phpmyadmin/">
			<img src="dashboard/image/phpmyadmin-logo.png">
		</a></p>
	</div>
	<div id="title">
		<h1 id="welcome" onmouseover="overIn(this);" onmouseout="overOut(this);">WELCOME!</h1>
	</div>
	<div id="subOuter">
		<div id="subtitle1">
			<h2>Web Programming 1 { PHP MYSQL }</h2>
		</div>	
		<div id="subtitle2">
			<h2>Web Programming 2 { PHP Learning }</h2>
		</div>	
		<div id="subtitle3">
			<h2>Web Design <h2>
		</div>	
		<div id="subtitle4">
			<h2>UJIAN</h2>
		</div>	
		<div id="subtitle5">
			<h2>GIT</h2>
		</div>	
	</div>
	<table id="menu_tab">
		<tr>
			<td>
				<a href="phpmysql/" onmouseover="subIn();" onmouseout="subOut();">
					<img src="dashboard/image/php_img.png">
				</a>	
			</td>
			<td>
				<a href="programming/" onmouseover="subIn2();" onmouseout="subOut2();">
					<img src="dashboard/image/coding_img.png">
				</a>
			</td>
			<td>
				<a href="web_design/" onmouseover="subIn3();" onmouseout="subOut3();">
					<img src="dashboard/image/design_img.png">
				</a>
			</td>
			<td>
				<a href="ujian/"  onmouseover="subIn4();" onmouseout="subOut4();">
					<img src="dashboard/image/self_img.png">
				</a>	
			</td>
			<td>
				<a href="git/" onmouseover="subIn5();" onmouseout="subOut5();">
					<img src="dashboard/image/git_icon.png">
				</a>	
			</td>
		</tr>
	</table>
	<script type="text/javascript">
		function animateTitle() {
			var welcome = document.getElementById('welcome');
			welcome.style.fontSize = '100px';
			welcome.style.color = '#f54f33';
			welcome.style.top = '-50px';
			welcome.style.opacity = '1';
		}
		function overIn(x) {
			x.style.color = "skyblue";
		}
		function overOut(x) {
			x.style.color = "#f54f33";
		}
		function subIn() {
			var sub1 = document.getElementById('subtitle1');
			sub1.style.opacity = "1";
			sub1.style.color = "#4766cc";
		}
		function subOut() {
			var sub1 = document.getElementById('subtitle1');
			sub1.style.opacity = "0";
		}
		function subIn2() {
			var sub2 = document.getElementById('subtitle2');
			sub2.style.opacity = "1";
			sub2.style.color = "#f54f33";
		}
		function subOut2() {
			var sub2 = document.getElementById('subtitle2');
			sub2.style.opacity = "0";
		}
		function subIn3() {
			var sub3 = document.getElementById('subtitle3');
			sub3.style.opacity = "1";
			sub3.style.color = "#25b7d3";
		}
		function subOut3() {
			var sub3 = document.getElementById('subtitle3');
			sub3.style.opacity = "0";
		}
		function subIn4() {
			var sub4 = document.getElementById('subtitle4');
			sub4.style.opacity = "1";
			sub4.style.color = "#dd574c";
		}
		function subOut4() {
			var sub4 = document.getElementById('subtitle4');
			sub4.style.opacity = "0";
		}
		function subIn5() {
			var sub5 = document.getElementById('subtitle5');
			sub5.style.opacity = "1";
			sub5.style.color = "#f05133";
		}
		function subOut5() {
			var sub5 = document.getElementById('subtitle5');
			sub5.style.opacity = "0";
		}
	</script>
</body>
</html>