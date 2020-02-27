<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/22/2020
 * Time: 4:44 PM
 */

class Mod extends Guest
{

    public $approve_comment;

    public $manager_guest;
    //duyệt comment của người dùng

    public function approveComment() {
        echo "<br> duyệt comment";
    }

    //đồng ý hoặc loại người dùng ra khỏi diễn đàn

    public function manageGuest() {
        echo "<br> quản lý người dùng, đồng ý hoặc ban";
    }

}