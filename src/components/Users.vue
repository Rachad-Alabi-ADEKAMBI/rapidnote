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
                                    Email
                                </td>

                                <td>
                                    Balance
                                </td>
                            </thead>

                            <tr v-for="detail in details" :key="detail.id" >
                                <td data-label="Name">
                                    {{ detail.first_name }} {{ detail.last_name}}
                                </td>

                                <td data-label="Email">
                                        {{ detail.email}}
                                </td>

                                <td data-label="">
                                    {{ detail.balance }} gh
                                </td>

                                <td>
                                    <button @click="getUserById()" class="btn">
                                        More
                                    </button>
                                </td>
                            </tr>
                        </table>
                       </div>

                       <div class="content__table"  v-if="showUser">
                            <h2 class="sontent__title">
                                Fiche de xoygfuv
                            </h2>

                            <ul>
                                <li>
                                    Date of registration: <span>21222</span>
                                </li>

                                <li>
                                    Email: <span>john!@lgyiy</span>
                                </li>

                                <li>
                                    Phone Number <span>6666666</span>
                                </li>

                                <li>
                                    Balance <span> 10</span>
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
</template>


<script>
    export default {
        name: 'Users',
      data(){
        return{
            users:[],
            details: [],
            showAllUsers: true,
            showUser: false,
            showContact: false,
            showSuspend: false,
            showHistorical: false
        }
      },
      mounted: function(){
        //  this.getUsers();
      },
      methods:{
        getUsers() {
                axios.get('http:/127.0.0.1/rapidnote/api/users').then(
                    response =>
                    this.users= response.data);
                    this.showAllUsers = true;
                    this.showUser = false;
                    this.showHistorical = false;
                    this.showContact = false;
                    this.showSuspend = false;
            },
        getUserById() {
              /*  axios.get('http:/127.0.0.1/rapidnote/api/userById').then(
                    response =>
                    this.details= response.data)*/
                    this.showUser = true;
                    this.showAllUsers = false
                    this.showHistorical = false;
                    this.showContact = false;
                    this.showSuspend = false;
            },
        getHistorical(){
              /*  axios.get('http:/127.0.0.1/rapidnote/api/userById').then(
                    response =>
                    this.details= response.data)*/
                    this.showUser = true;
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
      }
    }
    </script>

    <!-- Add "scoped" attribute to limit CSS to this component only -->
    <style scoped>

    </style>