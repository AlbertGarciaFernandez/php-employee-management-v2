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
          $hello = "hello";
        $this->view->employee =  $this->model->getEmployee($url[2]);
         $this->view->render("employeeForm/employeeForm");
           
        }
        
       
    }
}
