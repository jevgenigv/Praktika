<?php
function connect_db(){
    global $connection;
    $host="localhost";
    $user="test";
    $pass="t3st3r123";
    $db="test";
    $connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
    mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
}

function add_comment()
{
    global $connection;
    $errors = array();
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (in_array("", $_POST)) {
            $errors[] = "Kõik väljad pole täidetud";
        } else {
            if (isset($_POST['comment']) && $_POST['comment'] != "") {
                $comment = $_POST['comment'];
            } else {
                $errors[] = "Kommentaar puudub";
            }
        }
    }
    if (empty($errors)) {
        lisa_comment($comment);
    }
}

function kuva_kommentaarid(){
    global $connection;
    $commentaarid=array();
    $query="select * from jgavrilo_kommentaarid";
    $result = mysqli_query($connection, $query) or die("$query - ".mysqli_error($connection));
    while ($row = mysqli_fetch_assoc($result)){
        $commentaarid['comments'][] = $row;
    }
    include_once('pealeht.html');
}

    function lisa_comment($com) {
        global $connection;
        $comment=mysqli_real_escape_string($connection, $com);

        $query ="insert into jgavrilo_kommentaarid (comment) values ('$comment')";
        mysqli_query($connection, $query) or die("$query - ".mysqli_error($connection));
    }