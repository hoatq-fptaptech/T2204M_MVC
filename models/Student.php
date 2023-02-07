<?php
include_once("database.php");
include_once("IModel.php");
class Student implements IModel
{
    protected $table = "students";
    protected $primarykey = "id";
    public $id;
    public $name;
    public $email;
    public $mark;
    public $gender;

    public function __construct(){

    }
    function get()
    {
        $sql = "select * from $this->table";
        $rs = get($sql);
        $data = [];
        foreach ($rs as $item){
            $sv = new Student();
            $sv->id = $item["id"];
            $sv->name = $item["name"];
            $sv->email = $item["email"];
            $sv->mark = $item["mark"];
            $sv->gender = $item["gender"];
            $data[] = $sv;
        }
        return $data;
    }

    function create()
    {
        $sql = "insert into $this->table(name,email,mark,gender)
                values('$this->name','$this->email',$this->mark,'$this->gender')";
        return update($sql);
    }

    function update()
    {
        // TODO: Implement update() method.
        $sql = "update $this->table set name = '$this->name', email = '$this->email',
                 mark=$this->mark, gender='$this->gender' where $this->primarykey = $this->id";
        return update($sql);
    }

    function delete()
    {
        $sql = "delete from $this->table where $this->primarykey = $this->id";
        return update($sql);
    }

    function find($id)
    {
        $sql = "select * from $this->table where $this->primarykey = $id";
        $rs = get($sql);
        foreach ($rs as $item){
            $sv = new Student();
            $sv->id = $item["id"];
            $sv->name = $item["name"];
            $sv->email = $item["email"];
            $sv->mark = $item["mark"];
            $sv->gender = $item["gender"];
            return $sv;
        }
        return null;
    }
}
