<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Toto Players</title>
	<base href="<?php echo base_url()?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="<?php echo base_url()?>assets/favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
</head>

<body>
	<app-root>
		<div class="text-center">
			<h1 class="display-5">Loading...</h1>
		</div>
	</app-root>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/runtime.js" defer></script>
	<script src="<?php echo base_url()?>assets/polyfills.js" defer></script>
	<script src="<?php echo base_url()?>assets/styles.js" defer></script>
	<script src="<?php echo base_url()?>assets/vendor.js" defer></script>
	<script src="<?php echo base_url()?>assets/main.js" defer></script>
</body>

</html>