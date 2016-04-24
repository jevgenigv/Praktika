<?php
/**
 * Created by PhpStorm.
 * User: KS
 * Date: 10/04/2016
 * Time: 11:57
 */

function startSession(){
    session_start();
}

function sessionStop(){
    $_SESSION = array();
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 42000, '/');
    }
    session_destroy();
}

startSession();

$pildid = array(
    array("src"=>"../controllers/pildid/nameless1.jpg","alt"=>"nimetus 1"),
    array("src"=>"../controllers/pildid/nameless2.jpg","alt"=>"nimetus 2"),
    array("src"=>"../controllers/pildid/nameless3.jpg","alt"=>"nimetus 3"),
    array("src"=>"../controllers/pildid/nameless4.jpg","alt"=>"nimetus 4"),
    array("src"=>"../controllers/pildid/nameless5.jpg","alt"=>"nimetus 5"),
    array("src"=>"../controllers/pildid/nameless6.jpg","alt"=>"nimetus 6")
);

include_once ('head.html');

if(isset($_GET['mode']) && $_GET['mode'] != null){
    $mode = $_GET['mode'];
    switch($mode){
        case 'pealeht':
            include ("../multipage/pealeht.php");
            break;
        case 'galerii':
            include ("../multipage/galerii.php");
            break;
        case 'vote':
            if(isset($_SESSION['votedFor']) && $_SESSION['votedFor']=!null){
                include ("../multipage/tulemus.php");
            } else {
                include("../multipage/vote.php");
            }
            break;
        case 'tulemus':
            include ("../multipage/tulemus.php");
            break;
        default:
            include ("../multipage/pealeht.php");
            break;
    }
}