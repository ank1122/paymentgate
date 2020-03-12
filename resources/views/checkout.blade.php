<?php
$orderAmount =$postData["orderAmount"] ;
$customerName = $postData["customerName"];
$customerPhone = $postData["customerPhone"];
$customerEmail = $postData["customerEmail"];
$appId = $postData["appId"];
$orderId = $postData["orderId"];
$orderCurrency = $postData["orderCurrency"];          
$orderNote = $postData["orderNote"];       
$returnUrl = $postData["returnUrl"];            
$notifyUrl = $postData["notifyUrl"];
$signature = $postData["signature"];    
$paymentOption =$postData["paymentOption"];
$paymentCode = $postData["paymentCode"];
// $upiMode =$postData["upiMode"];       
            
?>
<html>
    <body>
    <form id="redirectForm" method="post" action="https://test.cashfree.com/billpay/checkout/post/submit">
    <input type="hidden" name="appId" value="<?php echo $appId ?>"/>
    <input type="hidden" name="orderId" value="<?php echo $orderId ?>"/>
    <input type="hidden" name="orderAmount" value="<?php echo $orderAmount ?>"/>
    <input type="hidden" name="orderCurrency" value="<?php echo $orderCurrency ?>"/>
    <input type="hidden" name="orderNote" value="<?php echo $orderNote ?>"/>
    <input type="hidden" name="customerName" value="<?php echo $customerName ?>"/>
    <input type="hidden" name="customerEmail" value="<?php echo $customerEmail ?>"/>
    <input type="hidden" name="customerPhone" value="<?php echo $customerPhone ?>"/>
    <input type="hidden" name="paymentCode"  value="<?php echo $paymentCode ?>" />
    <input type="hidden" name="paymentOption" value="<?php echo $paymentOption ?>"  />
    <input type="hidden" name="returnUrl" value="<?php echo $returnUrl ?>"/>
    <input type="hidden" name="notifyUrl" value="<?php echo $notifyUrl ?>"/>
    <input type="hidden" name="signature" value="<?php echo $signature ?>"/>
  </form>
  <script type="text/javascript">
     document.getElementById('redirectForm').submit();
     </script>
    </body>
</html>