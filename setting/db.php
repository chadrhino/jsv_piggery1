<?php
try {
	$db = new PDO('mysql:host=localhost;dbname=u510162695_pig','u510162695_pig','1Pigdatabase');
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	die('<h4 style="color:red">Incorrect Connection Details</h4>');
}
