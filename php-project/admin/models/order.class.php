<?php

class order
{

   public function create($_cart)
{

    global $db;
  $db->query("INSERT INTO orders (customer_id,user_id) VALUES (1,1)");

    $order_id = $db->insert_id;

    foreach($_cart as $item){
        // $db->query("INSERT INTO order_items (order_id,product_id,quantity) VALUES ($order_id,{$item->id},{$item->quantity})");
        print_r($item);
    }
}


}
