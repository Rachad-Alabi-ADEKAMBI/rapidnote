<template>
    <form method="POST"
        action="" class='form'>
        <div class="form__close">
           <a href="/dashboard">
            <i class="fas fa-times"></i>
           </a>
        </div>
        <p class="form__title">
           Sell
        </p>

        <p class="form__infos">
            Daily rate: 10 Ghc
        </p>

        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Amount to sell</label>
                        <input type="number" id="form2Example2" class="form-control"
                        v-model="amount"
                            required/>

        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Amount to receive </label>
                        <input type="number" id="form2Example2" class="form-control"
                            v-model='converted' >

        </div>



        <div class="row">
                        <div class="col-6 mx">

                                <button type="submit"
                                class="btn btn-primary
                                btn-block mb-4">Sell</button>
                        </div>
                    </div>
            </form>

            <h2>
                History
            </h2>
    </template>


<script>
   export default {
       name: 'sell',
     data(){
       return{
           details:[],
           amount: 0,
           converted: 0,
           usd: 9.5
       }
     },
     mounted: function(){
         //this.getCurrentMarketcap();
        // this.getDetails();
     },
     methods:{
        convert(){
            this.converted = this.amount * 2;
        }
     }
   }
   </script>

   <!-- Add "scoped" attribute to limit CSS to this component only -->
   <style scoped>

   </style>