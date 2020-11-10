<?php

$desperson = addslashes($_POST['desperson']);
$observation = addslashes($_POST['observation']);
$desemail = addslashes($_POST['desemail']);
$product = addslashes($_POST['product']);

$link = mysqli_connect("localhost", "root", "", "lojaphp7");

// Check connection
if ($link === false) {
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO tb_photo (user, desemail, product, observation) VALUES
           ('$desperson', '$desemail', '$product', '$observation')";
if (mysqli_query($link, $sql)) {
	header('Location: /profile');
} else {
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);