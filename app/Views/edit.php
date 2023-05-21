<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

<?php 

	$name = $data['users']['name']; 
	$email = $data['users']['email']; 
	$phone = $data['users']['phone']; 
?>


<div class="col-md-6">
<?= form_open("user/update/".$data['users']['id']); ?>
<h1><?= $data['title'] ?></h1>
<?php 
	$data = [
	    'name'      => 'name',
	    'id'        => 'name',
	    'value'     => $name,
	    'placeholder' => 'Name',
	    'style'     => '',
	    'class'     => 'form-control m-2'
	];
echo form_input($data);
?>

<?php 
	$data = [
	    'name'      => 'email',
	    'id'        => 'email',
	    'value'     => $email,
	    'placeholder' => 'Email',
	    'style'     => '',
	    'class'     => 'form-control m-2'
	];
echo form_input($data);
?>

<?php 
	$data = [
	    'name'      => 'phone',
	    'id'        => 'phone',
	    'value'     => $phone,	
	    'placeholder' => 'Phone',  
	    'style'     => '',
	    'class'     => 'form-control m-2'
	];
echo form_input($data);
?>

<?php 
	$data = [
	    'name'      => 'submit',
	    'id'        => 'submit',
	    'value'     => 'Submit',
	    'maxlength' => '100',
	    'size'      => '50',
	    'style'     => '',
	    'class'     => 'form-control m-2 btn btn-success'
	];
echo form_submit($data);
?>

<?php echo form_close(); ?>
</div>

<?= $this->endSection() ?>
