<template>
    <div class="content">

                <div class="content__boxes" v-if="showInfos">
                            <div class="box"  v-if="showInfos">
                                   <i class="fas fa-wallet"></i>
                                Total transactions
                                <div class="note">
                                  <h3>
                                    Balance
                                  </h3>

                                  <div class="important">
                                    <img src="../../public/images/ghana-flag.png" alt="trade bitcoin in ghana">
                                  {{nbr }} gh | <img src="../../public/images/usd.png" alt=""> {{ nbr/10 }} Usd  <strong> <i class="fas fa-plus-circle"></i> <br> <i class="fas fa-exchange-alt"></i></strong>
                                  </div>

                            </div>

                </div>



                <div class="box" v-for="rate in rates" :key="rate.id" v-if="showInfos">
                               <div class="devise"> <img :src="getImgUrl(rate.image)" >
                                {{ rate.name }} <i class="fas fa-pen" @click="displayEditRate(rate.id)" ></i>

                               </div>
                                <div class="note">
                                  <h3>
                                    Selling
                                  </h3>

                                  <div class="important">
                                    <img src="../../public/images/ghana-flag.png"
                                    alt="trade bitcoin in ghana"> {{ rate.selling_price }} gh |
                                    <img src="../../public/images/usd.png" alt=""> {{ rate.selling_price * 10}} Usd

                                  </div>

                                  <h3>
                                    Buying
                                  </h3>

                                  <div class="important">
                                    <img src="../../public/images/ghana-flag.png" alt="trade bitcoin in ghana">
                                     {{ rate.buying_price }} gh | <img src="../../public/images/usd.png" alt="">
                                      {{ rate.buying_price * 10}} Usd
                                  </div>

                                </div>

                </div>

                <div class="box" v-if="showItems">
                  <div class="" v-for="item in items" :key="item.id">
                    numero  {{ item.id }}
                  </div>
                </div>
                </div>


    </div>
</template>


<script>
    export default {
        name: 'MainAdmin',
      data(){
        return{
            details:[],
            infos: [],
            items: [],
            rates: [],
            showInfos: true,
            showItems: false,
            showEditRate: false,
            nbr: ''
        }
      },
      mounted: function(){
          this.getRates();
       //   this.displayEditRate();
      },
      methods:{
        getRates() {
                axios.get('http://127.0.0.1/rapidnote/api/totalTransactionsValue').then(
                    response =>
                    this.nbr = response.data);
             axios.get('http://127.0.0.1/rapidnote/api/rates').then(
                    response =>
                    this.rates = response.data

            );
            this.showEditRate = false;
            this.showInfos = true;
        },

      displayEditRate(){
       axios.get('http://127.0.0.1/rapidnote/api/rateById/1').then(
                    response =>
                    this.infos = response.data);
    this.showEditRate =true;
    this.showInfos = false;
      },
      displayInfos(){
     //   this.showEditRate = false;
        alert('operation enregistree')
        this.showInfos = true;
      },
      getBuyprice(buying_price) {
                return  buying_price;
            },
            getImgUrl(pic) {
                return "http://127.0.0.1/rapidnote/public/images/" + pic;
            }
    },



    }
    </script>

    <!-- Add "scoped" attribute to limit CSS to this component only -->
    <style scoped>

    </style>