<?php

class LoginController extends Controller{


    protected $userObject;
    public $login_success;


    public function do_login(){
        $this->userObject = new User();

        $check = $this->userObject->checkUser($_POST["email"], $_POST["password"]);


        if($check){
            $user = $this->userObject->getUserFromEmail($_POST["email"]);
            $_SESSION["uID"] = $user["uID"];

            header("Location: ". BASE_URL);
        }
        else{
            $this->set("login_error","Invalid email or password");
        }


    }
    public function logout(){
        unset($_SESSION["uID"]);

    }



}
