<template> <br><br><br><br>
     <form method="POST"
         action="" class='form'>

         <div class="form__close">
            <a href="/dashboard">
                back
                <i class="fas fa-times"></i>
            </a> <br>
         </div>
         <h1 class="form__title">
            My wallet
         </h1>

         <span>
            300 <div class="gh">
                Gh
            </div>
         </span>

         <div class="items">
                <div class="link" @click="load()">
                    Load
                </div>

                <div class="link" @clik="withdraw()">
                    Withdraw
                </div>
            </div>

    </form>
</template>


<script>
    export default {
        name: 'Wallet',
      data(){
        return{
            details:[],
            balance: 0
        }
      },
      mounted: function(){
          this.getMyBalance();
      },
      methods:{
        getMyBalance() {
                axios.get('http://127.0.0.1/rapidnote/api/myBalance/2').then(
                    response =>
                    this.balance = response.data)
            }
      }
    }
    </script>

    <!-- Add "scoped" attribute to limit CSS to this component only -->
    <style scoped>

    </style>