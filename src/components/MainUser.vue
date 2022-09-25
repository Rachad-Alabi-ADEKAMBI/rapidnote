<template>
    <div class="content">
        <div class="content__boxes" >


                <div class="box" v-for="rate in rates" :key="rate.id" v-if="showInfos">
                               <div class="devise"> <img :src="getImgUrl(rate.image)" >
                                {{ rate.name }}

                               </div>
                                <div class="note">
                                  <h3>
                                    Selling
                                  </h3>

                                  <div class="important">
                                    <img src="../../public/images/ghana-flag.png" alt="trade bitcoin in ghana"> {{ rate.selling_price }} gh | <img src="../../public/images/usd.png" alt=""> {{ rate.selling_price * 10}} Usd  <strong> <i class="fas fa-shopping-cart" @click="buyItem(rate.id)"></i></strong>
                                  </div>

                                  <h3>
                                    Buying
                                  </h3>

                                  <div class="important">
                                    <img src="../../public/images/ghana-flag.png" alt="trade bitcoin in ghana">  {{ rate.buying_price }} gh | <img src="../../public/images/usd.png" alt=""> {{ rate.buying_price * 10}} Usd <strong><i class="fas fa-store"></i></strong>
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
        name: 'MainUser',
      data(){
        return{
            details:[],
            rates: [],
            items: [],
            showItems: false,
            showInfos: true,
            infos: []
        }
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
      buyItem(){
       // console.log(detail_id);
        axios.get('http://127.0.0.1/rapidnote/api/rateById/1').then(
                    response =>
                    this.items = response.data);
        this.showItems = true;
        this.showInfos = false;
      }
    }

    }
    </script>

    <!-- Add "scoped" attribute to limit CSS to this component only -->
    <style scoped>

    </style>