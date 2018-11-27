<!DOCTYPE html>
<html>
<head>
	<title>markdown</title>
</head>
	<body>
		<h1>Mon titre</h1>
<?php require 'markdown.php'; ?>
<?= Markdown(file_get_contents('doc.md')); ?>

	



	</body>
</html>