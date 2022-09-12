<template>
    <div class="content">
                        <div class="content__infos">
                            <div class="icons">
                                <div class="icon">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                search
                                </div>
                                <div class="icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                    admin name
                                </div>
                                <div class="icon">
                                    <i class="fas fa-sign-out-alt"></i>
                                    logout
                                </div>
                            </div>
                        </div>

                        <div class="content__boxes">

                            <div class="box">
                                Total transactions:

                                <p>
                                   <strong>
                                    5 000
                                   </strong>
                                   <div class="gh">
                                        gh
                                    </div>
                                </p>

                            </div>

                            <div class="box">
                                <div class="note">
                                    Date: <span> 15/11/2022</span>
                                </div>
                                <div class="note">
                                    Btc: <span> 1 300 gh</span>
                                </div>

                                <div class="note">
                                    Perfect Money: <span> 1 300 gh</span>
                                </div>

                                <div class="note">
                                    Buy rate: <span>100 Gh</span>
                                </div>
                            </div>
                        </div>

                        <h2 class="content__title">
                            Summary
                        </h2>

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
                    </div>
</template>


<script>
    export default {
        name: 'DashboardAdmin',
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