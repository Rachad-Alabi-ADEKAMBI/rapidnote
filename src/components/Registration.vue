<template>
        <main class="main">
           <div class="login">
            <img src="public/images/logo.png" alt="" class="login__top">

            <p class="login__text">
                Achat et revente de cryptos
            </p>

           <div class="login__items"> Email: <br>
                <input type="text">
           </div>

            <div class="login__items">
                <label for="">PrénomS: <br>
                    <input type="text">
                </label>

                <label for="">Noms: <br>
                    <input type="text">
                </label>
            </div>

           <div class="login__items">
               <div class="indicatif">
                    <select name="" id="">
                        <option value="">1</option>
                    </select>
               </div>

               <div class="phone">
                   <input type="text">
               </div>
           </div>

           <hr>

           <div class="login__items">
          Pseudo <br>
               <input type="text">
        
           </div>

           <div class="login__items">
                <label for="">Mot de passe: <br>
                    <input type="text">
                </label>

                <label for="">Confirmer le mot de passe<br>
                    <input type="text">
                </label>
            </div>
            
            <div class="login__items">
               <input type="checkbox">
                        J'accepte les conditions d'utilisation et 
                        la politique de confidentialité de 
                        Rapidnote.
            </div>

            <button>
                valider
            </button>
        </div>
        </main>
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

<style scoped>
    .login {
  margin: 35px auto;
  width: 500px;
  display: block;
  background-color: #1b1b7e;
  text-align: center;
}

.login__top {
  width: 120px;
  height: 70px;
  margin: auto;
}

.login__text {
  color: white;
  font-weight: bold;
}

.login__items {
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
  flex-direction: row;
  margin: 20px auto;
}

.login__items input {
  width: 100%;
}

.login__items select {
  width: 120px;
  height: 25px;
  border: 1px solid black;
}

.login__items label {
  text-align: left;
}
</style>