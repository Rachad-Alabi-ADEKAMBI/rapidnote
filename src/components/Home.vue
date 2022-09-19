<template>
        <div class="top">

            <div class="top__text">
                <h1 class="top__text__title">
                    RAPID NOTE
                </h1>


                <h2 class="top__text__subtitle">
                   Buy and sell your crypto-currencies Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae veritatis vero at officiis dolor aliquid optio iure cupiditate autem, voluptatum quod dolorum quaerat ducimus consequatur, hic repellat quidem. Nam, eum.
               </h2>

                <ul class="top__text__items">
                    <li>
                        Easy to use
                    </li>

                    <li>
                        Secure
                    </li>

                    <li>
                        Get paid for referals
                    </li>
                </ul>
            </div>

        </div><br>

        <div class="about">
                    <div class="about__item item-left">
                        <h2 class="about__item__title">
                            ABOUT US
                        </h2>

                        <p class="about__item__text">
                             Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas doloribus veniam ut vero, iusto voluptatem, explicabo debitis natus, porro officia totam perferende!
                        </p>

                        <div class="link">
                            <a href="/">
                                More
                            </a>
                        </div>
                    </div>
                        <div class="about__item item-right">
                                <div class="about__item__boxes">
                                    <div class="box green">
                                <p>
                                    Quick services
                                </p>
                            </div>

                            <div class="box orange">
                                <p>
                                    Small rates
                                </p>
                            </div>

                            <div class="box purple">
                               <p>
                                Customer care
                               </p>
                            </div>

                            <div class="box wheat">
                                <p>
                                    Business
                                    participation
                                </p>
                            </div>
                                </div>
                        </div>
            </div>


        <div class="reasons">
            <h2 class="reasons__title">
                How does it work ?
            </h2>
            <div class="reasons__sections">
                <div class="reasons__sections__box">
                    <div class="box-img">
                        <p>1</p>
                    </div>

                    <p>
                        <a href="/login">Login/Create your account</a>
                    </p>


                </div>

                <div class="reasons__sections__box">
                    <div class="box-img">
                        <p>
                            2
                        </p>
                    </div>

                   <p>
                    Select an option
                   </p>
                </div>

                <div class="reasons__sections__box">
                    <div class="box-img">
                        <p>
                            3
                        </p>
                    </div>

                   <p>
                    Perfom and get paid within 2 hours
                   </p>


                </div>


            </div>
        </div>

        <div class="simulator">
            <img src="" alt="" class="simulator__image">
            <h2 class="simulator__title">
                What if you try ?
            </h2>

            <p class="simulator__text">
                Choose an option for your a trial
            </p>

            <div class="simulator__buttons">
                  <div class="link">
                    <a href="">
                        Buy
                    </a>
                  </div>

                  <div class="link">
                    <a href="/sell">
                        Sell
                    </a>
                  </div>
                </div>
        </div>


        <div class="care">
            <div class="card cardL">

                    <div class="card__text">
                        <h3 class="card__text__title">
                            Refer Rapid Note and get huge discounts
                        </h3>

                        <p class="card__text__text">
                           Refer to a friend and get 1 PV.
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                             Quibusdam, vero? Dolorum quis
                             Dolorum quis
                             </p>

                        <div class="link">
                            <a href="/refer">
                                Refer Now
                            </a>
                        </div>
                    </div>
            </div>

            <div class="card cardR">
                <img src="../../public/img/ghc.jpg" alt="">
            </div>
        </div>

        <div class="payments">
            <h2 class="payments__title">
                Payments methods
            </h2>

            <div class="payments__items">
                <div class="payments__items__item">
                <img src="../../public/img/img-mtn.png" alt="">
                </div>
                <div class="payments__items__item">
                    <img src="../../public/img/mastercard.png" alt="">
                </div>
                <div class="payments__items__item">
                    <img src="../../public/img/visa.png" alt="">
                </div>
                <div class="payments__items__item">
                    <img src="../../public/img/btc.png" alt="">
                </div>
            </div>
        </div>

        <div class="contact">
            <h2 class="contact__title">
                Contact us
            </h2>

            <p>
                Kindly send us a message,
            </p>

           <form action="" method="POST">
                    <div class="contact__details">
                        <label for=""> First_name <br>
                        <input type="text" name="email" placeholder="John">
                    </label>


                    <label for=""> Last_name: <br>
                        <input type="text" name="pass" placeholder="Doe">
                    </label>
                </div>  <br>

                <div class="contact__details">
                        <label for=""> Email <br>
                        <input type="text" name="email" placehoder="johndoe@gmailcom">
                    </label>


                    <label for=""> Phone number: <br>
                        <input type="text" name="pass"
                        placeholder="+XXX XXXXXXXXX">
                    </label>
                </div>  <br>

                <div class="contact__details">


                    <label for=""> Message: <br>
                        <input type="text" name="pass">
                    </label>
                </div>  <br>

                <button type="submit">
                    Envoyer
                </button>

           </form>
        </div>

</template>

<script>
export default {
  name: 'Home',
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