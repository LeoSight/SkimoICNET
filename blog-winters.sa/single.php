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
<div class="single">
	 <div class="container">
		  <div class="col-md-8 single-main">				 
			  <div class="single-grid">
					<?php
						if(isset($_GET['id']) && intval($_GET['id'])){
							$id = intval($_GET['id']);
							$xml = file_get_contents('clanky.xml');
							$clanky = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
							$clanky_array = json_decode(json_encode((array)$clanky), TRUE);
							$clanek = $clanky_array['clanek'][$id-1];
							echo '<img src="'.$clanek['obrazek'].'"/>';
							echo '<p>'.$clanek['fulltext'].'</p>';
						}
					?>
			  </div>
			 <ul class="comment-list">
		  		   <h5 class="post-author_head">Napísal <a href="#" title="Posts by admin" rel="author">Alan Winters</a></h5>
		  		   <li><img src="images/avatar.png" class="img-responsive" alt="">
		  		   <div class="desc">
		  		   <p>Pozri všetky články od: <a href="http://ic.leosight.cz/www/blog-winters.sa/" title="Posts by admin" rel="author">Alan Winters</a></p>
		  		   </div>
		  		   <div class="clearfix"></div>
		  		   </li>
		  	  </ul>
			 

			  <div class="col-md-4 side-content">
				 </div>
				 <div class="clearfix"></div>
			  </div>
			  <div class="clearfix"></div>
		  </div>
	  </div>
</div>

<div class="footer">
	 <div class="container">
	 <p>Copyright © 2017 Alan Winters - Všetky práva vyhradené. | <a href="http://ic.leosight.cz/www/rozcestnik.sa/">Rozcestník</a></p>
	 </div>
</div>