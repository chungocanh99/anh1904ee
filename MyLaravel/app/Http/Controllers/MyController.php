<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function xinchao() {
        echo "chào tôi";
    }

    public function meoi($ten) {
        echo "mẹ ơi khó quá" . $ten;
        return redirect()->route('myroute');

    }

    public function GetURL(Request $request) {
       // return $request->path();
       //return $request->url();
        if($request->isMethod('get'))
            echo "phương thức get";
        else
            echo "sai rồi";

    }

    public function postForm(Request $request) {
        //echo "Tên tao là: ";
        //echo $request->HoTen;
       /* if($request->has('tuoi'))
            echo "có thằng tuổi";
        else
            echo "không có";*/
    }
}
