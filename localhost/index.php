<?php
if(!$_GET["tf1"] and !$_GET["tf2"])
	{
		$tf1=0;
		$tf2=0;
	}else
	{
		$tf1=$_GET["tf1"];
		$tf2=$_GET["tf2"];
	}

$title = 'Приветствую Вас на моей страничке!';
$name = 'Александр';
$famil = 'Паньшин';
$city = 'Красноярск';
$age = 50;

include 'main.php';
?>