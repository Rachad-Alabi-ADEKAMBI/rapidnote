<template>
      <div class="content__graphs">
                            <div class="graph">
                                <div class="grapht__top">
                                     Transactions
                                </div>
                            </div>

                            <div class="graph">
                                <div class="graph__top">
                                    Users
                                </div>
                            </div>
                        </div>
  </template>


  <script>
   export default {
       name: 'GraphsAdmin',
     data(){
       return{

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
        }

     }
   </script>

   <!-- Add "scoped" attribute to limit CSS to this component only -->
   <style scoped>

   </style>