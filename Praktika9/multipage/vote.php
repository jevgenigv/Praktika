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
	<h3>Vali oma lemmik :)</h3>
	<form action="?mode=tulemus" method="post">
        <?php
        foreach($pildid as $key=>$pilt){
            echo "<p><label for=\"p".($key+1)."\"><img src=\"".$pilt["src"]."\" alt=\"".$pilt["alt"].
                "\" height=\"100\" ></label><input type=\"radio\" value=\"".
                ($key+1)."\" id=\"p".($key+1)."\" name=\"pilt\" /></p>";
        }
        ?>

		<br/>
		<input type="submit" value="Valin!"/>
	</form>
<?php
require_once('../controllers/foot.html');
?>