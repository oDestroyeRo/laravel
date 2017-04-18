<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>test</h1>
		<?php echo $date; ?>
		<?php foreach ($posts as $post ):?>
			<div>
				<div class='title'>
					<?php echo $post['title']; ?>
				</div>
				<div class='body'>
					<?php echo $post['title']; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</body>
</html>