<?php
include('./class/postClass.php');

$post = new PostClass();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $insertPost = $post->insertPost($title, $content);
    header('location: postShow.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bài viết</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        button {
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }

        textarea {
            height: 100px;
        }
    </style>
</head>

<body>
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
                            <a class="nav-link active" aria-current="page" href="postAdd.php">Thêm bài viết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="postShow.php">Danh sách bài viết</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <h1 class="d-flex justify-content-center">Thêm bài viết</h1>
        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50 border p-2">
                <label for="title">Tiêu đề:</label><br>
                <input class="w-100" type="text" id="title" name="title" required><br><br>

                <label for="content">Nội dung:</label><br>
                <textarea class="w-100 p-2" name="content" id=""></textarea><br>

                <button class="bg-success p-2 mt-2 text-light">Thêm mới</button>
            </form>
        </div>
    </main>
</body>

</html>