<?php
include(__DIR__ . '/../database/database.php');
class PostClass
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    // insert data
    public function insertPost($title, $content)
    {
        $query = "INSERT INTO tbl_post (title, content) VALUES ('$title', '$content')";
        $result = $this->db->insert($query);
        return $result;
    }

    // update data
    public function updatePost($title, $content, $post_id)
    {
        $query = "UPDATE tbl_post SET
                title = '$title',
                content = '$content'
              WHERE post_id = '$post_id'";
        $result = $this->db->update($query);
        return $result;
    }


    // delete data
    public function deletePost($post_id)
    {
        $query = "DELETE FROM tbl_post WHERE post_id = '$post_id'";
        $result = $this->db->delete($query);
        return $result;
    }

    // get data
    public function get_post($post_id)
    {
        $query = "SELECT * FROM tbl_post WHERE post_id = $post_id";
        $result = $this->db->select($query);
        return $result;
    }

    // get all data
    public function showPost()
    {
        $query = "SELECT * FROM tbl_post";
        $result = $this->db->select($query);
        return $result;
    }
}
?>