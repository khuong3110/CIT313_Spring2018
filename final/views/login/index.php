<?php include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
        <h1>Login</h1>
        <?php if($login_error){?>
            <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $login_error?>
            </div>
        <?php }?>

        <?php include('views/elements/login_form.php');?>

    </div>
</div>
<?php include('views/elements/footer.php');?>

