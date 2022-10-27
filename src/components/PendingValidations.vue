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
                                    Amount
                                </td>
                            </thead>

                            <tr v-for="detail in transactions" :key='detail.id'>
                                <td data-label="Reference">
                                        {{ detail.id}}
                                </td>

                                <td data-label='Date'>
                                    {{ detail.date_of_insertion }}
                                </td>

                                <td data-label="Operation">
                                    {{ detail.comment}}
                                </td>

                                <td data-label="Amount">
                                    {{ detail.amount }}
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
            transactions:[]
        }
      },
      mounted: function(){
          this.getPendingTransactions();
      },
      methods:{
        getPendingTransactions() {
                axios.get('https://127.0.0.1/rapidnote/api/pendingTransactions').then(
                    response =>
                    this.transactions = response.data)
            }
      }
    }
    </script>

    <!-- Add "scoped" attribute to limit CSS to this component only -->
    <style scoped>

    </style>