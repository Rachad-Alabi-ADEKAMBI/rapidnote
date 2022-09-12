<template>
    <div class="content">
                        <h2 class="content__title">
                            Summary
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
        name: 'DashboardAdmin',
      data(){
        return{
            details:[]
        }
      },
      mounted: function(){
          //this.getCurrentMarketcap();
         // this.getDetails();
      },
      methods:{
        getCurrentMarketcap() {
                axios.get('https://fineblock.eu/api/tfbk').then(
                    response =>
                    this.tfbk_marketcap = response.data), 1000
            }
      }
    }
    </script>

    <!-- Add "scoped" attribute to limit CSS to this component only -->
    <style scoped>

    </style>