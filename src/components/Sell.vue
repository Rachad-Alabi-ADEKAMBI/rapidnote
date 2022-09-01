<template>
    <form method="POST"
        action="" class='form'>
        <div class="form__close">
           <a href="/dashboard">
               *
           </a>
        </div>
        <p class="form__title">
           Sell
        </p>

        <p class="form__infos">
            Daily rate: 10 Ghc
        </p>

        <div class="form-outline mb-4">
                        <input type="number" id="form2Example2" class="form-control" name="pass"
                            required/>
                        <label class="form-label" for="form2Example2">Amount to sell</label>
        </div>

        <div class="form-outline mb-4">
                        <input type="number" id="form2Example2" class="form-control" name="pass"
                            required/>
                        <label class="form-label" for="form2Example2">Amount to receive </label>
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
           details:[]
       }
     },
     mounted: function(){
         //this.getCurrentMarketcap();
        // this.getDetails();
     },
     methods:{
       getCurrentMarketcap() {
               axios.get('https://fineblock.eu/api/tfbk').then(
                   response =>
                   this.tfbk_marketcap = response.data), 1000
           }
     }
   }
   </script>

   <!-- Add "scoped" attribute to limit CSS to this component only -->
   <style scoped>

   </style>