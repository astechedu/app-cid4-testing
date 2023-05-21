<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap5.min.css" rel="stylesheet">    
    <link href="<?php echo base_url(); ?>/assets/css/my.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>/assets/js/my.js" type="text/javascript"></script>
</head>
<body>
	<div class="container">
	 <?= $this->renderSection('content') ?>
	</div>
</body>
</html>