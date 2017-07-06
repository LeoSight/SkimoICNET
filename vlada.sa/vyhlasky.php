<?php include('includes/header.php'); ?>
	<article>
		<div class="stripes"></div>
			<h2>Vyhlášky vlády San Andreas</h2>
			<ol>
				<?php
					$xml = file_get_contents('vyhlasky.xml');
					$vyhlasky = simplexml_load_string($xml);
					
					foreach($vyhlasky as $key => $value){
						
						$pred = "";
						$za = "";
						$info = "Platné od ".$value->datum;
						
						if($value->upraveno){
							$info .= ", upraveno ".$value->upraveno;
						}
						
						if($value->zruseno){
							$pred = "<strike>";
							$za = "</strike>";
							$info .= ", zrušeno ".$value->zruseno;
						}

						echo "<li>".$pred.$value->text.$za."<br/><small>".$info."</small></li>";
						
					}
				?>
			</ol>
		<div class="stripes"></div>
	</article>
<?php include('includes/footer.php'); ?>