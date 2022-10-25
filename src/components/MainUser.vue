<template>
    <div class="content">
        <div class="content__boxes" >
          <div class="box"  v-if="showInfos">
            <i class="fas fa-wallet"></i>
                                Your wallet
                                <div class="note">
                                  <h3>
                                    Your wallett
                                  </h3>

                                  <div class="important">
                                    <img src="../../public/images/ghana-flag.png" alt="trade bitcoin in ghana">
                                  49 gh | <img src="../../public/images/usd.png" alt=""> 4.9 Usd  <strong> <i class="fas fa-plus-circle"></i> <br> <i class="fas fa-exchange-alt"></i></strong>
                                  </div>

                               </div>

                </div>



                <div class="box" v-for="rate in rates" :key="rate.id" v-if="showInfos">
                               <div class="devise"> <img :src="getImgUrl(rate.image)" >
                                {{ rate.name }}

                               </div>
                                <div class="note">
                                  <h3>
                                    Selling
                                  </h3>

                                  <div class="important">
                                    <img src="../../public/images/ghana-flag.png" alt="trade bitcoin in ghana">
                                    {{ rate.selling_price }} gh | <img src="../../public/images/usd.png" alt="">
                                     {{ rate.selling_price * 10}} Usd  <strong> <i class="fas fa-shopping-cart" @click="buyItem(rate.id)"></i></strong>
                                  </div>

                                  <h3>
                                    Buying
                                  </h3>

                                  <div class="important">
                                    <img src="../../public/images/ghana-flag.png"
                                    alt="trade bitcoin in ghana">
                                      {{ rate.buying_price }} gh |
                                      <img src="../../public/images/usd.png"
                                       alt=""> {{ rate.buying_price * 10}} Usd
                                        <strong @click="displayBuy(rate.id)">
                                          BUy<i class="fas fa-store"
                                          ></i></strong>
                                  </div>

                                </div>

                </div>

                <div class="box" v-if="showItems">
                  <div class="" v-for="item in items" :key="item.id">
                    numero  {{ item.id }}
                  </div>
                </div>

        </div>

        <Buy v-bind:item_id="item_id" v-if="showBuy"></Buy>
    </div>
</template>


<script>
    import Buy from '@/components/Buy'

    export default {
        name: 'MainUser',
      data(){
        return{
            details:[],
            rates: [],
            items: [],
            showItems: false,
            showInfos: true,
            infos: [],
            item_id: '',
            showBuy: false
        }
      },
      components: {
        Buy,
      },
      mounted: function(){
          this.displayInfos();
      },
      methods:{
      displayInfos(){
        axios.get('http://127.0.0.1/rapidnote/api/rates').then(
                    response =>
                    this.rates = response.data);
                  /*  axios.get('http://127.0.0.1/rapidnote/api/userById/1').then(
                    response =>
                    this.details = response.data);*/
        this.showInfos = true;
      },
      getImgUrl(pic) {
                return "http://127.0.0.1/rapidnote/public/images/" + pic;
      },
      displayBuy(item_id){
        this.item_id = item_id;
        this.showBuy = true;
        this.showInfos = false;
      }
    }

    }
    </script>

    <!-- Add "scoped" attribute to limit CSS to this component only -->
    <style scoped>

    </style>