<?php
/*
 *file này nằm cùng cấp với thằng app không khai báo namespace
 * nghĩa là file này đang ở trong namespace toàn cục
 *
 *đang ở trong namespace toàn cục thì nạp namespace khác thêm \
 * lý thuyết mục 5
 */

include_once "app/controllers/controller.php";
include_once "app/controllers/backend/index.php";
include_once "app/controllers/backend/post.php";
include_once "app/controllers/frontend/post.php";
include_once "app/controllers/frontend/index.php";
include_once "app/models/backend/index.php";

/*
 * muốn khởi tạo 1 đối tượng từ class
 */
//gọi class thuộc namespace mà không nạp namespace


$indexController1 = new \App\Controllers\Backend\IndexController();
$indexController1->getInfo();

$indexModel = new \App\Models\Backend\IndexModel();
$indexModel->getAll();