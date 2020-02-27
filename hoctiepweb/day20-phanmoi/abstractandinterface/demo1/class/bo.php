<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/25/2020
 * Time: 10:37 PM
 */
include_once "../abstract/dongvat.php";
include_once "../interface/an.php";
include_once "../interface/keu.php";
include_once "../interface/sinhsan.php";
class bo extends Dongvat implements An, Keu, Sinhsan
{

    public function em_oi_em_muon_di_an_gi_day()
    {
        // TODO: Implement em_oi_em_muon_di_an_gi_day() method.
        echo "bò rất thích ăn cỏ";
    }

    public function tenloai()
    {
        // TODO: Implement tenloai() method.
        echo "1 con bò kute";
    }

    public function thongtin()
    {
        // TODO: Implement thongtin() method.
        echo "chưa có người yêu";
    }

    public function keu_di_con_lon()
    {
        // TODO: Implement keu_di_con_lon() method.
        echo "bò kêu ò ò ò";
    }

    public function de_di()
    {
        // TODO: Implement de_di() method.
        echo "chưa có người yêu chưa đẻ";
    }
}