<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function getData(Request $request) {
        // print_r($request->all());
        echo json_encode($request->all());
        $orderId = $_POST["orderId"];
        $orderAmount = $_POST["orderAmount"];
        $referenceId = $_POST["referenceId"];
        $txStatus = $_POST["txStatus"];
        $paymentMode = $_POST["paymentMode"];
        $txMsg = $_POST["txMsg"];
        $txTime = $_POST["txTime"];
        $signature = $_POST["signature"];
        $data = $orderId.$orderAmount.$referenceId.$txStatus.$paymentMode.$txMsg.$txTime;
        $secretkey = "451504fd0fe1ea63db6d3516c2f6237424b1ee92";
        $hash_hmac = hash_hmac('sha256', $data, $secretkey, true) ;
        $computedSignature = base64_encode($hash_hmac);
        // transction details to db
        $dat= array('orderId'=>$orderId,'orderAmount'=>$orderAmount,'referenceId'=>$referenceId,'txStatus'=>$txStatus,'paymentMode'=>$paymentMode,'txTime'=>$txTime);
        DB::table('transction_details')->insert($dat);
        // customer details to db
        // $name = $request->input('customerName'); $_POST["customerName"];
        // $email = $request->input('customerEmail ');$_POST["customerEmail"];
        // $phone = $request->input('customerPhone');
        // $customerName =  $_POST["customerName"];
        // $customerEmail = $_POST["customerEmail"];
        // $customerPhone = $_POST["customerPhone"];
        // $da= array('id'=>$orderId,'name'=>$customerName,'email'=>$customerEmail,'phone'=>$customerPhone);
        // DB::table('customer_details')->insert($da);

        if ($signature == $computedSignature) {
           // Proceed
           echo "<h3>Your Payment Successful<h3>";
         } else {
          // Reject this call
          echo "<h3>Payment Failed<h3>";
        }
    }

    // function customerDetails(Request $req)
    // {
    //     $id = $req->input('orderId');
    //     $orderAmount = $req->input('orderAmount');
    //     $name = $req->input('customerName');
    //     $email = $req->input('customerEmail ');
    //     $phone = $req->input('customerPhone');
    //     $data= array('id'=>$orderId,'orderAmount'=>$orderAmount,'customerName'=>$name,'customerEmail'=>$email,'customerPhone'=>$phone);
    //     DB::table('customer_details')->insert($data);
    // }
}
