<!DOCTYPE html>
<html>
<head>
	<title>markdown</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
	<body>
		<h1>Mon titre</h1>
<?php require 'markdown.php'; ?>
<?= Markdown(file_get_contents('doc.md')); ?>

	



	</body>
</html>