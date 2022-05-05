<template>
    <footer class="footer">
    <div class="footer__item">
        <ul>
            <li>
                <img src="public/logo.png" alt="">
            </li>

            <li class="footer-text">
                Rapidnote est une entreprise Lorem ipsum dolor sit, amet 
                consectetur adipisicing elit. Excepturi placeat, animi, fuga 
                reprehenderit tempora quas nobis fugit doloremque nulla quae.
            </li>
        </ul>
    </div>  

    <div class="footer__item">
        <ul class="footer__item__menu">
            <li class="">
                <h4>
                Ressources
                </h4>
            </li>

            <li>
                <a href="">
                   Qui sommes nous ?
                </a>
            </li>

            <li>
                <a href="">
                   CGV
                </a>
            </li>

            <li>
               <a href="">
                   Politique de confientialite
               </a>
            </li>

            <li>
                <a href="">
                    Contact
                </a>
            </li>

            <li>
                
            </li>
        </ul>
    </div>

    <div class="footer__item">
        <ul class="footer__item__menu">
            <li class="">
               <h4>
               Entreprise
               </h4>
            </li>

            <li>
                <a href="">
                    Acheter
                </a>
            </li>

            <li>
                Vendre
            </li>

            <li>
                parrainer
            </li>

            <li>
                
            </li>
        </ul>
    </div>
    </footer>
    
</template>

<script>
export default {
  name: 'Header',
  data() {
      return{
          
      }
  }
}

</script>

<style >

.footer {
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

.footer__item {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.footer__item ul li {
  display: block;
}

.footer__item ul li h4 {
  font-weight: bold;
}
</style>