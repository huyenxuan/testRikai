<?php
include('./class/postClass.php');

$post = new PostClass();

// Get the post
$post_id = $_GET['post_id'];
$get_post = $post->get_post($post_id);
if ($get_post) {
    $result = $get_post->fetch_assoc();
} else {
    echo 'Không tồn tại post này';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết bài viết</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        div p {
            align-content: end;
        }
    </style>
</head>

<body class="p-2">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="postAdd.php">Thêm bài viết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="postShow.php">Danh sách bài viết</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <h1>Chi tiết bài viết</h1>
    <div class="d-flex align-content-end">
        <h2 class="me-5"><?php echo $result['title'] ?></h2>
        <p class="">Ngày đăng: <?php echo $result['pushlished_at'] ?> </p>
    </div>
    <p>Nội dung</p>
    <div><?php echo $result['content'] ?></div>
</body>

</html>