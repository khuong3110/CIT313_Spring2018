<?php include('views/elements/header.php');?>
<?php $message; ?>
<div class="container">
	<div class="page-header">
   <h1> Post Manager </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message;?>
        <?php unset($message); ?>
    </div>
  <?php }?>
    <?php if(isset($_SESSION['message'])){?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $_SESSION['message']?>
            <?php unset($_SESSION['message']); ?>
        </div>
    <?php }?>
  <div class="row">
      <a href="<?php echo BASE_URL;?>manageposts/add" class="btn btn-primary">Add a New Post</a>
      <a href="<?php echo BASE_URL;?>managecats/" class="btn btn-primary">Manage Categories</a>
      <?php
      foreach($posts as $row){
          $date = new DateTime($row['date']);
          echo "<hr>";
          echo $row['title'];
          echo "<br>";
          echo'<a href="'.BASE_URL.'manageposts/deletePost/'.$row['pID'].'" role="button" class="btn btn-danger" >Delete Post</a> ';
          echo'<a href="'.BASE_URL.'manageposts/edit/'.$row['pID'].'" role="button" class="btn btn-warning" >Edit Post</a> ';
          echo'<a href="'.BASE_URL.'blog/post/'.$row['pID'].'" role="button" target="_blank" class="btn btn-primary" >View Post</a>';
          echo '<br>';

      }
      ?>
    </div>
</div>
<?php include('views/elements/footer.php');?>

