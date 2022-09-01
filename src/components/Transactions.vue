<template>
    <div class="dashboard">
                    <div class="menu">
                        <ul class="menu__items">

                                <li>
                                    <div class="link">
                                        <a href="/dashboard">
                                            Dashboard
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="link">
                                        <a href="/history">
                                            Historical
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="link">
                                        <a href="/transactions">
                                            Transactions
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="link">
                                            <a href="/help">
                                                Help
                                            </a>
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

                        <div class="content">
                            <h1>
                                Orders
                            </h1>

                            <table class="table">
                                table
                            </table>
                        </div>
                    </div>
    </div>
</template>

<script>
export default {
  name: 'Transactions',
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