<template>
    <div class="dashboard">
      <div class="menu">
        <li>
                                  <button @click="displayDashboard()">
                                   Dashboard
                                  </button>
                            </li>
            <li>
                                  <button @click="displayPendingValidations()">
                                    Pending validations
                                  </button>
                            </li>

                            <li>
                                  <button @click="displayUsers()">
                                    Users
                                  </button>
                            </li>

                            <li>
                              <button @click="displayPayments()">
                                  Payments
                                </button>
                            </li>

                            <li>
                              <button @click="displayTransactions()">
                                    Transactions
                                  </button>
                            </li>

                            <li>
                              <button>
                                    <a href="">
                                      Webmail
                                    </a>
                                  </button>
                            </li>


                        </div>

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
                                        user name
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-sign-out-alt"></i>
                                        logout
                                    </div>
                                </div>
                          </div>
          <MainAdmin v-if="showMainAdmin"></MainAdmin>
          <GraphsAdmin v-if="showGraphsAdmin"></GraphsAdmin>
          <PendingValidations v-if="showPendingValidations"></PendingValidations>
          <Transactions v-if="showTransactions"></Transactions>
          <Users v-if="showUsers"></Users>
          <Payments v-if="showPayments"></Payments>
          </div>
        </div>
  </template>

  <script>
  // @ is an alias to /src
  import MainAdmin from '@/components/MainAdmin.vue'
 // import UserOptions from '@/components/UserOptions';
  import Users from '@/components/Users.vue'
  import PendingValidations from '@/components/PendingValidations'
import GraphsAdmin from '../components/GraphsAdmin.vue'
import Transactions from '@/components/Transactions.vue'
import Payments from '@/components/Payments.vue'

  export default {
    name: 'DashboardView',
    components: {
    MainAdmin,
    //    UserOptions,
    PendingValidations,
    Transactions,
    Users,
    GraphsAdmin,
    Transactions,
    Payments,
    Payments
},
  data(){
    return{
        message: '',
        details: [],
        showUsers: false,
        showMainAdmin: true,
        showGraphsAdmin: true,
        showPendingValidations: false,
        showTransactions: false,
        showPayments: false
    }
  },
    methods:{
        displayUsers(){
            this.showUsers = true;
            this.showMainAdmin = false;
            this.showGraphsAdmin = false;
            this.showPendingValidations= false;
            this.showPayments = false;
            this.showTransactions= false;
        },
        displayGraphsAdmin(){
          this.showGraphsAdmin = true;
          this.showUsers = false;
          this.showMainAdmin = false;
          this.showPendingValidations= false;
          this.showPayments = false;
          this.showTransactions= false;
        },
        displayDashboard(){
          this.showGraphsAdmin = true;
          this.showUsers = false;
          this.showMainAdmin = true;
          this.showTransactions= false;
          this.showPendingValidations= false;
          this.showPayments = false;
        },
        displayPendingValidations(){
          this.showGraphsAdmin = false;
          this.showUsers = false;
          this.showMainAdmin = false;
          this.showPendingValidations= true;
          this.showTransactions= false;
          this.showPayments = false
        },
        displayTransactions(){
          this.showGraphsAdmin = false;
          this.showUsers = false;
          this.showMainAdmin = false;
          this.showPendingValidations= false;
          this.showTransactions= true;
          this.showPayments = false
        },
        displayPayments(){
          this.showGraphsAdmin = false;
          this.showUsers = false;
          this.showMainAdmin = false;
          this.showPendingValidations= false;
          this.showTransactions= false
          this.showPayments = true;
        }
    }
  }

  </script>
