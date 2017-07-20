<html>
	<head>
		<title>www.zzs.sa</title>
		<meta charset="utf-8"/>
		<link href="includes/style.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div id="main">
			<div id="header">
				<div id="logo">
					<div id="logo_text">
						<h1><a href="index.php">ZZS</a></h1>
						<h2>Zdravotnická záchranná služba Los Santos</h2>
					</div>
				</div>
				<div id="menubar">
					<ul id="menu">
						<li <?php if($page==1){ echo 'class="selected"'; } ?>><a href="index.php">Úvodní stránka</a></li>
						<li <?php if($page==2){ echo 'class="selected"'; } ?>><a href="novinky.php">Novinky</a></li>
						<li <?php if($page==3){ echo 'class="selected"'; } ?>><a href="verejnost.php">Pro veřejnost</a></li>
						<li <?php if($page==4){ echo 'class="selected"'; } ?>><a href="odprodej.php">Odprodej majetku</a></li>
						<li <?php if($page==5){ echo 'class="selected"'; } ?>><a href="kontakt.php">Kontakt</a></li>
					</ul>
				</div>
			</div>
			<div id="site_content">
				<div class="sidebar">
					<h3>Boční panel</h3>
					<h4>Chráníme to nejcennější</h4>
					<p>Naším určením je péče o život a zdraví lidí, kteří jsou na něm bezprostředně ohrožení. Naším cílem je pozvednout kvality života v Los Santos ve zdravotnické oblasti a pozvednout úroveň zdravotnické lékařské i nelékařské péče. Neustále rozvíjíme nové i již existující projekty, abychom mohli zajistit lepší funkčnost zdravotnictví, které se v LS pomalu zdokonaluje a zlepšuje. Věříme, že brzy dosáhneme kvality státní úrovně, a že ji jednou jistě přesáhneme.</p>
				</div>
				<div id="content">
