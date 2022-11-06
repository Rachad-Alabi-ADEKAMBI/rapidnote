<template>
    <div class="content">
                        <h2 class="content__title">
                            Users
                        </h2>

                       <div class="content__table"  v-if="showAllUsers">
                            <table class="table">
                                <thead>
                                    <td>
                                        Name
                                    </td>

                                    <td>
                                        Id
                                    </td>

                                    <td>
                                        Email
                                    </td>

                                    <td>
                                        Balance
                                    </td>
                                </thead>

                                <tr v-for="user in userss" :key="user.id" >
                                    <td data-label="Name">
                                        {{ user.first_name }} {{ user.last_name}}
                                    </td>

                                    <td data-label="Id">
                                        {{ user.id}}
                                    </td>


                                    <td data-label="Email">
                                            {{ user.email}}
                                    </td>

                                    <td data-label="">
                                        {{ user.balance }} gh
                                    </td>

                                    <td>
                                        <button @click="getUserById(user.id)" class="btn">
                                            More
                                        </button>
                                    </td>
                                </tr>
                            </table>
                       </div>

                       <div class="content__table"  v-if="showUser">
                            <div class="" v-for="detail in infos" :key="detail.id">
                                <h2 class="content__title">
                                Fiche client de {{ detail.name }}
                            </h2>

                            <ul>
                                <li>
                                    Date of registration: <span>{{ detail.date_of_insertion }}</span>
                                </li>

                                <li>
                                    Email: <span>{{ detail.email }}</span>
                                </li>

                                <li>
                                    Phone Number <span> {{detail.phone_code }}  {{ detail.phone_number }}</span>
                                </li>

                                <li>
                                    Balance <span> {{ detail.balance }}</span>
                                </li>

                                <li>
                                    <div class="options">
                                        <button @click="getHistorical()">Historical</button>
                                        <button @click="displayContact()">Contact</button>
                                        <button @click="displaySuspend()">Suspend</button>
                                    </div>
                                </li>
                            </ul>
                            </div>
                        </div>

                        <div class="content__table"  v-if="showHistorical">
                            <h2>
                                Historical of user
                            </h2>
                            <table class="table">
                                <thead>
                                    <td>
                                        Date of insertion
                                    </td>

                                    <td>
                                        Seller
                                    </td>

                                    <td>
                                        Amount
                                    </td>

                                    <td>
                                        Buyer
                                    </td>

                                    <td>
                                        Status
                                    </td>
                                </thead>

                                <tr v-for="detail in detailss" :key="detail.id" >
                                    <td data-label="Date">
                                        {{ detail.date_of_insertion }}
                                    </td>

                                    <td data-label="Seller">
                                            {{ detail.seller}}
                                    </td>

                                    <td data-label="Amount">
                                        {{ detail.amount }}
                                    </td>

                                    <td data-label="Buyer">
                                        {{ detail.buyer }}
                                    </td>

                                    <td data-label="Status">
                                        {{ detail.status }}
                                    </td>
                                </tr>
                            </table>
                       </div>
    </div>
</template>


<script>
    export default {
        name: 'Users',
      data(){
        return{
            userss:[],
            details: [],
            details: [],
            infos: [],
            showAllUsers: true,
            showUser: false,
            showContact: false,
            showSuspend: false,
            showHistorical: false
        }
      },
      mounted: function(){
          this.getAllUsers();
      },
      methods:{
        getAllUsers() {
                axios.get('https://127.0.0.1/rapidnote/api/users').then(
                    response =>
                    this.userss = response.data);
                    this.showAllUsers = true;
                    this.showUser = false;
                    this.showHistorical = false;
                    this.showContact = false;
                    this.showSuspend = false;

            },
        getUserById(user_id) {
                  axios.get('https://127.0.0.1/rapidnote/api/userById/' + user_id).then(
                    response =>
                    this.infos= response.data);
                    this.showUser = true;
                    this.showAllUsers = false
                    this.showHistorical = false;
                    this.showContact = false;
                    this.showSuspend = false;
            },
        getHistorical(user_id){
                axios.get('https://127.0.0.1/rapidnote/api/historicalOfUser/' + user_id ).then(
                    response =>
                    this.detailss= response.data);
                    this.showUser = false;
                    this.showAllUsers = false
                    this.showHistorical = true;
                    this.showContact = false;
                    this.showSuspend = false;
        },
        displayContact(){
              /*  axios.get('http:/127.0.0.1/rapidnote/api/userById').then(
                    response =>
                    this.details= response.data)*/
                    this.showUser = true;
                    this.showAllUsers = false;
                    this.showHistorical = false;
                    this.showContact = true;
                    this.showSuspend = false;
        },
        displaySuspend(){
              /*  axios.get('http:/127.0.0.1/rapidnote/api/userById').then(
                    response =>
                    this.details= response.data)*/
                    this.showUser = true;
                    this.showAllUsers = false;
                    this.showHistorical = false;
                    this.showContact = false;
                    this.showSuspend = true;
        },
        format(num){
                let res = new Intl.NumberFormat('fr-FR', { maximumSignificantDigits: 2 }).format(num);
                return res;
        },
        convert(date){
                        function addDaysToDate(date, days){
                                var res = new Date(date);
                                res.setDate(res.getDate() + days);
                                return res;
                            }
                             date_formated = addDaysToDate(date, 0);
                             return date_formated.toLocaleDateString('fr');
            }
      }
    }
    </script>

    <!-- Add "scoped" attribute to limit CSS to this component only -->
    <style scoped>

    </style>