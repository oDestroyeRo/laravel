<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>test</h1>
		<?php // echo $date; ?>
		{{ $date }}
		<?php //foreach ($posts as $post ):?>
		@foreach ($posts as $post )
			<div>
				<div class='title'>
					<?php //echo $post['title']; ?>
					{{ $post['title'] }}
				</div>
				<div class='body'>
					<?php //echo $post['body']; ?>
					{{ $post['body'] }}
				</div>
			</div>
		<?php //endforeach; ?>
		@endforeach
	</body>
</html>