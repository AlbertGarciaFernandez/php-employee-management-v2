<?php

class dashboardModel extends Model {
    public function __construct()
    {
        parent::__construct();
    }
    public function getEmployees(){
        $query = $this->db->connect()->prepare(
            "SELECT * FROM employees"
        );
        try {
            if ($query->execute()){
                return $query->fetch();
            } else {
                return false;
            }

    } catch(PDOException $e){
        return false;
    }
    }
}
