<?php


class Product
{
    public $id;
    public $name;
    public $category_id;
    public $brand_id;
    public $short_description;
    public $quantity;
    public $price;
    public $point_of_restock;
    public $image;
    public $active;



   public function __construct($id, $name, $category_id, $brand_id,  $quantity, $price, $point_of_restock, $active, $short_description = null, $image = null,)
    {
        $this->id                   = $id;
        $this->name                 = $name;
        $this->category_id          = $category_id;
        $this->brand_id             = $brand_id;
        $this->short_description    = $short_description;
        $this->quantity             = $quantity;
        $this->price                = $price;
        $this->point_of_restock     = $point_of_restock;
        $this->image                = $image;
        $this->active               = $active;
   }

   public function create()
{
    global $db;

    $sql = "INSERT INTO products(
                name,
                category_id,
                brand_id,
                short_description,
                quantity,
                price,
                point_of_restock,
                image,
                active
            ) VALUES (
                '$this->name',
                $this->category_id,
                $this->brand_id,
                '$this->short_description',
                $this->quantity,
                $this->price,
                $this->point_of_restock,
                '$this->image',
                $this->active
            )";

    $db->query($sql);

    if ($db->error) {
        echo $db->error;
    } else {
        return $db->insert_id; // return new product id
    }
}

public function update()
{
    global $db;
    $sql = "UPDATE products SET 
                name = '$this->name',
                category_id = $this->category_id,
                brand_id = $this->brand_id,
                short_description = '$this->short_description',
                quantity = $this->quantity,
                price = $this->price,
                point_of_restock = $this->point_of_restock,
                image = '$this->image',
                active = $this->active
            WHERE id = $this->id";

    $db->query($sql);

    if ($db->error) {
        return $db->error;
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
    static public function readALL()
    {
        global $db;
        $sql = "SELECT p.id,p.name,p.price,p.quantity,b.name as brand,c.name as category,
        p.active,p.image 
        FROM products p,brands b, categories c 
        WHERE p.brand_id = b.id AND p.category_id = c.id 
        ORDER BY id DESC";
        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    static public function readById($_id) {
        global $db;
        $sql = "SELECT id,name,email, role_id FROM users WHERE id = $_id";
        $result = $db->query($sql);
        return $result->fetch_assoc();
    }

    static public function delete($_id)
    {
        global $db;
        $db->query("DELETE FROM users WHERE id = $_id");

        if ($db->error) {
            return $db->error;
        } else {
            return true;
        }
    }
}
