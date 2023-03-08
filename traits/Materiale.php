<?php

trait Materiale{
    public $type;
    

    public function getMaterialType(){
        return "$this->type";
    }

}

?>