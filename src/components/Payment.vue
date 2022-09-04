<template>
    <div class="form">
        <div class="form__close">
          <i class="fas fa-times"></i>
        </div>

        <div class="form__items">
          <div class="form__items__item">
            <img src="../../public/img/img-mtn.png" alt="">
            <p>
              MTN MOBILE MONEY
            </p>
          </div>

          <div class="form__items__item">
            <img src="../../public/img/paypal-rond.png" alt="">
            <p>Paypal</p>
          </div>

          <div class="form__items__item">
            <img src="../../public/img/btc.png" alt="">
            <p>BTC</p>
          </div>
        </div>

        <div class="form__text">
            <p>
              Make a deposit on this number<i class="far fa-calendar"></i>
            </p>
        </div>
    </div>
  </template>

  <script>
  export default {
    name: 'Payment',
    props: {
      msg: String
    }
  }
  </script>

  <!-- Add "scoped" attribute to limit CSS to this component only -->
  <style scoped>

  </style>
