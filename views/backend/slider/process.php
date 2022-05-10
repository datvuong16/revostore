<?php

use App\Library\Myclass;
use App\Models\Slider;

$slider = new Slider();


if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    //Lấy những thông tin hệ thống
    $data['created_at'] = date('Y-m-d H:i:s');
    $data['created_by'] = $_SESSION['userid']; //Xử lý sau khi đăng nhập
    $slider->slider_insert($data);
    header("location: index.php?option=slider");
}
if (isset($_POST['CAPNHAT'])) {
    $id = $_POST['id'];
    $data = $_POST['data'];
    //Lấy những thông tin hệ thống
    $data['updated_at'] = date('Y-m-d H:i:s');
    $data['updated_by'] = $_SESSION['userid']; //Xử lý sau khi đăng nhập
    $slider->slider_update($data, $id);
    header("location: index.php?option=slider");
}
