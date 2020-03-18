<?php
namespace Utilities\Payment;

//  thằng này dùng namespace từ Traits
 use Traits\Momo;
 use Traits\Napas;
class Payment
{
//nạp trait đa kế thừa
//use + tên class
use Momo,Napas;

public function demo() {
    echo "<br>" . __METHOD__;
}
}