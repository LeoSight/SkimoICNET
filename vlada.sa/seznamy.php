<?php include('includes/header.php'); ?>
	<article>
		<div class="stripes"></div>
			<h2>Seznamy</h2>
			<?php
				$xml = file_get_contents('seznamy.xml');
				$seznamy = simplexml_load_string($xml);
				foreach($seznamy as $k => $v){
					echo "<h3>".$v->nazev."</h3>";
					echo "<ul>";
					foreach($v->zaznamy->zaznam as $kk => $vv){
						if(!isset($_GET['secret']) && $v->secret){
							echo "<li>".md5($vv)."-".md5($kk.$vv)."</li>";
						}else{
							echo "<li>".$vv."</li>";
						}
					}
					echo "</ul>";
				}
			?>
		<div class="stripes"></div>
	</article>
<?php include('includes/footer.php'); ?>