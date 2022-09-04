<template>
     <form method="POST"
         action="" class='form'>
         <div class="form__close">
            <a href="/dashboard">
                <i class="fas fa-times"></i>
            </a>
         </div>
         <p class="form__title">
            My wallet
         </p>

         <div class="form__infos">
            <p class="blue">
                {{ balance }}
            </p>

            <p>
                Your balance
            </p>
         </div>
            <div class="row">
                <div class="col-6 mx">
                    <button
                     class="btn btn-primary
                     btn-block mb-4">
                        <a href="/load">
                            Load
                        </a>
                    </button> <br>

                     <button
                     class="btn btn-primary
                     btn-block mb-4">
                        <a href="/withdraw">
                            Withdraw
                        </a>
                    </button>
                </div>
            </div>

    </form>

    <h2>
        History
    </h2>
<!--
    <table class="table" v-if='0<1'>
                            <thead>
                                <th>
                                    Date
                                </th>

                                <th>
                                    Comment
                                </th>

                                <th>
                                    Value
                                </th>
                            </thead>

                            <tr v-for='user in usersByEmail' :key="user.id">

                                <td data-label="Noms et prénoms">
                                    {{ user.first_name }} {{ user.last_name}}
                                </td>

                                <td data-label="Email">
                                    {{ user.email }}
                                </td>

                                <td>
                                    <button @click='getUserByEmail(user.email)'>
                                        Fiche
                                    </button>
                                </td>
                            </tr>
     </table>
     -->
</template>


<script>
    export default {
        name: 'Wallet',
      data(){
        return{
            details:[],
            balance: 0
        }
      },
      mounted: function(){
          this.getMyBalance();
      },
      methods:{
        getMyBalance() {
                axios.get('http://127.0.0.1/rapidnote/api/myBalance/2').then(
                    response =>
                    this.balance = response.data)
            }
      }
    }
    </script>

    <!-- Add "scoped" attribute to limit CSS to this component only -->
    <style scoped>

    </style>