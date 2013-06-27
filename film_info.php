<? header('Content-Type: text/html; charset = utf-8'); ?>
<html>
<head>
	<script type="text/javascript" src="./bootstrap/js/jquery-1.9.1.min.js"></script><!--一定要先載入-->
	<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<? include("CSS.php"); ?>
</head>
<body>
	<? include("./bar_1.php"); ?>
		<? include("./film_banner.php"); ?>
		<div style="background-image:url(./pic/web_bg.png);">
			<div class="container family" >
				<h3 class="text-error">放映時間</h3>
				<h4>2013年6月11日  10:00am</h4>
				<h3 class="text-error">放映地點</h3>
				<h4>國立政治大學大勇樓401教室</h4>
			
				<div align='center'><img  src="./pic/timetable.png" class="img-rounded" /></div>
			</div>
		</div>	
	<? include("./bar_2.php"); ?>
</body>
</html>	