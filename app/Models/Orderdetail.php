<?php

namespace App\Models;

use App\Library\Database;

class Orderdetail extends Database
{
    private $table = null;
    public function __construct()
    {
        parent::__construct();
        $this->table = $this->TableName('orderdetail'); //vnmd_orderdetail
    }
    //Lấy danh sách orderdetail
    public function orderdetail_list()
    {
        $sql = "SELECT * FROM $this->table";
        return $this->QueryAll($sql);
    }
}
