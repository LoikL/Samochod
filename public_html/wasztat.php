<?php

include('samochodd.php');


	$samochod = new Samochod();
    $samochodHelloSamochod = $samochod->getHelloSamochod();
	echo samochodHelloSamochod;

?>