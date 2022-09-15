<template>
    <div class="content">

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

                      
                    </div>
</template>


<script>
    export default {
        name: 'MainAdmin',
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