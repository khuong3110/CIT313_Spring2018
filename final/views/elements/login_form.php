<form id ="form" action="<?php echo BASE_URL?>login/do_login" method="post" onsubmit="editor.post()">
        <fieldset>
        <legend>Log In</legend>
            <label for="email">Username/E-mail Address: <?=REQFIELD?></label>
            <input type="email" id="email" name="email" value="<?=$_POST['username']?>"  placeholder="kkhuat@iupui.edu">
            <br>
            <label for="password">Password: <?=REQFIELD?></label>
            <input type="password" id="password" name="password"value="<?=$_POST['password']?>" placeholder="********">
            <br>
            <br>
            <button id="submit" type="submit" class="btn btn-primary" >Log In</button>
        </fieldset>
        </form>