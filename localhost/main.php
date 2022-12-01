<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div class="main">
	<div class="navig">
		<?php include 'navig.inc.php' ?> 
	</div>
	<div class="profil"> 
		<p> <img src="img/prof.jpg" class="logo"> </p>
		<p><strong><?php echo $name." ".$famil ?></strong></p>
		<p>Город: <?php echo $city ?></p>
		<p>Возраст: <?php echo $age ?> лет</p>
	</div>
	<div class="formsum">
  <form  action="index.php">
		<input type="text" name="tf1" value="<?php echo $tf1 ?>">
		<input type="text" name="tf2" value="<?php echo $tf2 ?>">
		<input type="submit" name="submit" id="submit" value="Вывести сумму">
  </form>
	<?php  include 'knowledge.inc.php'; ?>
	  </div>
	  </div>
</body>
</html>