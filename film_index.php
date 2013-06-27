<html>
<head>
	<script type="text/javascript" src="./bootstrap/js/jquery-1.9.1.min.js"></script><!--一定要先載入-->
	<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<? include("CSS.php"); ?>
</head>
<body>
	<? include("./bar_1.php"); ?>
		<div class="carousel slide" id="myCarousel">
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
				<li data-slide-to="1" data-target="#myCarousel" class=""></li>
				<li data-slide-to="2" data-target="#myCarousel" class=""></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img alt="" src="./pic/Man_Of_Steel.jpg">
					<div class="carousel-caption">
						<h4>Man Of Steel</h4>
						<p><br />
						   </p>
					</div>
				</div>
				<div class="item">
					<img alt="" src="./pic/iron_man_3.jpg">
					<div class="carousel-caption">
						<h4>Iron Man 3</h4>
						<p>《鋼鐵人》系列第三集，小勞勃道尼與葛妮絲派特洛、唐其鐸等原班人馬再續演出。<br />
							此次鋼鐵人史塔克將再次大展身手解除危機......</p>
					</div>
				</div>
				<div class="item">
					<img alt="" src="./pic/TDKR">
					<div class="carousel-caption">
						<h4>The Dark Knight Rise</h4>
						<p>蝙蝠俠三部曲之最後一部作品，高譚市原本是從一個逐漸和平的城市，但班恩把整個城市再度陷入亂局<br />
						   使得韋恩再次以「蝙蝠俠」身份打擊班恩的罪惡，使兩人展開了在高譚市的終極決戰。</p>
					</div>
				</div>
			</div>
			<a data-slide="prev" href="#myCarousel" class="left carousel-control">‹</a>
			<a data-slide="next" href="#myCarousel" class="right carousel-control">›</a>
		</div>
	<? include("./bar_2.php"); ?>
</body>
</html>	