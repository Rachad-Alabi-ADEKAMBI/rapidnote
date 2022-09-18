<template>
    <div class="content">
                        <h2 class="content__title">
                            Pending Validations
                        </h2>

                       <div class="content__table">
                        <table class="table">
                            <thead>
                                <td>
                                   Reference
                                </td>

                                <td>
                                    Date
                                </td>

                                <td>
                                    Operation
                                </td>

                                <td>
                                    Seller
                                </td>

                                <td>
                                    Amount
                                </td>
                            </thead>

                            <tr>
                                <td data-label="Reference">
                                        547856
                                </td>

                                <td data-label='Date'>
                                    21/08/2022
                                </td>

                                <td data-label="Operation">
                                    Operation
                                </td>

                                <td data-label="Name">
                                    John Doe
                                </td>

                                <td data-label="Amount">
                                    100
                                </td>
                            </tr>
                        </table>
                       </div>
                    </div>
</template>


<script>
    export default {
        name: 'PendingValidations',
      data(){
        return{
            details:[]
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