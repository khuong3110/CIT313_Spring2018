<?php include('elements/header.php');?>

<div class="container">
    <div class="page-header">
        <h1>Register</h1>
        <h2>Register Today!</h2>
    </div>

    <div class="row">
        <div class="span8">
            <a id="message" href="../login">Registered Succesfully. Click here to log in</a>

            <form id ="form" action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
                <label>First Name</label>
                <input type="text" class="span6" name="first_name" placeholder="Khuong" required>
                <br>
                <label>Last Name</label>
                <input type="text" class="span6" name="last_name" placeholder="Khuat" required>
                <br>
                <label>Email</label>
                <input type="email" class="span6" name="email" placeholder="kkhuat@iupui.edu" required>
                <br>
                <label>Password</label>
                <input type="password" class="span6" name="password" required>
                <br>
                <button id="submit" type="submit" class="btn btn-primary" >Sign Up!</button>
            </form>

            <!-- Don't display form on update only for register tasks -->
            <script>
                <?php
                    echo 'console.log("'.$currentAction.'");';
                if ($currentAction == 'newuser'){
                    echo 'document.getElementById("form").style.display ="block";';
                    echo 'document.getElementById("message").style.display = "none";';
                }
                else{
                    echo 'document.getElementById("form").style.display ="none";';
                    echo 'document.getElementById("message").style.display = "block";';
                }
                ?>
            </script>

        </div>
    </div>
</div>
<?php include('elements/footer.php');?>
