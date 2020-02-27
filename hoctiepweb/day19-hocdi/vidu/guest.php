<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/22/2020
 * Time: 4:44 PM
 */

class Guest
{

    public $name;
    public $age;
    public $join;

    /*
     * phương thức đọc bài viết
     */
    public function viewArticle() {
        echo "<br> Xem bài viết";
    }
    // phương thức để lại bình luận
    public function postComment() {
        echo "<br> Bình luận: ";
    }
}