<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/12/2020
 * Time: 12:11 PM
 */

class PostController
{
    public function getPost() {
        include_once "mvc/models/PostModel.php";

        $postModel = new PostModel();
        $posts= $postModel->getPost();

include_once "mvc/view/PostVie.php";
    $postView = new PostView();
    $postView->showAllPost();

    }
}