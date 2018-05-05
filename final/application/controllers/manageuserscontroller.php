<?php

class ManageUsersController extends Controller{
	
	public $userObject;

	protected $access = 1;

	public function index(){
        $this->userObject = new User();

        $users = $this->userObject->getAllUsers();


        $this->set('users', $users);
    }

    public function approveUser($uID){
        $this->userObject = new User();

        $message = $this->userObject->activateUser($uID);

        $_SESSION['message'] = $message;

        header('Location: ' . BASE_URL . 'manageusers');

    }

    public function deleteUser($uID){
        $this->userObject = new User();

        $message = $this->userObject->deleteUser($uID);
        $_SESSION['message'] = $message;

        header('Location: ' . BASE_URL . 'manageusers');
    }

}
