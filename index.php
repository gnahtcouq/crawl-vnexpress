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
