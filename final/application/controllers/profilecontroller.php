<?php

class ProfileController extends Controller{


    public $userObject;

    public function index(){

    }

    public function edit($uID){
        $this->userObject = new User();
        $member = $this->userObject->getUser($uID);
        $this->set('first_name', $member['first_name']);
        $this->set('last_name', $member['last_name']);
        $this->set('email', $member['email']);

    }

    public function submit(){
        $this->userObject = new User();


        if($_POST['password'] == null){
            $data = array('email'=>$_POST['email'],'first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name']);
            $result = $this->userObject->editUser($data);
        }
        else{
            $rawPassword = $_POST['password'];
            $hashedPassword = password_hash($rawPassword, PASSWORD_DEFAULT);
            $data = array('email'=>$_POST['email'],'password'=>$hashedPassword, 'first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name']);
            $result = $this->userObject->editUserNewPass($data);
        }

        header('Location: ' . BASE_URL . 'members');
    }




}