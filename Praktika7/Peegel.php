<?php
/**
 * Created by PhpStorm.
 * User: KS
 * Date: 25/03/2016
 * Time: 11:52
 */

function tagantEtte($a){
    for($i=strlen($a)-1,$j=0;$i>=0,$j<strlen($a);$i--,$j++){
        $result[$j]=$a[$i];
    }
    $out = implode($result);
    echo "this is from emplode: ".$out;
}

//function tagantEtteVarKaks($b){
//    //$result=substr($b,-1);
//    //$resArray[] = $result;
//    $b=substr($b,0,-1);
//    if(strlen($b)>=0) {
//        tagantEtteVarKaks($b);
//    }
//    //$array=implode($resArray);
//    //echo $array;
//}





tagantEtte("Hello world");
//tagantEtteVarKaks("Hey");
