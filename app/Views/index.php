<?php

//print_r($data['users']);
//$users = isset($data['users'])? $data['users'] :'';
?>

<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>
<div class="row">
	<div class="col-md-8">
    	<h1 class=""><?= $data['title'] ?></h1>
    	<?php echo anchor('user/create','Add', ['class' => 'btn btn-info']); ?>
		     <table class="table table-bordered" id="users-list">
		       <thead>
		          <tr>
		             <th>User Id</th>
		             <th>Name</th>
		             <th>Email</th>
		             <th>Phone</th>
		             <th>Actions</th>
		          </tr>
		       </thead>
		       <tbody>               
		          <?php foreach($data['users'] as $user) : ?>
		          <tr>
		             <td><?php echo $user['id']; ?></td>
		             <td><?php echo $user['name']; ?></td>
		             <td><?php echo $user['email']; ?></td>
		             <td><?php echo $user['phone']; ?></td>
		             <td>		             	
		             	<?php echo anchor('user/view/'.$user['id'], 'View', ['class'=>'btn btn-info']) ?>
                        <?php echo anchor('user/edit/'.$user['id'], 'Edit', 'class="btn btn-success"') ?>
                        <?php echo anchor('user/delete/'.$user['id'], 'Delete', 'class="btn btn-danger"') ?> 
                        <!-- User this button below you want to make a ajax clall to the controllers -->  
                        <!-- <button>ajay</button> -->  
		             </td>	
		          </tr>
		          <?php endforeach; ?>
		       </tbody>
		     </table>

 	</div>
</div>

<?php include 'shopping/partials/footer.php'; ?>
<!-- Ajax Call To the Controlers: User this functionality UnCommentd buttun above -->
<script type="text/javascript">

$(function(){
    $('button').on('click',function(e) {        
        e.preventDefault();
       
        var url= "<?php echo base_url(); ?>CartController/test";

        $.ajax({           
            type: 'post',   
            url: url,                   
            dataType:'json',           
            cache: false,
            success: function(result) {
                alert('ok');
            },
            error: function(result) {
                alert('error');
            }
        });

    }); 

}); 
</script>


<?= $this->endSection() ?>


