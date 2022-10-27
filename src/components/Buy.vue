<template> <br><br><br><br>
    <form method="POST"
        action="" class='form' v-if="showBuy" >

        <div class="form__close">
           <a href="/dashboard">
               back
               <i class="fas fa-times"></i>
           </a> <br>
        </div>
        <h1 class="form__title">
           Buy {{ item_id}}
        </h1>

        <div class="details">
<!--
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
                    </label>-->
        </div>

        <p>
          Buying Rate: <br>
          <ul v-for="detail in infoss" :key="detail.id">
              <li >{{ detail.id }}  </li>
          </ul>
        </p>

        <label for="">
           Amount you need: <br>
            <input type="number" v-model="amount"
              @click="getNeed(amount, bRate)"
             class="blue">
            <div class="currency">
              $
            </div>

            <img src="../../public/img/visa.png" alt="" class="flag">
        </label>

        <label for="">
            Amount you pay <br>
            <input type="number" v-model="need" class="blue"
            @click="getAmount(need, bRate)"
            placeholder=""
            >
            <div class="currency">
              ₵
            </div>
            <img src="../../public/img/visa.png" alt="" class="flag">
        </label>

        <label for="">
          Your bitcoin adress: <br>
          <input type="number"  class="blue"
            placeholder=""
            >
        </label>

            <div class="link" @click="displayPayment()">
                Proceed
            </div>

   </form>

   <form  v-if="showPayment" class="form">

        <div class="form__close">
            back
               <i class="fas fa-times" @click="displayBuy()"></i>
           |
           <a href="/dashboard">
              Close
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
              MTN
            </p>
          </div>

          <div class="form__items__item">
            <img src="../../public/img/paypal-rond.png" alt="">
            <p>PAYPAL</p>
          </div>

          <div class="form__items__item">
            <img src="../../public/img/btc.png" alt="">
            <p>BTC</p>
          </div>
        </div>




        <label for="">
            <button type="submit"  class="link">
                Next
            </button>
        </label>

   </form>
</template>


<script>
   export default {
       name: 'Buy',
     data(){
       return{
           infoss:[],
           amount: '',
           showPayment: false,
           showBuy: true,
           bRate: 10,
           idd: '',
           asset: '',
           need: '',
           errormsg:'',
           item_id: 1
       }
     },
     mounted: function(){
         this.getItem_id();
     },
     methods:{
      getItem_id(){
        axios.get('https://127.0.0.1/rapidnote/api/rateById/2').then(
                    response =>
                    this.infoss = response.data);
                  /*  .catch(error => {
                      this.errormsg = 'Une erreur est survenue'
                    })*/ ;
                 //   console.log(item_id);

      },
        displayPayment(){
            this.showBuy = false;
            this.showPayment = true;
        },
        getNeed(amount, bRate) {
                this.need = amount * bRate;
            },
        getAmount(need, bRate) {
                this.amount = need / bRate;
            }
        }

     }
   </script>

   <!-- Add "scoped" attribute to limit CSS to this component only -->
   <style scoped>

   </style>