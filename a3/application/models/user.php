<?php
class User extends Model{

    public function getUser($uID){

        $sql =  'SELECT uID, email, first_name, last_name FROM users WHERE uID = ?';

        // perform query
        $results = $this->db->getrow($sql, array($uID));

        $user = $results;
        return $user;
    }

    public function getAllUsers(){
        $sql =  'SELECT uID, email, first_name, last_name FROM users';
        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $users[] = $row;
        }

        return $users;
    }


    public function addUser($data){

        $sql='INSERT INTO users (email,password,first_name,last_name) VALUES (?,?,?,?)';
        $this->db->execute($sql,$data);
        $message = 'Post added.';
        return $message;

    }




}