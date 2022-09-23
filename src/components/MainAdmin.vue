<template>
    <div class="content">

                        <div class="content__boxes" v-if="showInfos">

                            <div class="box">

                               <div class="devise">
                                Total transactions:

                               </div>
                                <p>
                                   <strong>
                                   {{nbr }} ghc
                                   </strong>

                                </p>

                            </div>

                            <div class="box" v-for="detail in details" :key="detail.id">
                               <div class="devise"> <img :src="getImgUrl(detail.image)" >
                                {{ detail.name }}  <div class="pen" @click="displayEditRate(detail.id)"><i class="fas fa-pen"></i></div>

                               </div>
                                <div class="note">

                                     <span> Selling: <div class="important">{{ detail.selling_price }} ghc</div></span>
                                     <span> Buying: <div class="important">{{ detail.buying_price }} ghc</div></span>
                                </div>
                            </div>


                        </div>

                        <div class="content__boxes" v-if="showEditRate">
                                    <div class="form box-form" v-for="info in infos" :key="info.id">
                                        <div class="devise">
                                            Edit {{ info.name }}:   <div class="small"> </div>

                                        </div>
                                       <form action="../../api/api.php?action=editRate" method="POST">
                                            <div class="form__close">
                                                <i class="fa-regular fa-circle-xmark"></i>
                                            </div>

                                            <input type="number" value="detail.id" class="hidden" name="id">

                                            <label for="">
                                                Buy: <br>
                                                <input type="number" placeholder="detail.buying_price"
                                                name="selling_price">
                                            </label>

                                            <label for="">
                                               Sell: <br>
                                                <input type="text" placeholder="11" name="selling_price">
                                            </label> <br>

                                            <button type="submit" class="link">
                                                Change
                                            </button>
                                       </form>
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
            showInfos: true,
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
                    this.details = response.data

            ),
            this.showEditRate = false;
            this.showInfos = true;
        },

      displayEditRate(){
       axios.get('http://127.0.0.1/rapidnote/api/rateById/1').then(
                    response =>
                    this.infos = response.data);
    this.showEditRate =true;
  //  this.showInfos = false;
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