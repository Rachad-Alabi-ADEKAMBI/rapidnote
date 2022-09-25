<template>
  <div class="dashboard">
    <div class="menu">
      <li>
                                <button @click="displayDashboard()">
                                  <i class="fas fa-columns"></i> Dashboard
                                </button>
                          </li>
      <li>
                                <button @click="displaySell()">
                                  <i class="fas fa-store"></i> Sell
                                </button>
                          </li>
          <li>
                                <button @click="displayBuy()">
                                  <i class="fas fa-shopping-cart"></i> Buy
                                </button>
                          </li>


                          <li>
                            <button @click="displayMyTransactions()">
                              <i class="fas fa-list"></i> My transactions
                              </button>
                          </li>


                          <li>
                              <button @click="displaySettings()">
                                <i class="fas fa-cogs"></i> Settings
                                </button>
                            </li>

                          <li>
                                <button @click="displayWallet()">
                                  Wallet
                                </button>
                          </li>


                      </div>

                      <div class="content">
                        <div class="content__infos">
                              <div class="icons">
                                      <div class="icon">
                                      <i class="fas fa-user"></i>
                                      user name
                                  </div>
                              </div>
                        </div>
        <MainUser v-if="showMainUser"></MainUser>
        <GraphsUser v-if="showGraphsUser"></GraphsUser>
        <Sell v-if="showSell"></Sell>
        <MyTransactions v-if="showMyTransactions"></MyTransactions>
        <Buy v-if="showBuy"></Buy>
        <Wallet v-if="showWallet"></Wallet>
        <Settings v-if="showSettings" ></Settings>
        </div>
      </div>
</template>

<script>
// @ is an alias to /src
import MainUser from '@/components/MainUser.vue'
import Buy from '@/components/Buy.vue'
import Sell from '@/components/Sell'
import GraphsUser from '../components/GraphsUser.vue'
import MyTransactions from '@/components/MyTransactions.vue'
import Wallet from '@/components/Wallet.vue'
import Settings from '@/components/Settings.vue'

export default {
  name: 'DashboardView',
  components: {
    MainUser,
    //    UserOptions,
    Sell,
    Buy,
    GraphsUser,
    MyTransactions,
    Wallet,
    Settings,
},
data(){
  return{
      message: '',
      details: [],
      showBuy: false,
      showMainUser: true,
      showGraphsUser: true,
      showSell: false,
      showMyTransactions: false,
      showWallet: false,
      showSettings: false
  }
},
  methods:{
      displayBuy(){
          this.showBuy = true;
          this.showMainUser = false;
          this.showGraphsUser = false;
          this.showSell= false;
          this.showWallet = false;
          this.showMyTransactions= false;
          this.showSettings = true;
      },
      displayGraphsUser(){
        this.showGraphsUser = true;
        this.showBuy = false;
        this.showMainUser = false;
        this.showSell= false;
        this.showWallet = false;
        this.showMyTransactions= false;
        this.showSettings = true;
      },
      displayDashboard(){
        this.showGraphsUser = true;
        this.showBuy = false;
        this.showMainUser = true;
        this.showMyTransactions= false;
        this.showSell= false;
        this.showWallet = false;
        this.showSettings = true;
      },
      displaySell(){
        this.showGraphsUser = false;
        this.showBuy = false;
        this.showMainUser = false;
        this.showSell= true;
        this.showMyTransactions= false;
        this.showWallet = false
        this.showSettings = true;
      },
      displayMyTransactions(){
        this.showGraphsUser = false;
        this.showBuy = false;
        this.showMainUser = false;
        this.showSell= false;
        this.showMyTransactions= true;
        this.showWallet = false
        this.showSettings = true;
      },
      displayWallet(){
        this.showGraphsUser = false;
        this.showBuy = false;
        this.showMainUser = false;
        this.showSell= false;
        this.showMyTransactions= false
        this.showWallet = true;
        this.showSettings = false;
      },
      displaySettings(){
        this.showGraphsUser = false;
        this.showBuy = false;
        this.showMainUser = false;
        this.showSell= false;
        this.showMyTransactions= false
        this.showWallet = false;
        this.showSettings = true;
      }
  }
}

</script>
