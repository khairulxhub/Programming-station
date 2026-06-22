<?php


class Brands
{


    // public function create()
    // {
    //     global $db;
    //     $sql = "INSERT INTO users(name,email,role_id,password)
    //  VALUES('$this->name','$this->email',$this->role_id,'$this->password')";
    //     $result = $db->query($sql);
    //     // if($result){
    //     //     return $db->insert_id;
    //     // }else{
    //     //     return $db->error;
    //     // }
    //     if ($db->error) {
    //         echo $db->error;
    //     } else {
    //         return true;
    //     }
    // }
    // public function update() {}
    static public function readALL()
    {
        global $db;
        $sql = "SELECT id, name FROM brands ORDER BY name ASC";
        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }


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
