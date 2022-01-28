<?php

class loginModel extends Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function userCheck($user){
        
        $query = $this->db->connect()->prepare(
            "SELECT name, pass, email FROM users WHERE name=:user OR email=:email"
        );
        try {
            if ($query->execute(["user"=>$user, "email"=>$user])){
                return $query->fetch();
            } else {
                return false;
            }

    } catch(PDOException $e){
        return false;
    }

    
    }
}