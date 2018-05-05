<?php 
include('views/elements/header.php');
?>

<div class="container">
    <div class="page-header">
        <h1>Register</h1>
    

        <a id="message" href="../login">Registered Succesfully. Click here to log in</a>

        <?php include('views/elements/registration_form.php');
        echo '<p><a href="'.BASE_URL.'">Back to home page</a></p>';
        ?>

        
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

<?php 
include('views/elements/footer.php');
?>

