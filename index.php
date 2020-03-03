<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Crawl vnexpress - Quoc Thang</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link rel='stylesheet' href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link rel='stylesheet' href="assets/css/style.css">
</head>
<body>
	<?php
	require "simple_html_dom.php";
	$html = file_get_html("https://vnexpress.net/the-thao");
	$tins = $html->find("article.list_news h4.title_news");
	?>
	<div align="center">
		<section id="main-content">
			<h3>VNEXPRESS (The Thao): <?php echo count($tins);?></h3>
		</section>
	</div>
	<?php
	foreach($tins as $t){
		$a = $t->find("a",0);
		$title = $a->attr["title"];
		echo "<hr/>";
		echo "&ensp;&ensp;"; echo "["; echo $t->innertext; echo "]"; echo "&ensp;&ensp;";
		echo "→	 ";
		echo $title = $a->title;
	}
	?>
    <div class="line"></div>
    <div class="footer">
        &copy; 2020 made with by <a href="https://facebook.com/100012349937086" target="_blank" rel="nofollow">Quoc Thang</a>.
    </div>
</body>
</html>
