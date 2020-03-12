<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomecontroller extends Controller
{
    public function index(Request $request)
    {
            // print_r($request->input())
            $mode = "TEST"; //<------------ Change to TEST for test server, PROD for production
            $appId = "2673ace10a6cf7b2cb1187913762";
            extract($_POST);
            
              $secretKey = "451504fd0fe1ea63db6d3516c2f6237424b1ee92";
              $postData = array( 
              "appId" => $appId, 
              "orderId" => $orderId, 
              "orderAmount" => $orderAmount, 
              "orderCurrency" => $orderCurrency, 
              "orderNote" => $orderNote, 
              "customerName" => $customerName, 
              "customerPhone" => $customerPhone, 
              "customerEmail" => $customerEmail,
              "returnUrl" => $returnUrl, 
              "notifyUrl" => $notifyUrl,
              "paymentOption" => "nb",
              "paymentCode" => "3044"
            //   "upiMode"     => "ankverma1122@oksbi"
            );
            ksort($postData);
            $signatureData = "";
            foreach ($postData as $key => $value){
                $signatureData .= $key.$value;
            }
            $signature = hash_hmac('sha256', $signatureData, $secretKey,true);
            $signature = base64_encode($signature);

            // echo "$signature";
            $temp = array(
                "signature" => $signature
            );
            $postData = array_merge($postData,$temp);
            return view('checkout')->withpostData($postData);

    }
}
