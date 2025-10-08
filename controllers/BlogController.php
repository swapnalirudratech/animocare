<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/LoginController.php";

class BlogController extends LoginController
{
    private $db;
    public function __construct($db = null)
    {
        $this->db = $db;
        parent::__construct($this->db);
    }

    public function blogList()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "Blog List";
        $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            // $blogs = $this->getData('blogs');
            $blogs = $this->getData2("SELECT * FROM blogs ORDER BY blog_date DESC");

            require 'views/admin/blogs/blog-list.php';
        }
    }

    public function AddBlog()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "Add Blog";
        $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $editData = [];

            require 'views/admin/blogs/add-blog.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // printWithPre($_POST);
            // printWithPre($_FILES);
            // die();

            if (isset($_FILES["blog_image"]) && $_FILES["blog_image"]["error"] == UPLOAD_ERR_OK) {
                $_POST['blog_img'] = uploadImage($_FILES["blog_image"], "public/uploads/blog_img/");
            }

            if ($this->add($_POST, "blogs")) {
                $_SESSION['success'] = "Blog Added Successfully";
            } else {
                $_SESSION['err'] = "Something went wrong";
            }

            redirect('/blog/add-blog');
        }
    }

    public function EditBlog($id)
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "Edit Blog";
        $this->checkSession();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            // printWithPre($country);
            // printWithPre($position);
            // printWithPre($department);
            // die();

            $editData = $this->getData2("SELECT * FROM blogs where id='$id'")[0];

            // printWithPre($editData);
            // die();

            if (empty($editData)) {
                redirect('views/admin/blogs/blog-list.php');
            }

            require 'views/admin/blogs/add-blog.php';
            
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // printWithPre($_POST);
            // printWithPre($_FILES);
            // die();

            try {
                if (isset($_FILES["blog_image"]) && $_FILES["blog_image"]["error"] == UPLOAD_ERR_OK) {
                    $_POST['blog_img'] = uploadImage($_FILES["blog_image"], "public/uploads/blog_img/");
                } else {
                    unset($_POST['blog_img']);
                }

                $this->update($_POST, $id, "blogs");
                // if () {
                //     $_SESSION['success'] = "Blog Added Successfully";
                // } else {
                //     $_SESSION['err'] = "Something went wrong";
                // }

                redirect('/blog/add-blog');

            } catch (Exception $e) {
                $_SESSION['err'] = $e->getMessage();
                echo $e->getMessage();
            }

            redirect('/blog/blog-list');
        }
    }

    function formatTime1($time)
    {
        return ($time && strlen($time) === 5) ? $time . ":00" : $time;
    }

    public function deleteBlog($id = null)
    {
        if ($this->delete($id, 'blogs')) {
            $_SESSION['success'] = "Blog Deleted Successfully";
        } else {
            $_SESSION['err'] = "Something went wrong";
        }

        redirect('/blog/blog-list');
    }
}


?>