<template> <br><br><br><br>
  <form method="POST"
      action="" class='form' v-if="showSell">

      <div class="form__close">
         <a href="/dashboard">
             back
             <i class="fas fa-times"></i>
         </a> <br>
      </div>
      <h1 class="form__title">
         Sell
      </h1>

      <div class="details">

        <label for="Mr" @click='btc()'>
                      <input type="radio" class='sm' id="genderChoice1" name="gender" value="Mr" required>
                      <img src="../../public/images/btc.png" alt="">
                      <p>BTC</p>
                  </label>

                  <label for="Mr" @click='pf()'>
                      <input type="radio" id="genderChoice1" class="sm" name="gender" value="Mr" required>
                      <p>
                        Perfect Money
                      </p>
                  </label>
      </div>

      <label for="">
        Selling Rate: <br>
        <div class="black">
          1 USD = {{ sRate}} ₵
        </div>
      </label>

      <label for="">
         Amount you sell: <br>
          <input type="number" v-model="amount"
            @click="getNeed(amount, sRate)"
           class="blue">
          <div class="currency">
            $
          </div>

          <img src="../../public/img/visa.png" alt="" class="flag">
      </label>

      <label for="">
          Amount you receive <br>
          <input type="number" v-model="need" class="blue"
          @click="getAmount(need, sRate)"
          placeholder=""
          >
          <div class="currency">
            ₵
          </div>
          <img src="../../public/img/visa.png" alt="" class="flag">
      </label>

          <div class="link" @click="displayPayment()">
             Next
          </div>

 </form>

 <form  v-if="showPayment" class="form">

      <div class="form__close">
         <a href="">
             Previous
             <i class="fas fa-times"></i>
         </a>
         |
         <a href="/dashboard">
             Cancel
             <i class="fas fa-times"></i>
         </a> <br>
      </div>
      <h1 class="form__title">
        Payment Methods
      </h1>

      <div class="form__items">
        <div class="form__items__item">
          <img src="../../public/img/img-mtn.png" alt="">
          <p>
            MTN MOBILE MONEY
          </p>
        </div>

        <div class="form__items__item">
          <img src="../../public/img/paypal-rond.png" alt="">
          <p>VODAFONE CASH</p>
        </div>

        <div class="form__items__item">
          <img src="../../public/img/btc.png" alt="">
          <p>BANK DESPOSIT</p>
        </div>
      </div>


      <label for="">
          <button type="submit"  class="link">
              Next
          </button>
      </label>

 </form>

 <br><br>
</template>


<script>
 export default {
     name: 'Buy',
   data(){
     return{
         details:[],
         amount: '',
         showPayment: false,
         showSell: true,
         sRate: 9,
         asset: '',
         need: ''
     }
   },
   mounted: function(){
     //  this.getMyBalance();
   },
   methods:{
      displayPayment(){
          this.showSell = false;
          this.showPayment = true;
      },
      getNeed(amount, sRate) {
              this.need = amount * sRate;
          },
      getAmount(need, sRate) {
              this.amount = need / sRate;
          }
      }

   }
 </script>

 <!-- Add "scoped" attribute to limit CSS to this component only -->
 <style scoped>

 </style>