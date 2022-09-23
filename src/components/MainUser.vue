<template>
    <div class="content">
        <div class="content__boxes" v-if="showInfos">
                <div class="box" v-for="detail in details" :key="detail.id">
                                <div class="note">
                                    Date: <span> 15/11/2022</span>
                                </div>
                               Wallet:

                                <p>
                                   <strong>
                                     {{ detail.balance }}
                                   </strong>

                                </p>

                </div>

                <div class="box" v-for="detail in rates" :key="detail.id">
                               <div class="devise"> <img :src="getImgUrl(detail.image)" >
                                {{ detail.name }}

                               </div>
                                <div class="note">

                                     <span> Selling: <div class="important">{{ detail.selling_price }} ghc</div></span>
                                     <span> Buying: <div class="important">{{ detail.buying_price }} ghc</div></span>
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
            showInfos: true
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
                    axios.get('http://127.0.0.1/rapidnote/api/userById/1').then(
                    response =>
                    this.details = response.data);
        this.showInfos = true;
      },
      getImgUrl(pic) {
                return "http://127.0.0.1/rapidnote/public/images/" + pic;
            }
    }

    }
    </script>

    <!-- Add "scoped" attribute to limit CSS to this component only -->
    <style scoped>

    </style>