<?php
include_once "models/employee.php";
class dashboardModel extends Model {
    public function __construct()
    {
        parent::__construct();
    }
    public function getEmployees(){
$items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM employees");
           
                 while($row = $query->fetch(PDO::FETCH_ASSOC)){
                  $item = new employee();
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
                  array_push($items, $item);

                 }
                 return $items;
            }

     catch(PDOException $e){
        return false;
    }
    }
}
