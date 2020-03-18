<?php
//đầu tiên phải nạp tất cả các file chứa class
//dùng include các thứ các thứ ấy
//để tao nhắc cho m nhớ là include + "file cha/file con";


include_once "Excel/export.php";
include_once "Excel/import.php";
include_once "Traits/momo.php";
include_once "Traits/napas.php";
include_once "Utilities/Payment/payment.php";
include_once "Utilities/Paypal/paypal.php";
include_once "Utilities/Pdf/pdf.php";

/*
 * tiến hành khởi tạo các đối tượng từ các class
 * và gọi method demo() trong các class này
 *
 * bước 2:
 * vào thằng payment và nạp các trait momo và napas
 * và gọi đến 2 method demoMomo và demoNapas từ thằng đối tượng payment
 */
//bước tiếp theo là import 5 namespace, không tính thằng traits

//dùng thằng use để import 5 namespace use + tên class

use \Excel\ExportExcel;
use \Excel\ImportExcel;
use \Utilities\Payment\Payment;
use \Utilities\Paypal\Paypal;
use \Utilities\Pdf\Pdf;

//bước 3: khởi tạo đối tượng

$exportExcel = new ExportExcel();
$importExcel = new ImportExcel();
$payment = new Payment();
$paypal = new Paypal();
$pdf = new Pdf();

//bước 4: gọi phương thức demo()
//đối tượng ->demo
$exportExcel->demo();
$importExcel->demo();
$payment->demo();
$paypal->demo();
$pdf->demo();

//ở trong thằng payment có cả momo và napas thì phải gọi cả method trong traits

$payment->demoMomo();
$payment->demoNapas();



