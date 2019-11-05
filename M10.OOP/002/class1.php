<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/23/2019
 * Time: 8:37 PM
 */

class Vuon {
    public $cannang=50;

    public $chieucao=170;

    public $tuoi=103;

    public function adn() {
        echo "<br>" . __METHOD__;
    }
}

class Nguoi{
    public $hochieu;

    public $sdt;

    public $email;

    public function dichoi() {
        echo "<br>" . __METHOD__;
    }

    public function demokethua() {
        echo "<br>" . __METHOD__;
        echo "<br>" .$this->cannang;
        echo "<br>" .$this->chieucao;
        echo "<br>" .$this->tuoi;
    }
}
$anh = new Nguoi();
$anh->demokethua();