<?php

require 'dbinfo.php';
class InventoryModel extends dbinfo{

    //retrieving info for inventory table (WIP)
    public static function inventory_display(){ 
        $conn = new mysqli(self::$servername, self::$username, self::$password, self::$dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //code here...

        $query = "SELECT * "
    } 

    //creating a product (WIP)
    public static function product_create(){ 
        $conn = new mysqli(self::$servername, self::$username, self::$password, self::$dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //code here...
    } 


}

?>