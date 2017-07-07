<!DOCTYPE HTML>
<html>
<head>
	<title>WWW.BLOG-WINTERS.SA</title>
	<link href="../bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet' type='text/css'>
	<script src="../jquery.min.js"></script>
</head>
<body>
<!---header---->			
<div class="header">  
	 <div class="container">
		  <div class="logo">
			  <a href="index.php"><img src="images/logo.jpg" title="" /></a>
		  </div>
			 <!---start-top-nav---->
			 <div class="top-menu">
				 <div class="search">
					 <form>
					 <input type="text" placeholder="" required="">
					 <input type="submit" value=""/>
					 </form>
				 </div>
				  <span class="menu"> </span> 
				   <ul>
						<li class="active"><a href="index.php">DOMOV</a></li>												
						<div class="clearfix"> </div>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
			<!---//End-top-nav---->					
	 </div>
</div>
<!--/header-->

<div class="content">
	<div class="container">
		<div class="content-grids">
			<div class="col-md-8 content-main">
				<?php
					$xml = file_get_contents('clanky.xml');
					$clanky = simplexml_load_string($xml);
					$i = 1;
					foreach($clanky as $key => $value){
						echo '<div class="content-grid">
								<div class="content-grid-info">
									<img src="'.$value->obrazek.'"/>
									<div class="post-info">
										<h4><a href="single.php?id='.$i.'">'.$value->titulek.'</a> '.$value->datum.'</h4>
										<p>'.$value->text.'</p>
										<a href="single.php?id='.$i.'"><span></span>Čítaj viac.</a>
									</div>
								</div>
							</div>';
						$i++;
					}
				?>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="footer">
	 <div class="container">
	 <p>Copyright © 2017 Alan Winters - Všetky práva vyhradené. | <a href="http://ic.leosight.cz/www/rozcestnik.sa/">Rozcestník</a></p>
	 </div>
</div>