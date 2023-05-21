<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

<div class="col-md-6">
<?= form_open('user/save'); ?>
<h1><?= $data['title'] ?></h1>
<?php 
	$data = [
	    'name'      => 'name',
	    'id'        => 'name',
	    'value'     => '',
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
	    'value'     => 'ajaysisaudiya@gmail.com',
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
	    'value'     => '9897346613',	
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
