<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title; ?></title>
		
		<link rel="stylesheet" href="<?php echo base_url("public/css/bootstrap.min.css");?>">
		<link rel="stylesheet" href="<?php echo base_url("public/css/jquery.bxslider.min.css");?>">
		<link rel="stylesheet" href="<?php echo base_url("public/css/hover.css");?>">
		<link rel="stylesheet" href="<?php echo base_url("public/css/style.css");?>">

		<script src="<?php echo base_url("public/js/jquery.js");?>" ></script>
		<script src="<?php echo base_url("public/js/bootstrap.min.js");?>" ></script>

	</head>
	<body>

		<?php $this->load->view($inner_view); ?>

		<script src="<?php echo base_url("public/js/jquery.bxslider.min.js");?>" ></script>
		<script src="<?php echo base_url("public/js/jquery-hover-effect.js");?>" ></script>
		<script src="<?php echo base_url("public/js/custom.js");?>" ></script>
	</body>
</html>