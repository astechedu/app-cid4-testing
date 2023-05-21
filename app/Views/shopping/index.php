<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

<?php
if(isset($_POST['submit']))
  //echo $_POST['id'];
?>

<h1><?php echo $data['title']; ?></h1>
<div class="row">	
	 
        <?php foreach($data['products'] as $product) { ?>
        <div class="card col-md-2 m-2 py-2">
        	<!--<button id="buynow" class="btn btn-md btn-primary">Ajay</button>-->
			<div class="card-heading">
				<h6><?php echo $product['name']; ?></h6>				
			</div>
			<div class="card-body">
				<img class="img-fluid max-width:50%" src="<?php echo base_url('images/'.$product['img']); ?>">
				<h6>Code:&nbsp;<span><?php echo $product['id']; ?></span></h6>
				<h6>Price:&nbsp;<strong>₹</strong><div ><?php echo $product['price']; ?></div></h6>
				<p>Desc:&nbsp;<?php echo $product['description']; ?></p>
                <!--<a href="#" class="btn btn-danger">Buy Now</a>-->
                <?= helper('form') ?>
                <?= form_open('product/test', ['method'=>'get']) ?>
                <?= form_hidden(['name'=>'ajay']) ?>
                <?= form_close('<div></div>') ?>

            <form name="cartForm" id="cartForm" action="" method="" onClick="">
                <input type="hidden" name="id" value="<?php echo $product['id']; ?>" id="id">
                <input type="hidden" name="price" value="<?php echo $product['price']; ?>" id="price">
                <input type="hidden" name="quantity" value="<?php echo $product['quantity']; ?>" id="qty">
                
                <!--<input type="submit" name="submit" value="Buy Now" class="btn btn-md btn-primary">-->
                <button id="buynow" class="btn btn-md btn-primary">Buy Now</button>
            </form>
              
			</div>

		</div>
        <?php } ?>
</div>

<?php include 'partials/footer.php'; ?>
<!-- Sent ajax call request to the ProductController/test or any action -->
<script type="text/javascript">

$(function(){

    $('button').on('click',function(e) {   
       
        e.preventDefault();

        //I had an issue that the forms were submitted in geometrical progression after the next submit. 
        // This solved the problem.
       //e.stopImmediatePropagation();

        let id = $('#id').val();
        let price = $('#price').val();
        //let qty = $('#qty').val();
       // var url = "http://localhost/product/test" ;

        //var url= "<?php echo base_url(); ?>OriginalControllerName/OriginalActionName";
        var url= "/ProductController/ajay";

        $.ajax({           
            type: 'post',   
            url: url,         
            data: {'id':id,'price':price},        
            dataType:'json',
            //headers: {'X-Requested-With': 'XMLHttpRequest'},
            
            cache: false,
            success: function(result) {
                alert('ok');
            },
            error: function(result) {
                alert('error');
            }
        });

    }); 
   
    // to prevent refreshing the whole page page
    //return false; 
}); 

</script>

<?= $this->endSection() ?>



