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
			<div class="tabbable tabs-right">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#rA" data-toggle="tab"><h3>豬耳朵</h3></a></li>
                <li><a href="#rB" data-toggle="tab"><h3>默路</h3></a></li>
                <li><a href="#rC" data-toggle="tab"><h3>李真</h3></a></li>
				<li><a href="#rD" data-toggle="tab"><h3>餐桌禮儀</h3></a></li>
				<li><a href="#rE" data-toggle="tab"><h3>朋友</h3></a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="rA">
					<h3 class="text-error">《豬耳朵》</h3>
					<div align='center' style='margin:30px 10px 30px 10px;' ><img  src="./pic/1/1_1.jpg" class="img-rounded" /></div>
					<div align='center' style='margin:30px 10px 30px 10px;' ><img  src="./pic/1/1_2.jpg" class="img-rounded" /></div>
					<div align='center' style='margin:30px 10px 30px 10px;' ><img  src="./pic/1/1_3.jpg" class="img-rounded" /></div>
				</div>
                <div class="tab-pane" id="rB">
					<h3 class="text-error">《默路》</h3>
					<div align='center' style='margin:30px 10px 30px 10px;' ><img  src="./pic/2/2_1.jpg" class="img-rounded" /></div>
					<div align='center' style='margin:30px 10px 30px 10px;' ><img  src="./pic/2/2_2.jpg" class="img-rounded" /></div>
					<div align='center' style='margin:30px 10px 30px 10px;' ><img  src="./pic/2/2_3.jpg" class="img-rounded" /></div>
                </div>
                <div class="tab-pane" id="rC">
                	<h3 class="text-error">《李真》</h3>
					<div align='center' style='margin:30px 10px 30px 10px;' ><img  src="./pic/3/3_1.jpg" class="img-rounded" /></div>
					<div align='center' style='margin:30px 10px 30px 10px;' ><img  src="./pic/3/3_2.jpg" class="img-rounded" /></div>
					<div align='center' style='margin:30px 10px 30px 10px;' ><img  src="./pic/3/3_3.png" class="img-rounded" /></div>
                </div>
				<div class="tab-pane" id="rD">
                	<h3 class="text-error">《餐桌禮儀》</h3>
					<div align='center' style='margin:30px 10px 30px 10px;' ><img  src="./pic/4/4_1.jpg" class="img-rounded" /></div>
					<div align='center' style='margin:30px 10px 30px 10px;' ><img  src="./pic/4/4_2.jpg" class="img-rounded" /></div>
					<div align='center' style='margin:30px 10px 30px 10px;' ><img  src="./pic/4/4_3.jpg" class="img-rounded" /></div>
                </div>
				<div class="tab-pane" id="rE">
                	<h3 class="text-error">《朋友》</h3>
					<div align='center' style='margin:30px 10px 30px 10px;' ><img  src="./pic/5/5_1.jpg" class="img-rounded" /></div>
					<div align='center' style='margin:30px 10px 30px 10px;' ><img  src="./pic/5/5_2.jpg" class="img-rounded" /></div>
                </div>
              </div>
            </div> <!-- /tabbable -->
		</div>
		</div>	
	<? include("./bar_2.php"); ?>
</body>
</html>	