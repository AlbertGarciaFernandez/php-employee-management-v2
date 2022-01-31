<?php
class dashboard extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    
    public function render(){
        $this->view->render("dashboard/dashboard");
    }

    

    public function getEmployees(){
        $resultArray = $this->model->getEmployees();
        echo json_encode($resultArray);
    }

}
