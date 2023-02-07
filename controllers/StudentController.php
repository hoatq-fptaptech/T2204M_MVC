<?php

class StudentController
{
    public function action(){
        $act = isset($_GET["action"])?$_GET["action"]:"";
        switch ($act){
            case "": return $this->get();
            case "create": return $this->create();
            case "save": return $this->save();
            default: die("404");
        }
    }

    public function get(){
        echo "list student";
    }

    public function create(){

    }

    public function save(){

    }
}
