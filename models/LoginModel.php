<?php

class loginModel extends Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function userCheck($user){
        
        $query = $this->db->connect()->prepare(
            "SELECT name, pass, email FROM users WHERE name='$user' OR email='$user';"
        );
        try {
       $array = $query->execute();
        return $array;
    } catch(PDOException $e){
        return false;
    }

    
    }
}