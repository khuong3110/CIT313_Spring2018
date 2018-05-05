<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1> Hello From the View </h1>
        <?php if($login_success){?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $login_success?>
            </div>
        <?php }?>
  </div>
</div>
<?php include('elements/footer.php');?>
