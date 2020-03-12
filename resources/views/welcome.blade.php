<div class="container fluid">
  <h1 align="center">Cashfree PG Test Form</h1>
    <form id="redirectForm" method="post" action="wel">
      @csrf
    <div class="form-group">
      <label>Order ID:</label><br>
      <input class="form-control" name="orderId" placeholder="Enter Order ID here (Ex. order00001)"/>
    </div>
    <div class="form-group">
      <label>Order Amount:</label><br>
      <input class="form-control" name="orderAmount" placeholder="Enter Order Amount here (Ex. 100)"/>
    </div>
    <div class="form-group">
      <label>Order Currency:</label><br>
      <input class="form-control" name="orderCurrency" value="INR" placeholder="Enter Currency here (Ex. INR)"/>
    </div>
    <div class="form-group">
      <label>Order Note:</label><br>
      <input class="form-control" name="orderNote" placeholder="Enter Order Note here (Ex. Test order)"/>
    </div>    
    <div class="form-group">
      <label>Name:</label><br>
      <input class="form-control" name="customerName" placeholder="Enter your name here (Ex. John Doe)"/>
    </div>
    <div class="form-group">
      <label>Email:</label><br>
      <input class="form-control" name="customerEmail" placeholder="Enter your email address here (Ex. Johndoe@test.com)"/>
    </div>
    <div class="form-group">
      <label>Phone:</label><br>
      <input class="form-control" name="customerPhone" placeholder="Enter your phone number here (Ex. 9999999999)"/>
    </div>
    <div class="form-group">
      <label>Return URL:</label><br>
      <input class="form-control" name="returnUrl" placeholder="Enter the URL to which customer will be redirected (Ex. www.example.com)"/>
    </div>        
    <div class="form-group">
      <label>Notify URL:</label><br>
      <input class="form-control" name="notifyUrl" placeholder="Enter the URL to get server notificaitons (Ex. www.example.com)"/>
    </div>
      <p>For Testing purpose , payment option is netBanking and bank is sbi</p>
    <br> 
    {{-- gateway  --}}
    
    {{-- <table border = "3" cellpadding = "5" cellspacing = "5">
      <tr>
        <th>Type</th>
        <th>Details</th>
        <th>Submit</th>
      </tr> --}}
      <!-- <tr>
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
      </tr> -->
      {{-- <tr>
        <td>Net Banking</td>
        <td>
          Select Bank: 
          <select id="bank-code" v-model= "payment.nb" value="nb">
            <option value="3333" >TEST Bank</option>
            <option value="3003">Axis Bank</option>
            <option value="3028">IndusInd Bank</option>
            <option value="3057">Vijaya Bank</option>
          </select>
        </td>
        <td> --}}
          <!-- <button onclick="payBank()">Pay with Net Banking</button>    -->
          <!-- <input type="radio" onclick="payBank()" id="netBanking" value="nb" v-model="picked">    -->
        {{-- </td>
      </tr> --}}
      <!-- <tr>
        <td>Wallet</td>
        <td>
          Select Wallet: 
          <select id="wallet-code" v-model="payment.paymentOption ">
            <option value="4001">FreeCharge</option>
            <option value="4002">MobiKwik</option>
            <option value="4003">Ola Money</option>
          </select>
        </td>
        <td>
           <button onclick="payWallet()">Pay with Wallet</button>  -->
          <!-- <input type="radio" onclick="payWallet()" id="wallet" value="wallet" v-model="picked"> 
        </td>
      </tr> --> 
      {{-- <tr>
        <td>UPI</td>
        <td>
          Your UPI VPA: 
          <input type="text" id="upi-vpa" v-model= "payment.upi" value="upi"/>
        </td>
        <td> --}}
          <!-- <button onclick="payUpi()">Pay with UPI</button>      -->
           <!-- <input type="radio" onclick="payUpi()" id="upi" value="upi" v-model="picked">  -->
        </td>
      </tr>
    </table>
    <button type="submit" class="btn btn-primary btn-block" value="Pay">Submit</button>
  </form><br>  
  <br><br> 
  <br>
</div>