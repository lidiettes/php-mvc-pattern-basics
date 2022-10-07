<?php
class travelersController{

    public function index(){
        require_once "models/travelersModel.php";
        $travelers = new travelers_model();
        $data["titulo"]= "Travelers";
        $data["travelers"]= $travelers -> get_travelers();

        require_once "views/travelers.php";
    }

    public function nuevo(){
        $data["titulo"]= "Travelers";
        require_once "views/newTraveler.php";

    }






}

?>