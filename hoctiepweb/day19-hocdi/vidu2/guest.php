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
    * những thuộc tính hay phương thức có giới hạn quyền truy cập là private
    * chỉ có thể truy cập trong chính bản thân class này
    */
   private $bank = "0123456";

   //protected chí có thể truy cập trong chính class và các class kế thừa của nó

    protected $tinhtrang = "độc thân";

    //method đọc bài viết
    public function viewArticle() {
        echo "<br> Xem bài viết";
    }

    public function postComment() {
        echo "<br> Bình luận: ";
    }

    public function getBank() {
        echo $this->bank;
    }
}