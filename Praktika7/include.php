<?php
/**
 * Created by PhpStorm.
 * User: KS
 * Date: 26/03/2016
 * Time: 10:58
 */

$kassid = array(
    array('nimi'=>'Miisu','vanus'=>2,'omanikuNimi'=>'Jevgeni','varvus'=>'hall'),
    array('nimi'=>'Arli','vanus'=>4,'omanikuNimi'=>'Osana','varvus'=>'must-valge'),
    array('nimi'=>'Stepo','vanus'=>1,'omanikuNimi'=>'Svetlana','varvus'=>'oranz')
);

foreach($kassid as $kass){
    include 'kassid.html';
}