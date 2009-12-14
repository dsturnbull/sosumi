#!/usr/bin/env php
<?php
	require 'class.sosumi.php';

	$ssm = new Sosumi('your_username', 'your_password');
	$loc = $ssm->locate();
	$time = microtime(true);

	print "{ \"ts\": {$time}, \"udid\": \"{$loc->udid}\", \"lat\": {$loc->latitude}, \"long\": {$loc->longitude} }\n"
?>
