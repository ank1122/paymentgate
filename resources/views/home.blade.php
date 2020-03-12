@extends('layouts.app')

@section('content')
<div class="container">
    
     
{{-- Laravel testing --}}



{{-- 

        {{-- Payment gateway Form 
        <form id="redirectForm" method="" action="">
          <input type="text" name="appId" value=  2673ace10a6cf7b2cb1187913762 />
          <input type="text" name="orderId" value= 530 />
          <input type="text" name="orderAmount" value=5000 />
          {{-- <input type="hidden" name="orderCurrency" value=  />
          <input type="hidden" name="orderNote" value= $orderNote /> 
          <input type="text" name="customerName" value= mayank />
          <input type="text" name="customerEmail" value="ankverma1122@gmail.com"/>
          <input type="text" name="customerPhone" value= 09955716368/>
          <input type="text" name="returnUrl" value= http://127.0.0.1:8000/abc  />
          {{-- <input type="hidden" name="notifyUrl" value= $notifyUrl /> -
          <input type="text" name="signature" value= $signature/> --}}
            
             {{-- <input name="paymentOption" value="card"/>
             <input name="card_number" value="4444333322221111"/>
             <input name="card_holder" value="John Doe"/>
             <input name="card_expiryMonth" value="09"/>
             <input name="card_expiryYear" value="2020"/>
             <input name="card_cvv" value="123"/>
            
            
               <input name="paymentOption" value="nb"/>
               <input name="paymentCode" value="3333"/>
               
        </form> --}}
        {{-- <script type="text/javascript">
          document.getElementById("redirectForm").submit();
        </script>
       <h1>Payment Form</h1> --}}

 {{-- <div class="form-group">
        <label>OrderId</label>
        <input class="form-control" type="text" name="phone" v-model= "user.phone">
        </div>
        <div class="form-group">
        <label>Amount</label>
        <input class="form-control" type="text" name="amount" v-model= "user.amount">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button> --}}
        <hr>
    {{-- <table border = "3" cellpadding = "5" cellspacing = "5">
      <tr>
        <th>Type</th>
        <th>Details</th>
        <th>Submit</th>
      </tr>
      <tr>
        <td>Cards</td>
        <td>
          <form>
            <p>Card Number: <input type="text" id="card-num" value ="4111111111111111"/>
            CVV:<input type="text" id="card-cvv" value="123"/></p>
            <p>MM:<input type="text" id="card-mm" value="09"/>
            YYYY:<input type="text" id="card-yyyy" value="2018"/></p>
            Name:<input type="text" id="card-name" value="test"/>
          </form>
        </td>
        <td>
          <button onclick="payCard()">Pay with Card</button>      
        </td>
      </tr>
      <tr>
        <td>Net Banking</td>
        <td>
          Select Bank: 
          <select id="bank-code">
            <option value="3333">TEST Bank</option>
            <option value="3003">Axis Bank</option>
            <option value="3028">IndusInd Bank</option>
            <option value="3057">Vijaya Bank</option>
          </select>
        </td>
        <td>
          <button onclick="payBank()">Pay with Net Banking</button>      
        </td>
      </tr> --}}
      {{-- <tr>
        <td>Wallet</td>
        <td>
          Select Wallet: 
          <select id="wallet-code">
            <option value="4001">FreeCharge</option>
            <option value="4002">MobiKwik</option>
            <option value="4003">Ola Money</option>
          </select>
        </td>
        <td>
          <button onclick="payWallet()">Pay with Wallet</button>      
        </td>
      </tr>
      <tr>
        <td>UPI</td>
        <td>
          Your UPI VPA: 
          <input type="text" id="upi-vpa"/>
        </td>
        <td>
          <button onclick="payUpi()">Pay with UPI</button>      
        </td>
      </tr> --}}
    {{-- </table>
    
  </form> --}}

</div>
@endsection
