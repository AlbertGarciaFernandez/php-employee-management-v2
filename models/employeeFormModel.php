<?php
include_once "models/employee.php";
class employeeFormModel extends Model{
    function __construct()
    {
        parent::__construct();
    }

    public function getEmployee($id){
        $item = new employee();
        $query = $this->db->connect()->prepare("SELECT*FROM employees WHERE id=:id");
        try {
           $query->execute(["id" =>$id]);
           while ($row = $query->fetch()){
            $item->id = $row["id"];
            $item->name = $row["name"];
            $item->lasName = $row["lasName"];
            $item->email = $row["email"];
            $item->gender = $row["gender"];
            $item->streetAdress = $row["streetAdress"];
            $item->city = $row["city"];
            $item->state = $row["state"];
            $item->postalCode = $row["postalCode"];
            $item->phoneNumber = $row["phoneNumber"];
        }

        return $item;
        } catch (PDOException $e){
return null;
        }
    }
    }
