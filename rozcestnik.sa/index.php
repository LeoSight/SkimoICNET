<html>
	<head>
		<title>www.rozcestnik.sa</title>
		<meta charset="utf-8"/>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;subset=latin-ext" rel="stylesheet"/>
		<style type="text/css">
			html,body{
				margin: 0;
				padding: 0;
			}
			
			body{
				text-align: center;
				font-family: 'Ubuntu', sans-serif;
				background: url('bg.jpg') no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			
			h1{
				margin: 30px auto;
				text-align: center;
			}
			
			hr{
				color: #CCC;
				background-color: #CCC;
				border-color: #CCC;
			}
			
			a{
				color: #333;
				text-decoration: none;
				border-bottom: 1px dotted #333;
			}
			
			#livesearch{
				padding: 7px;
				margin: 15px auto;
				text-align: left;
				width: 400px;
			}
		</style>
		<script type="text/javascript">
			function showResult(str) {
				if (str.length==0) {
					document.getElementById("livesearch").innerHTML="";
					document.getElementById("livesearch").style.border="0px";
					return;
				}
				if (window.XMLHttpRequest) {
					xmlhttp=new XMLHttpRequest();
				} else {
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange=function() {
					if (this.readyState==4 && this.status==200) {
						document.getElementById("livesearch").innerHTML=this.responseText;
						document.getElementById("livesearch").style.border="1px solid #A5ACB2";
					}
				}
				xmlhttp.open("GET","search.php?q="+str,true);
				xmlhttp.send();
			}
		</script>
	</head>
	<body>
		<h1>ROZCESTNIK.SA</h1>

		<form action="">
			Vyhledávání: <input type="text" size="35" onkeyup="showResult(this.value)"/>
		</form>
		
		<div id="livesearch"></div>
		
		<br /><b>Nejnavštěvovanější webové stránky:</b><br />
		<a href="http://ic.leosight.cz/">SantosBook.sa - Sociální síť</a><br />
		<a href="http://ic.leosight.cz/www/vlada.sa">vlada.sa - Oficiální web vlády San Andreas</a><br />
		<a href="http://mapa.leosight.cz/">mapa.vlada.sa - Katastr nemovitostí San Andreas</a><br />
		<a href="http://ic.leosight.cz/www/policie.sa">policie.sa - Oficiální web Policie San Andreas</a><br />
		<a href="http://ic.leosight.cz/www/news.sa">news.sa - Web společnosti San Andreas Network</a><br />
		<a href="http://ic.leosight.cz/www/nic.sa">nic.sa - Správce domény .SA</a><br />
		<a href="http://ic.leosight.cz/www/mail.sa">mail.sa - Online e-mailový klient</a><br />
		
		<br /><br />
		<small>Copyright &copy; 2017 | Provozuje <a href="http://ic.leosight.cz/www/news.sa">San Andreas Network</a></small>
	</body>
</html>