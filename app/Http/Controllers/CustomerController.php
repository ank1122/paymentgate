<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function CustomerDetails(Request $request){
        // print_r($request->all());
        // return ($request->all());
        //  return view('welcome')
        // echo json_encode($request->all());
        $user = $request->user;
        $orderId = $user["orderId"];
        $orderAmount = $user["orderAmount"];
        $customerName = $user["customerName"];
        $customerPhone = $user["customerPhone"];
        $customerEmail = $user["customerEmail"];
        // $data = file_get_contents($request);
        // $dataItems = json_decode($data);
        // return $dataItems[0]->customerName;
                // $payment = file_get_contents($request->payment);
        $secretKey = "451504fd0fe1ea63db6d3516c2f6237424b1ee92";
        $appId ="2673ace10a6cf7b2cb1187913762";
        $userData = array( 
            "appId" => $appId, 
            "orderId" => $orderId, 
            "orderAmount" => $orderAmount, 
            // "orderCurrency" => '', 
            "orderNote" => '', 
            "customerName" => $customerName, 
            "customerPhone" => $customerPhone, 
            "customerEmail" => $customerEmail,
            "returnUrl" => "http://acfc023a.ngrok.io/abc", 
            // "notifyUrl" => "http://acfc023a.ngrok.io ",
            "paymentOption" => "nb",
            "paymentCode" => "3333"
          );
           // get secret key from your config
           ksort($userData);
           $signatureData = "";
           foreach ($userData as $key => $value){
                $signatureData .= $key.$value;
           }
           $signature = hash_hmac('sha256', $signatureData, $secretKey,true);
           $signature = base64_encode($signature);
        //    return $signature;
        $temp = array(
            "signature" => $signature
        );
        $postData = array_merge($userData,$temp);
        return $postData;
        //    posting data to cashfree
        //    $url= "https://test.cashfree.com/billpay/checkout/post/submit";
        // //    $data = $postData;

        //    $options = array(
        //         'http' => array(
        //             'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        //             'method' => 'POST',
        //             'content' => http_build_query($postData)
        //         )
        //    );

        //    $context = stream_context_create($options);
        //    $result = file_get_contents($url,false,$context);
        //    if($result === False){

        //    }
        //    var_dump($result);
        // echo ($result);
        // return $postData;
    }
       
    }
    
   
