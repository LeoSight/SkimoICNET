<?php include('includes/header.php'); ?>
	<article>
		<div class="stripes"></div>
			<h2>Novinky a důležitá vládní oznámení</h2>
				<?php
					$xml = file_get_contents('novinky.xml');
					$novinky = simplexml_load_string($xml);
					foreach($novinky as $key => $value){
						echo "<p>
								<b>".$value->titulek." - ".$value->autor." - ".$value->datum."</b><br />
								".$value->text."
							</p>";
					}
				?>
		<div class="stripes"></div>
	</article>
<?php include('includes/footer.php'); ?>