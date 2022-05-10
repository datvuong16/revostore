<?php

use App\Models\Slider;

$slider = new Slider(); // Tạo đối tượng

$id = $_REQUEST["id"];
$row = $slider->slider_row($id);
$data = array(
    'updated_at' => date('Y-m-d H:i:s'),
    'updated_by' => $_SESSION['userid'],
    'status' => 2
);
$slider->slider_update($data, $id);
header("location: index.php?option=slider&cat=trash");
