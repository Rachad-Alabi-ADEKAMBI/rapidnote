<template>
    <div class="content">
                        <h2 class="content__title">
                            Users
                        </h2>

                       <div class="content__table">
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

                            <tr>
                                <td data-label="Name">
                                    John Doe
                                </td>

                                <td data-label="Email">
                                        Johdoe@gmail.com
                                </td>

                                <td data-label="">

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
            users:[]
        }
      },
      mounted: function(){
        //  this.getUsers();
      },
      methods:{
        getUsers() {
                axios.get('http:/127.0.0.1/rapidnote/api/users').then(
                    response =>
                    this.users = response.data)
            }
      }
    }
    </script>

    <!-- Add "scoped" attribute to limit CSS to this component only -->
    <style scoped>

    </style>