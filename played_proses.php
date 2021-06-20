<?php

require_once "inc/config.php";

$played = new App\Played();


if (isset($_POST['b_input'])) {
	$played->input();
	header("location:index.php?page=played_tampil");

}

if (isset($_POST['b_edit'])) {
	$played->update();
	header("location:index.php?page=played_tampil");
}