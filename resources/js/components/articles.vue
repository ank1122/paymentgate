<template>
    <div>
        <form action="welcome.home.php">
            <div>
            <label>UserName</label>
            <input class="form-control" type="text" name="userName" v-model= "user.username">
            </div>
            <div class="form-group">
            <label>Mail</label>
            <input class="form-control" type="text" name="mail" v-model= "user.email">
            </div>
            <div class="form-group">
            <label>Phone</label>
            <input class="form-control" type="text" name="phone" v-model= "user.phone">
            </div>
            <div class="form-group">
            <label>Amount</label>
            <input class="form-control" type="text" name="amount" v-model= "user.amount">
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        
             <!-- Bank Details -->
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

        </form>
    </div>
</template>
<script>
export default {
    data(){
        return{
             user: {
        username: '',
        email: '',
        phone: '',
        amount: '',
      },
        }
    },
    methods:{

    }

}
</script>
<style scoped>

</style>