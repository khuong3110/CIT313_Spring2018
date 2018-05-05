<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> The Login View </h1>
        <form id ="form" action="<?php echo BASE_URL?>login/do_login" method="post" onsubmit="editor.post()">
            <label>E-mail Address: <font color="#FF0000">*</font></label>
            <input type="email" class="span6" name="email" placeholder="kkhuat@iupui.edu" required>
            <br>
            <label>Password: <font color="#FF0000">*</font></label>
            <input type="password" class="span6" name="password" required>
            <br>
            <button id="submit" type="submit" class="btn btn-primary" >Log In</button>
        </form>
  </div>
</div>
<?php include('elements/footer.php');?>
