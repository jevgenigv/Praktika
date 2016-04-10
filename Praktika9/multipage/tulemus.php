<?php
require_once('../controllers/head.html');
?>
	<h3>Valiku tulemus</h3>
	<p><?php
        $pildid = array(
            array("src"=>"../controllers/pildid/nameless1.jpg","alt"=>"nimetus 1"),
            array("src"=>"../controllers/pildid/nameless2.jpg","alt"=>"nimetus 2"),
            array("src"=>"../controllers/pildid/nameless3.jpg","alt"=>"nimetus 3"),
            array("src"=>"../controllers/pildid/nameless4.jpg","alt"=>"nimetus 4"),
            array("src"=>"../controllers/pildid/nameless5.jpg","alt"=>"nimetus 5"),
            array("src"=>"../controllers/pildid/nameless6.jpg","alt"=>"nimetus 6")
        );
			if(isset($_POST['pilt']) && $_POST['pilt'] != null){
				$pilt = $_POST['pilt'];

				foreach ($pildid as $value) {
						if((int)(substr($value["alt"],-1)) == (int)$pilt){
							echo "Aitäh, sinu lemmik pilt Nr ".$pilt." on salvestatud meie andmebaasi (valetan)";
							break;
						}
					}
				} else {
					echo "Tehke oma valik!";
				}
		?>
	</p>
<?php
require_once('../controllers/foot.html');
?>