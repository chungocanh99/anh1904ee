<?php
/*
 * muốn khởi tạo 1 đối tượng từ class
 * ví dụ như thằng IndexController nằm trong app\controllers\backend\ rồi mới đến nó
 * cách sử dụng đầy đủ namespace khi khởi tạo đối tượng
 */


/*
 * nhớ là trong thằng index chính phải include vào
 * không đc quên: include thì là tên folder, còn namespace thì là tên class
 */

include_once "app/controllers/controller.php";
include_once "app/controllers/backend/index.php";
include_once "app/controllers/backend/post.php";
include_once "app/controllers/frontend/post.php";
include_once "app/controllers/frontend/index.php";
$indexController = new App\Controllers\Backend\IndexController();
$indexController->getInfo();