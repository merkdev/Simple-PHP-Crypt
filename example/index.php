<?php

	require dirname(__DIR__).'/src/crypt.php';

	$integer = 123123;

	$crypted = Crypt::hash($integer);
	$decrypted = Crypt::unhash($crypted);

	echo "<pre>";
	echo "Crypted: $crypted";
	echo "</pre>";

	echo "<pre>";
	echo "Decrypted: $decrypted";
	echo "</pre>";