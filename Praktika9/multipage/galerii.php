<?php
	require_once('../controllers/head.html');
	$pildid = array(
		array("src"=>"../controllers/pildid/nameless1.jpg","alt"=>"nimetus 1"),
		array("src"=>"../controllers/pildid/nameless2.jpg","alt"=>"nimetus 2"),
		array("src"=>"../controllers/pildid/nameless3.jpg","alt"=>"nimetus 3"),
		array("src"=>"../controllers/pildid/nameless4.jpg","alt"=>"nimetus 4"),
		array("src"=>"../controllers/pildid/nameless5.jpg","alt"=>"nimetus 5"),
		array("src"=>"../controllers/pildid/nameless6.jpg","alt"=>"nimetus 6")
	);
?>
<h3>Fotod</h3>
	<div id="gallery">
		<?php
			foreach($pildid as $pilt){
				echo "<img src=".$pilt["src"]." alt=".$pilt["alt"]." />";
			}
		?>
	</div>
<?php
	require_once('../controllers/foot.html');
?>