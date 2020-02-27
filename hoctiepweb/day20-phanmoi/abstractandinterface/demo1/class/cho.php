<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/23/2020
 * Time: 9:51 AM
 */
include_once "../abstract/dongvat.php";
include_once "../interface/an.php";
include_once "../interface/keu.php";
include_once "../interface/sinhsan.php";

class Cho extends Dongvat implements Keu, An, Sinhsan {
/*
 * khi class thông thường kế thừa class trừu tượng(là thằng abstract)
 * thì class con phải tiến hành thực thi code cho tất cả các method trừu tượng của thằng class cha
 */

public function em_oi_em_muon_di_an_gi_day()
{
    // TODO: Implement em_oi_em_muon_di_an_gi_day() method.
    echo "pi thích ăn bánh gạo cực kỳ";
}
public function tenloai() {
    echo "pi đẹp trai";
    // TODO: Implement tenloai() method.
}
public function thongtin()
{
    // TODO: Implement thongtin() method.
    echo "pi là 1 con lợn đẹp trai";
}public function keu_di_con_lon()
{
    // TODO: Implement keu_di_con_lon() method.
    echo "pi kêu gâu gâu";
}public function de_di()
{
    // TODO: Implement de_di() method.
    echo "rất tiếc pi là công công nên không biết đẻ";
}}