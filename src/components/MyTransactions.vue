<template>
    <div class="content">
                        <h2 class="content__title">
                            My Transactions
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
                                    Seller
                                </td>

                                <td>
                                    Amount
                                </td>

                                <td>
                                    Buyer
                                </td>

                                <td>
                                    Amount
                                </td>
                            </thead>

                            <tr v-for="detail in details" :key=detail.id>
                                <td data-label="Reference">
                                        {{ detail.id }}
                                </td>

                                <td data-label='Date'>
                                    {{ detail.date_of_insertion }}
                                </td>

                                <td data-label="Seller_name" >
                                    {{ detail.seller_name }}
                                </td>

                                <td data-label="Operation">
                                    {{ detail.comment }}
                                </td>

                                <td data-label="Buyer_name" >
                                    {{ detail.buyer_name }}
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
        name: 'MyTransactions',
      data(){
        return{
            details:[]
        }
      },
      mounted: function(){
          this.getMyTransactions();
      },
      methods:{
        getMyTransactions() {;
                axios.get('http://127.0.0.1/rapidnote/api/myTransactions/2').then(
                    response =>
                    this.details = response.data);
            }
      }
    }
    </script>

    <!-- Add "scoped" attribute to limit CSS to this component only -->
    <style scoped>

    </style>