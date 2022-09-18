<template>
    <div class="menu">
                        <li>
                            <div class="link">
                                <a href="/approvals">
                                    Approvals
                                </a>
                            </div>
                        </li>

                        <li>
                               <button @clik="displayUsers()">
                                Users
                               </button>
                        </li>

                        <li>
                            <button @clik="displayPayments()">
                                Payments
                               </button>
                        </li>

                        <li>
                            <button @clik="displayTransactions()">
                                Transactions
                               </button>
                        </li>


                    </div>
</template>



<script>
   export default {
       name: 'Menu',
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