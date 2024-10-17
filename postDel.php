<?php
include('./class/postClass.php');
$post = new PostClass();

// Get the post
if (!isset($_GET["post_id"]) || $_GET["post_id"] == null) {
    return;
} else {
    $post_id = $_GET["post_id"];
}

// Delete the post
$delete_post = $post->deletePost($post_id);
header('Location:postShow.php');
exit();
?>