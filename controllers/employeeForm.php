<?php 
class employeeForm extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    public function render(){
        $this->view->render("employeeForm/employeeForm");
    }
    
    public function getEmployeesDashboard(){
        $resultArray = $this->model->getEmployees();
        return $resultArray;
    }

    public function showEmployee(){
        $url = isset($_GET["url"]) ? $_GET["url"]: null;
        $url = rtrim($url, "/");
        $url = explode("/", $url);
    
      if( isset($url[2])){
        $this->view->employee =  $this->model->getEmployee($url[2]);
         $this->view->render("employeeForm/employeeForm");   
        }
    }

    public function addFormEmployee(){
        $name = $_POST["name"];
        $lasName = $_POST["lastName"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $city = $_POST["city"];
        $sreetAdress = $_POST["streetAddress"];
        $state = $_POST["state"];
        $postalCode = $_POST["postalCode"];
        $phoneNumber = $_POST["phoneNumber"];

      if($this->model->addFormEmployee(["name" => $name, "lasName"=>$lasName, "email"=>$email, "gender"=>$gender, "city"=>$city, "streetAdress"=>$sreetAdress, "state"=>$state, "postalCode"=>$postalCode, "phoneNumber"=>$phoneNumber])){
        $this->view->message = "Added new employee";
        $this->view->render("employeeForm/employeeForm");
      } else {
        $this->view->message = "failed to add new employee";
        $this->view->render("error/error");
      }


    }

    public function updateEmployeeForm(){
        $id = $_POST["id"];
        $name = $_POST["name"];
        $lasName = $_POST["lastName"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $city = $_POST["city"];
        $sreetAdress = $_POST["streetAddress"];
        $state = $_POST["state"];
        $postalCode = $_POST["postalCode"];
        $phoneNumber = $_POST["phoneNumber"];

        if($this->model->updateEmployeeForm(["name" => $name, "lasName"=>$lasName, "email"=>$email, "gender"=>$gender, "city"=>$city, "streetAdress"=>$sreetAdress, "state"=>$state, "postalCode"=>$postalCode, "phoneNumber"=>$phoneNumber, "id"=>$id])){
            $this->view->message = "Employee updated";
            $this->view->render("employeeForm/employeeForm");
          } else {
            $this->view->message = "failed to add new employee";
            $this->view->render("error/error");
          }
    
    }
}
