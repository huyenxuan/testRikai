<?php
include('./class/postClass.php');
include('./format/format.php');


$post = new PostClass();
$format = new format();

$show_post = $post->showPost();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bài viết</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style></style>
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
                            <a class="nav-link" aria-current="page" href="postAdd.php">Thêm bài viết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="postShow.php">Danh sách bài viết</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <h1>Danh sách bài viết</h1>
        <table border="1" class="table">
            <thead>
                <tr class="">
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Thời gian đăng</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($show_post) {
                    while ($result = $show_post->fetch_assoc()) {
                        ?>
                        <tr>
                            <td> <?php echo $result['post_id'] ?> </td>
                            <td> <?php echo $result['title'] ?> </td>
                            <td> <a href="post.php?post_id=<?php echo $result['post_id'] ?>">
                                    <?php echo $format->textShorten($result['content'], 100) ?>
                                </a> </td>
                            <td> <?php echo $result['pushlished_at'] ?> </td>
                            <td>
                                <button class="bg-warning border-0">
                                    <a class="text-light" href="postEdit.php?post_id=<?php echo $result['post_id'] ?>">Sửa</a>
                                </button>
                                <span> | </span>
                                <button class="bg-danger border-0">
                                    <a class="text-light" onclick="return confirm('Bạn muốn xóa bài này?')"
                                        href="postDel.php?post_id=<?php echo $result['post_id'] ?>">Xóa</a>
                                </button>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>