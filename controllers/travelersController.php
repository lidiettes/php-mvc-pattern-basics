<?php
class travelersController{
    public function index(){
        require_once "models/travelersModel.php";
        $travelers = new travelers_model();
        $data["titulo"]= "travelers";
        $data["travelers"]= $travelers -> get_travelers();

        require_once "views/travelers.php";
    }
}

?>