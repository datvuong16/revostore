<?php

use App\Models\Slider;

$slider = new Slider(); // Tạo đối tượng

$id = $_REQUEST["id"];
$row = $slider->slider_row($id);
$status_new = ($row['status'] == 1) ? 2 : 1;
$data = array(
    'updated_at' => date('Y-m-d H:i:s'),
    'updated_by' => $_SESSION['userid'],
    'status' => $status_new
);
$slider->slider_update($data, $id);
header("location: index.php?option=slider");
