<html>
<head>
	<title><?php echo $title; ?></title>
	<style type="text/css">
		body {
			background-color: 0;
			background-image: url(<?php echo $background; ?>);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
		}
		.container {
			max-width: 800px;
			background-color: rgba(255,255,255,0.8);
			text-align: center;
			padding: 30px;
			margin: 40px auto 0;
		}
		.clearfix {
			clear: both;
		}
		.text-center {
			text-align: center;
		}
		.item a {
			display: block;
			padding: 10px 8px;
			cursor: pointer;
			text-decoration: none;
			border: solid 1px transparent;
		}
		.item a:hover {
			border: solid 1px #a9a9a9;
		}
		.col-6 {
			width: 50%;
		}
		.col-4 {
			width: 33%;
		}
		.col-3 {
			width: 25%;
		}
		.col {
			float: left;
		}
		.col-clear {
			clear: both;
		}
	</style>
</head>
<body>
	<div id="app">
		<div class="container">
			<h1><?php echo $title; ?></h1>
<?php
	//output folder links
	$i = 0;

	//output folders
	foreach(glob('*', GLOB_ONLYDIR) as $dir) {
		//get directory name
		$dirname = basename($dir);

		//column
		$item_class = 'col-' . floor(12 / $col_max);
		if ($i % $col_max === 0) {
			$item_class .= ' col-clear';
			$i = 0;
		}

		//output col
		echo '<div class="item col ' . $item_class . '">';
		echo '<a href="' . $dirname . '">' . $dirname . '</a>';
		echo '</div>';
		
		$i++;
	}

	//output links
	foreach($links as $link) {
		//column
		$item_class = 'col-' . floor(12 / $col_max);
		if ($i % $col_max === 0) {
			$item_class .= ' col-clear';
			$i = 0;
		}

		echo '<div class="item col ' . $item_class . '">';
		echo '<a href="' . $link['url'] . '">' . $link['name'] . '</a>';
		echo '</div>';

		$i++;
	}
?>
		<div class="clearfix"></div>
		</div>
		<p class="text-center"><a href="?action=info">phpinfo</a></p>
	</div>
</body>
</html>
