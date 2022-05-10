<?php

use App\Models\Product;

$product = new Product(); // Tạo đối tượng

$id = $_REQUEST["id"];
$row = $product->product_row($id);
$target_dir = "../public/images/products/";
$pathdel = $target_dir . $row['img']; //
if (file_exists($pathdel)) {
    unlink($pathdel);
}
$product->product_delete($id);
header("location: index.php?option=product&cat=trash");
