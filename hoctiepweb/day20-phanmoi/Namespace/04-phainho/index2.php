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
//nạp namespae phải có \
/*
 * trùng tên class cuối cùng
 * thì phải sử dụng bí danh as khi nạp 2 class thuộc 2 namespace khác nhau
 */
use \App\Controllers\Backend\IndexController as BE_IndexController;
use \App\Controllers\Frontend\IndexController as FE_IndexController;
use \App\Models\Backend\IndexModel;

$indexController1 = new BE_IndexController();
$indexController1->getInfo();

$indexController2 = new FE_IndexController();
$indexController2->getInfo();