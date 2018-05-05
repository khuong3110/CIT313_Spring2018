<?php include('views/elements/header.php');?>

<div class="container">
    <div class="page-header">
        <h1> Edit Profile </h1>
    </div>

            <form id ="profile" action="<?php echo BASE_URL?>profile/submit" method="post" onsubmit="editor.post()">
                <label>First Name: <?=REQFIELD?></label>
                <input type="text"  name="first_name" value="<?php echo $first_name; ?>" required>
                <br>
                <label>Last Name: <?=REQFIELD?></label>
                <input type="text"  name="last_name" value="<?php echo $last_name; ?>" required>
                <br>
                <label>Email: <?=REQFIELD?></label>
                <input type="email"  name="email" value="<?php echo $email; ?>" required>
                <br>
                <label>Password: <?=REQFIELD?></label>
                <input id="password" type="password" name="password" required>
                <label>Confirm Pasword: <?=REQFIELD?></label>
                <input id="confirm" type="password" name="confirm" required>
                <br>
                <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
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
<?php include('views/elements/footer.php');?>

