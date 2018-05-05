<form id ="form" action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
   <fieldset>
        <legend>Register Today!</legend>
        <label for="first_name">First Name: <?=REQFIELD?></label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" placeholder="Khuong">
        <br>
        <label for="last_name">Last Name: <?=REQFIELD?></label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name;?>" placeholder="Khuat">
        <br>
        <label for="email">Email: <?=REQFIELD?></label>
        <input type="email" id="email" name="email" value="<?php echo $email;?>" placeholder="kkhuat@iupui.edu">
        <br>
        <label for="password">Password: <?=REQFIELD?></label>
        <input id="password" type="password" name="password" value="<?php echo $password;?>" placeholder="********"> 
        <br>
        <label for="confirm">Confirm Pasword: <?=REQFIELD?></label>
        <input id="confirm" type="password" name="confirm" value="<?php echo $password;?>" placeholder="********">
        <br>
        <button id="submit" type="submit" class="btn btn-primary" >Sign Up</button>
    </fieldset>
</form>