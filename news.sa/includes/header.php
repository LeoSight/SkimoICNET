<!DOCTYPE html>
<html lang="cs">
	<head>
		<meta charset="utf-8"/>
		<title>WWW.NEWS.SA</title>
		<link rel="stylesheet" href="css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Economica:700' rel='stylesheet' type='text/css'>
		<script src="../jquery.min.js"></script>
	</head>
	<body <?php if($current == 1){ echo 'class="page1"'; } ?> id="top">
		<div class="main">
			<header>
				<div class="clear"></div>
				<div class="container_12">
					<div class="grid_12">
						<h1>
							<a href="index.php">
								<img src="images/logo.png" alt="SAN News">
							</a>
						</h1>
					</div>
				</div>
			</header>
		</div>
		<div class="menu_block">
			<div class="container_12">
				<div class="grid_12">
					<nav class="horizontal-nav full-width horizontalNav-notprocessed">
						<ul class="sf-menu">
							<li <?php if($current == 1){ echo 'class="current"'; } ?>><a href="index.php">Aktuality</a></li>
							<li <?php if($current == 2){ echo 'class="current"'; } ?>><a href="galerie.php">Galerie</a></li>
							<li <?php if($current == 3){ echo 'class="current"'; } ?>><a href="tym.php">Tým</a></li>
						</ul>
					</nav>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="main">