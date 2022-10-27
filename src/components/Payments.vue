<template>
    <div class="content">
                        <h2 class="content__title">
                            Payments
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

                            <tr v-for="payment in payments"  :key="payment.id">
                                <td data-label="Reference">
                                       {{ payment.id }}
                                </td>

                                <td data-label='Date'>
                                    {{ payment.date_of_insertion }}
                                </td>

                                <td data-label="Comment">
                                    {{ payment.comment }}
                                </td>

                                <td data-label="Amount">
                                    {{ payment.amount }}
                                </td>
                            </tr>
                        </table>
                       </div>
                    </div>
</template>


<script>
    export default {
        name: 'Payments',
      data(){
        return{
            payments:[]
        }
      },
      mounted: function(){
          this.getPayments();
      },
      methods:{
        getPayments() {
                axios.get('https://127.0.0.1/rapidnote/api/payments').then(
                    response =>
                    this.payments = response.data)
            }
      }
    }
    </script>

    <!-- Add "scoped" attribute to limit CSS to this component only -->
    <style scoped>

    </style>