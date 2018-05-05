<?php include('views/elements/header.php'); $this->userObject = new User();?>
<?php $message; ?>
<div class="container">
	<div class="page-header">
   <h1> User Manager </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message;?>
        <?php unset($message); ?>
    </div>
  <?php }?>

    <?php if(isset($_SESSION['msg'])){?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $_SESSION['msg']?>
            <?php unset($_SESSION['msg']); ?>
        </div>
    <?php }?>
  <div class="row">
      <?php
      foreach($users as $row){
          echo "<hr>";
          echo $row['first_name'] . ' ' . $row['last_name'];
          echo "<br>";
          if(!$this->userObject->isActive($row['uID']))
            echo'<a href="'.BASE_URL.'manageusers/approveUser/'.$row['uID'].'" role="button" class="btn btn-primary" >Approve User</a> ';

          if(!$this->userObject->isAdminByuID($row['uID'])){
              echo'<a href="'.BASE_URL.'manageusers/deleteUser/'.$row['uID'].'" role="button" class="btn btn-danger" >Delete User</a> ';
          }
          else{
              echo '<p> User is an admin, delete function not permitted.';
          }
              echo '<br>';

      }
      ?>
    </div>
</div>
<?php include('views/elements/footer.php');?>

