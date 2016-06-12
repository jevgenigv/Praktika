<?php
require_once('func.php');
connect_db();

$page="pealeht";
if (isset($_GET['page']) && $_GET['page']!=""){
    $page=htmlspecialchars($_GET['page']);
}

switch($page){
    case "lisacomment":
        add_comment();
        kuva_kommentaarid();
        include ('pealeht.html');
        break;

    default:
        kuva_kommentaarid();
        break;
}