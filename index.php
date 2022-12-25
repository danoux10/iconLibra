<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<?php include 'function.php'; ?>
<body>

<nav>
	<div class="button" id="brand">brand</div>
	<div class="button" id="regular">regular</div>
	<div class="button" id="solid">solid</div>
</nav>

<div id="view-brand">
	<?php echo brand();?>
</div>

<div id="view-regular">
	<?php echo regular();?>
</div>

<div id="view-solid">
	<?php echo solid();?>
</div>

<script src="script.js"></script>
<script src="copySvg.js"></script>
</body>
</html>