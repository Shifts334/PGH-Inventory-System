<?php

require 'dbinfo.php';
class InventoryModel extends dbinfo{

    //retrieving info for inventory table (WIP)
    public static function inventory_items(){ 
        $conn = new mysqli(self::$servername, self::$username, self::$password, self::$dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //code here...
        /*
            inventoryItems view is:
            
            SELECT 
            items.itemName, 
            daily_inventory.quantity, 
            daily_inventory.minimumStock

            FROM
            items, daily_inventory

            WHERE
            items.itemID = daily_inventory.itemID
        */
        $query = "SELECT * FROM inventoryItems"; //using a view sql variable, needs to be updated later to separate by date
        $stmt = $conn->query($query);

        if ($stmt === false) {
            die("Error executing query: " . $conn->error);
        }

        $row = $stmt->fetch_assoc();
        $result = $row['count'];

        $stmt->close();
        $conn->close();
        return $result;

        echo '<script>console.log('.json_encode("test").')</script>';
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