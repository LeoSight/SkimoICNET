<?php

$xmlDoc = new DOMDocument();
$xmlDoc->load("links.xml");

$x = $xmlDoc->getElementsByTagName('link');

$q = $_GET["q"];

if (strlen($q)>0) {
	$hint="";
	for($i=0; $i<($x->length); $i++) {
		$y=$x->item($i)->getElementsByTagName('title');
		$z=$x->item($i)->getElementsByTagName('url');
		if ($y->item(0)->nodeType==1) {
			if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
				if ($hint=="") {
					$hint="<a href='" .
					$z->item(0)->childNodes->item(0)->nodeValue .
					"'>" .
					$y->item(0)->childNodes->item(0)->nodeValue . "</a>";
				} else {
					$hint=$hint . "<br /><a href='" .
					$z->item(0)->childNodes->item(0)->nodeValue .
					"'>" .
					$y->item(0)->childNodes->item(0)->nodeValue . "</a>";
				}
			}
		}
	}
}

if ($q=="@lemon"){
	$response="<a href='http://ic.leosight.cz/www/[deep]/'>LemonSearch</a>";
} elseif ($hint=="") {
	$response="Nenalezen žádný výsledek";
} else {
	$response=$hint;
}

echo $response;

?>