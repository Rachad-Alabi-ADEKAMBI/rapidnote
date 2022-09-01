<template>
    <div class="dashboard">
                    <div class="menu">
                        <ul class="menu__items">

                                <li>
                                    <div class="link">
                                        <a href="/wallet">
                                            Wallet
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="link">
                                        Referals
                                    </div>
                                </li>

                                <li>
                                    <div class="link">
                                        Transactions
                                    </div>
                                </li>

                                <li>
                                    <div class="link">
                                        Support
                                    </div>
                                </li>
                        </ul>
                    </div>
                    <div class="content">
                        <div class="content__infos">
                            <div class="icon">
                                search
                            </div>
                            <div class="icon">
                                param
                            </div>
                            <div class="icon">
                            Account
                        </div>

                        <div class="icon">
                            logout
                        </div>


                        </div>

                        <div class="content__boxes">

                            <div class="box">
                                <a href="/sell">
                                    Sell
                                </a>
                            </div>

                            <div class="box">
                                <a href="/buy">
                                    Buy
                                </a>
                            </div>

                            <div class="box">
                                <a href="/refer">
                                    Refer
                                </a>
                            </div>
                        </div>

                        <h2 class="content__title">
                            Summary
                        </h2>

                        <div class="content__graphs">
                            <div class="graph">
                                My sales
                            </div>

                            <div class="graph">
                                My purchases
                            </div>

                            <div class="graph">
                                My refers
                            </div>
                        </div>
                    </div>
    </div>
</template>

<script>
export default {
  name: 'Buy',
  data() {
      return{
          message: 'ok'
      }
      },

      methods: {
           do (){
                alert('yep');
           }
          }
      }



</script>