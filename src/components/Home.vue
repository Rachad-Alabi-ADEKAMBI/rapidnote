<template>
    <div class="container">

        <div class="top">

            <div class="top__text">
                <h1 class="top__text__title">
                    RAPID NOTE
                </h1>

                <p class="top__text__text">
                    Nous vous échangeons vos crypto-actifs en quelques clics
                </p>

                <h2 class="top__text__subtitle">
                    Notre plateforme vous permet d'échanger Lorem ipsum dolor sit,
                    amet consectetur adipisicing elit. Ea laudantium totam
                     minima dolore enim. Id, numquam blanditiis perferendis
                </h2>

                <ul class="top__text__items">
                    <li>
                        Facile à utiliser
                    </li>

                    <li>
                        Sécurisé
                    </li>

                    <li>
                        Vous etes rémunéré pour vos opérations
                    </li>
                </ul>
            </div>

        </div><br>

        <div class="about">
                    <h2 class="about__title">
                            ABOUT US
                        </h2>

                        <p class="about__text">
                      lorem ipsumtext
                        </p>

                        <div class="about__items">
                            <div class="about__items__item green">
                                <i class="far fa-clock"></i>
                                Fast
                            </div>

                            <div class="about__items__item green">
                                <i class="fas fa-money-bill"></i>
                                Price
                            </div>

                            <div class="about__items__item orange">
                                <i class="fas fa-money-bill"></i>
                                Customer care
                            </div>


                        </div>



                        <button class="about__btn">
                            More....
                        </button>
            </div>


        <div class="reasons">
            <h2 class="reasons__title">
                Comment ca marche ?
            </h2>
            <div class="reasons__sections">
                <div class="reasons__sections__box">
                    <div class="box-img">
                        <p>1</p>
                    </div>

                    <p>
                        <a href="">Connectez vous</a> à votre compte
                    </p>


                </div>

                <div class="reasons__sections__box">
                    <div class="box-img">
                        2
                    </div>

                    <h4>
                        Choisissez <a href="">Acheter</a> ou <a href="">Vendre </a>
                    </h4>
                </div>

                <div class="reasons__sections__box">
                    <div class="box-img">
                        3
                    </div>

                    <h4>
                      Le solde est transféré sur votre portefeuille  Mobile money ou Bitcoin
                    </h4>


                </div>


            </div>
        </div>

        <div class="simulator">
            <img src="" alt="" class="simulator__image">
            <h3 class="simulator__title">
                Et si vous faisiez une simulation ?
            </h3>

            <p class="simulator__text">
                Découvrez en quelques clics nos solutions
            </p>

            <div class="simulator__buttons">
                    <form action="">
                        <button> Simuler achat</button>
                    </form>

                    <form action="">
                        <button> Simuler vente</button>
                    </form>
                </div>
        </div>


        <div class="care">
            <div class="card">
                <div class="card__icon">
                    <i class="fas fa-headset"></i>
                </div>
                    <div class="card__text">
                        <h3 class="card__text__title">
                            Nous sommes à votre écoute
                        </h3>

                        <p class="card__text__text">
                            <span>Contactez-nous</span> <br>

                            Quel que soit votre préoccupation, notre équipe disponible
                            24/7 vous aidera dans la marche à suivre
                        </p>

                        <button>
                            Contact
                        </button>
                    </div>
            </div>

            <div class="card">

            <div class="card__icon">
                    <i class="fas fa-headset"></i>
                </div>
                    <div class="card__text">
                        <h3 class="card__text__title">
                            Nous sommes à votre écoute
                        </h3>

                        <p class="card__text__text">
                            <span>Vous etes rémunéré</span> <br>

                        Vous appréciez notre service ? Parlez-en à votre entourege et gagnez 10%
                        de la 1ere transaction de votre filleul. Votre interet est également le notre.
                        </p>

                        <button>
                            Contact
                        </button>
                    </div>

                </div>
        </div>

        <div class="payments">
            <h2 class="payments__title">
                Nos différents moyens de paiement
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
                    <img src="../../public/img/paypal-rond.png" alt="">
                </div>
                <div class="payments__items__item">
                    <img src="../../public/img/btc.png" alt="">
                </div>
            </div>
        </div>
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