<?php


class user
{
    public $id;
    public $name;
    public $email;
    public $role_id;
    private $password;


    public function __construct($id, $name, $email, $role_id, $password = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->role_id = $role_id;
        $this->password = $password;
    }

    public function create()
    {
        global $db;
        $sql = "INSERT INTO users(name,email,role_id,password)
     VALUES('$this->name','$this->email',$this->role_id,'$this->password')";
       $db->query($sql);
        // if($result){
        //     return $db->insert_id;
        // }else{
        //     return $db->error;
        // }
        if ($db->error) {
            echo $db->error;
        } else {
            return true;
        }
    }
    // public function update() {
    //     global $db;
    //     $sql = "UPDATE users SET name = '$this->name', email = '$this->email', role_id = $this->role_id WHERE id = $this->id";
    //     $result = $db->query($sql);
    //     if ($db->error) {
    //         return $db->error;
    //     } else {
    //         return true;
    //     }
    // }
    // static public function readALL()
    // {
    //     global $db;
    //     $sql = "SELECT id,name,email FROM users ORDER BY id DESC";
    //     $result = $db->query($sql);
    //     return $result->fetch_all(MYSQLI_ASSOC);
    // }
    // static public function readById($_id) {
    //     global $db;
    //     $sql = "SELECT id,name,email, role_id FROM users WHERE id = $_id";
    //     $result = $db->query($sql);
    //     return $result->fetch_assoc();
    // }

    // static public function delete($_id)
    // {
    //     global $db;
    //     $db->query("DELETE FROM users WHERE id = $_id");

    //     if ($db->error) {
    //         return $db->error;
    //     } else {
    //         return true;
    //     }
    // }
}
