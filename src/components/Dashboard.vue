

<template>
    <div class="dashboard">
                    <div class="menu">
                        <li>
                            <div class="link">
                                <a href="/sell">
                                    Sell
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="link">
                                <a href="/buy">
                                    Buy
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="link">
                                <a href="/wallet">
                                    Wallet
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="link">
                                <a href="/transactions">
                                    Transactions                                </a>
                            </div>
                        </li>


                    </div>
                    <div class="content">
                        <div class="content__infos">
                            <div class="icons">
                                <div class="icon">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                search
                                </div>
                                <div class="icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                    user name
                                </div>
                                <div class="icon">
                                    <i class="fas fa-sign-out-alt"></i>
                                    logout
                                </div>
                            </div>
                        </div>

                        <div class="content__boxes">

                            <div class="box">
                                Your balance:

                                <p>
                                   <strong>
                                    300
                                   </strong>
                                   <div class="gh">
                                        gh
                                    </div>
                                </p>

                            </div>

                            <div class="box">
                                <div class="note">
                                    Date: <span> 15/11/2022</span>
                                </div>
                                <div class="note">
                                    Btc: <span> 1 300 gh</span>
                                </div>

                                <div class="note">
                                    Btc: <span> 1 300 gh</span>
                                </div>

                                <div class="note">
                                    Rate today: <span>100 Gh</span>
                                </div>
                            </div>
                        </div>

                        <h2 class="content__title">
                            Summary
                        </h2>

                        <div class="content__graphs">
                            <div class="graph">
                                <div class="grapht__top">
                                    My sales
                                </div>
                            </div>

                            <div class="graph">
                                <div class="graph__top">
                                    My purchases
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
</template>

<script>

import axios from 'axios';

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