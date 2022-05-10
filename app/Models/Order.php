<?php

namespace App\Models;

use App\Library\Database;

class Order extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('order'); //vnmd_order
    }
    //Lấy danh sách order
    public function order_list()
    {
        $sql = "SELECT * FROM $this->table";
        return $this->QueryAll($sql);
    }
}
