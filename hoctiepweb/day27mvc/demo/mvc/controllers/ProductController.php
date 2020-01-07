<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/5/2020
 * Time: 7:15 PM
 */

namespace MVC\Controllers;
class ProductController
{
    public function indexAction() {
        // __METHOD__ in ra tên class và tên method đang được gọi đến
        echo "<br>" . __METHOD__;
        include_once "mvc/views/product/index.php";

    }
    public function createAction() {
// __METHOD__ in ra tên class và tên method đang được gọi đến
        echo "<br>" . __METHOD__;
        include_once "mvc/views/product/create.php";

    }
    public function editAction() {
// __METHOD__ in ra tên class và tên method đang được gọi đến
        echo "<br>" . __METHOD__;
        include_once "mvc/views/product/edit.php";

    }
    public function deleteAction() {
// __METHOD__ in ra tên class và tên method đang được gọi đến
        echo "<br>" . __METHOD__;
        include_once "mvc/views/product/delete.php";

    }
}
