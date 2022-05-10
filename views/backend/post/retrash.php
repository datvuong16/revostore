<?php

use App\Models\Post;

$post = new Post(); // Tạo đối tượng

$id = $_REQUEST["id"];
$row = $post->post_row($id);
$data = array(
    'updated_at' => date('Y-m-d H:i:s'),
    'updated_by' => $_SESSION['userid'],
    'status' => 2
);
$post->post_update($data, $id);
header("location: index.php?option=post&cat=trash");
