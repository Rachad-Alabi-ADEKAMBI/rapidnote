<template>
    <div class="container">
            <div class="row">
                <div class="col lg-3">
                    <div class="menu">
                        <ul class="menu__items">

                                <li>
                                    <a href="/wallet">
                                        Wallet
                                    </a>
                                </li>

                                <li>
                                    Referals
                                </li>

                                <li>
                                    Transactions
                                </li>

                                <li>
                                    Support
                                </li>
                        </ul>
                    </div>
                </div>

                <div class="col lg-9">
                    <div class="content">
                        <div class="content__infos">
                            <div class="search"></div>
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
                                <div class="box icon">

                                </div>

                                <h3 class="box__title">
                                    Wallet
                                </h3>

                                <span class="box__value">
                                    40 ghc
                                </span>

                                <button>
                                    Load
                                </button>
                            </div>
                            <div class="box">
                                Buy
                            </div>

                            <div class="box">
                                Sell
                            </div>

                            <div class="box">
                                Refer
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

            </div>
    </div>
</template>

<script>
export default {
  name: 'Dashboard',
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