<template>
    <div class="content">

                        <div class="content__boxes" v-if="showInfos">

                            <div class="box">
                                <div class="note">
                                    Date: <span> 15/11/2022</span>
                                </div>
                                Total transactions:

                                <p>
                                   <strong>
                                    5 000 ghc
                                   </strong>

                                </p>

                            </div>



                            <div class="box">
                               <div class="devise">
                                Btc:  <div class="pen" @click="displayEditBtc()">!</div> <div class="small"> 1 600 ghc</div>

                               </div>
                                <div class="note">

                                     <span> Selling: <div class="important">9 i</div></span>
                                     <span> Buying: <div class="important">10 i</div></span>
                                </div>


                            </div>


                            <div class="box">
                                <div class="devise">
                                    PM: <div class="pen" @click="displayEditPM()">!</div> <div class="small">900gh</div>
                                </div>

                                <div class="note">

                                     <span> Selling: <div class="important">9 i</div></span>
                                     <span> Buying: <div class="important">10 i</div></span>
                                </div>                            </div>
                        </div>

                        <div class="content__boxes" v-if="showEditBtc">
                                    <div class="form box-form">
                                    <div class="devise">
                                        Edt Btc:   <div class="small"> 1 600 ghc</div>

                                    </div>
                                       <form action="" method="POST">
                                            <label for="">
                                                Buy: <br>
                                                <input type="text" placeholder="9">
                                            </label>

                                            <label for="">
                                               Sell: <br>
                                                <input type="text" placeholder="11">
                                            </label>

                                            <button @click="displayInfos()">
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
            showInfos: false,
            showEditBtc: true,
            showEditPM: false
        }
      },
      mounted: function(){
          //this.getCurrentMarketcap();
         // this.getDetails();
      },
      methods:{
      /*  getCurrentMarketcap() {
                axios.get('https://fineblock.eu/api/tfbk').then(
                    response =>
                    this.tfbk_marketcap = response.data), 1000
            }*/

      displayEditBtc(){
        this.showEditBtc = true;
        this.showEditPM = false;
        this.showInfos = false;
      },
      displayEditPM(){
        this.showEditPM = true;
        this.showEditBtc = false;
        this.showInfos = false;
      },
      displayInfos(){
        this.showEditPM = false;
        this.showEditBtc = false;
        alert('operation enregistree')
        this.showInfos = true;
      },
    }

    }
    </script>

    <!-- Add "scoped" attribute to limit CSS to this component only -->
    <style scoped>

    </style>