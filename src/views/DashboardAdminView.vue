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
          <Users v-if="showUsers"></Users>
          </div>
        </div>
  </template>

  <script>
  // @ is an alias to /src
  import MainAdmin from '@/components/MainAdmin.vue'
 // import UserOptions from '@/components/UserOptions';
  import Users from '@/components/Users.vue'
import GraphsAdmin from '../components/GraphsAdmin.vue'

  export default {
    name: 'DashboardView',
    components: {
    MainAdmin,
    //    UserOptions,
    Users,
    GraphsAdmin
},
  data(){
    return{
        message: '',
        details: [],
        showUsers: false,
        showMainAdmin: true,
        showGraphsAdmin: false
    }
  },
    methods:{
        displayUsers(){
            this.showUsers = true;
            this.showMainAdmin = false;
            this.showGraphsAdmin = false;
        },
        displayGraphsAdmin(){
          this.showGraphsAdmin = true;
          this.showUsers = false;
          this.showMainAdmin = false;
        },
        displayDashboard(){
          this.showGraphsAdmin = true;
          this.showUsers = false;
          this.showMainAdmin = true;
        }
    }
  }

  </script>
