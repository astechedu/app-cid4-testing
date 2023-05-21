<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>


<div class="col-md-6">
    <h1>User Data</h1>
	<div class="card mt-2 p-2">
	  <div>Name: <?php echo $data['users']['name']; ?></div>	
	  <div>Email: <?php echo $data['users']['email']; ?></div>
	  <div>Phone: <?php echo $data['users']['phone']; ?></div>
	</div>

</div>


<?= $this->endSection() ?>
