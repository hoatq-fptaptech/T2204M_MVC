<?php
include_once("models/Student.php");
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
        $st = new Student();
        $data = $st->get();
        include("views/liststudent.php");
    }

    public function create(){
        include("views/createstudent.php");
    }

    public function save(){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $mark = $_POST["mark"];
        $gender = $_POST["gender"];
        $sv = new Student();
        $sv->name = $name;
        $sv->email = $email;
        $sv->mark = $mark;
        $sv->gender = $gender;
        $rs = $sv->create();
        if($rs){
            header("Location: ?module=student");
            return;
        }
        header("Location: ?module=student&action=create");
    }
}
