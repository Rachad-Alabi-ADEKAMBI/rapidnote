<template>
    <main class="main">
        <div class="top">

            <div class="top__text">
                <h1 class="top__text__title">
                    RAPID TRANSFER
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
            <div class="top__image">
                <div class="top__image__box">
                    <img src="public/images/bitcoin.jpg" alt="">
                    <img src="public/images/ghc.jpg" alt="">
                </div>
            </div>
            
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

            <div class="about">
               <div class="about__left">
                    <h2 class="about__left__title">
                            Pourquoi nous choisir ?
                        </h2>

                        <p class="about__left__text">
                        Nous sommes convaincus  que garantir la sécurité et le un faible taux de change 
                        des devises commes le bitcoin et le ghc sont des mesures à prendre en considération 
                        pour le bien etre de l'econonmie et des citoyens. Notre entreprise vous accompagne dans 
                        l'échange des devises précitées tout en vous promettant ces deux garanties. Plusieurs autres
                        avantages vous attendent...
                        </p> 

                        <button class="about__left__btn">
                            En savoir plus
                        </button>
               </div>

               <div class="about__img">
                   <img src="public/images/statue-accra.jpg" alt="">
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
                <img src="/@/public/img/img-mtn.png" alt="">
                </div>
                <div class="payments__items__item">`
                    <img src="/@public/img/mastercard.png" alt="">
                </div>
                <div class="payments__items__item">`
                    <img src="/@/public/img/visa.png" alt="">
                </div>
                <div class="payments__items__item">`
                    <img src="/@/public/img/paypal-rond.png" alt="">
                </div>
                <div class="payments__items__item">`
                    <img src="/@/public/images/btc.png" alt="">
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  }
}
</script>

<style scoped>
    
.top {
  height: 350px;
  margin: 30px auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: auto;
  width: 80%;
  text-align: left;
  padding-top: 90px;
}

.top__text {
  text-align: left;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  width: 80%;
  margin: auto;
  padding-right: 30px;
}

.top__text__title {
  color: #1b1b7e;
  font-size: 2.2em;
  font-weight: bold;
}

.top__text__text {
  font-size: 1em;
}

.top__text__subtitle {
  font-size: 1.2em;
}

.top__text__items {
  text-align: left;
  margin: auto 0;
}

.top__text__items li {
  display: inline;
  margin: 10px;
  text-align: left;
}

.top__image {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.top__image__box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: auto;
  -webkit-box-pack: no;
      -ms-flex-pack: no;
          justify-content: no;
  margin: 90px auto;
}

.top__image__box img {
  width: 150px;
  height: auto;
  margin: auto;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.reasons {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: auto;
  text-align: center;
  width: 100%;
  margin: 70px auto;
}

.reasons__title {
  color: purple;
  text-align: center;
  font-size: 1.9em;
}

.reasons__sections {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: auto;
  width: 80%;
}

.reasons__sections__box {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  text-align: center;
}

.reasons__sections__box .box-img {
  background-color: #d4c2d4;
  width: 50px;
  height: 50px;
  border-radius: 40px;
  margin: auto;
  text-align: center;
  position: relative;
}

.reasons__sections__box .box-img p {
  position: absolute;
  left: 0;
  right: 0;
}

.simulator {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: auto;
  background-color: #b2b2b9;
  text-align: center;
  height: 190px;
  padding-bottom: 30px;
  padding-top: 30px;
  width: 100%;
  margin: 30px auto;
}

.simulator h3 {
  font-size: 1.9em;
}

.simulator__text {
  margin: -30px auto;
}

.simulator__buttons {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: auto;
}

.simulator__buttons form {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  margin: 10px;
}

.about {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: auto;
  text-align: center;
}

.about__left {
  padding-top: 50px;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.about__left__title {
  color: purple;
  font-size: 1.9em;
}

.about__left__text {
  width: 80%;
  margin: auto;
  text-align: left;
}

.about__left__btn {
  background-color: rgba(128, 152, 204, 0.534);
  color: white;
  border: 1px solid;
  border-radius: 30px;
  height: 35px;
  width: auto;
  cursor: pointer;
  -webkit-transition: 500ms ease-in-out;
  transition: 500ms ease-in-out;
  margin: 20px auto;
}

.about__img {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.about__img img {
  width: 80%;
}

.care {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: auto;
  width: 80%;
}

.care .card {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  margin: auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: auto;
}

.care .card__icon {
  text-align: center;
  position: relative;
}

.care .card__icon i {
  font-size: 3em;
  width: 30%;
  position: absolute;
  left: 0;
  right: 0;
}

.care .card__text {
  width: 70%;
}

.care .card__text__text {
  width: 80%;
  text-align: left;
}

.payments {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: auto;
  height: 300px;
  width: 100%;
}

.payments__title {
  text-align: center;
}

.payments__items {
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: auto;
  width: 100%;
}

.payments__items__item {
  margin: auto;
}

.payments__items__item img {
  width: 150px;
  height: 150px;
  border-radius: 50px;
  margin: auto;
}

</style>