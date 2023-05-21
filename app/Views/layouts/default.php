<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Layout</title>      
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href='<?php echo base_url(); ?>/favicon.ico'>
    <link href="<?php echo base_url(); ?>css/dist/bootstrap.min.css" rel="stylesheet">    
    <link href="<?php echo base_url(); ?>css/dist/my.css" rel="stylesheet">   
    <script src="<?php echo base_url(); ?>js/jquery.min.js" type="text/javascript"></script> 

</head>
<body>           

   <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>users/index">Users Listing</a>
            </li>           

            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>admins">Admin Module</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>users">User Module</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="<?= base_url(); ?>cart">Cart(0)</a>
            </li>

          </ul>
        </div>
      </div>
     </nav>
    </div>



	<div class="container">
	 <?= $this->renderSection('content') ?>

	</div>
</body>
</html>