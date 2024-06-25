<?php

require './models/InventoryModel.php';

class InventoryController{

    public static function display_inventory(){
        return InventoryModel::inventory_items();
    }

}


?>