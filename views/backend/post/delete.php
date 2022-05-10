<?php

use App\Models\Post;

$post = new Post(); // Tạo đối tượng

$id = $_REQUEST["id"];
$row = $post->post_row($id);
$target_dir = "../public/images/posts/";
$pathdel = $target_dir . $row['img']; //
if (file_exists($pathdel)) {
    unlink($pathdel);
}
$post->post_delete($id);
header("location: index.php?option=post&cat=trash");
