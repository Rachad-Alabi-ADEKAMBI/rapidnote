<template>
       
        <div class="login">
            <img src="public/images/logo.png" alt="" class="login__top">

            <p class="login__text">
                Achat et revente de cryptos
            </p>

           <div class="login__items"> Email: <br>
                <input type="text">
           </div>

           <div class="login__items"> Mot de passe: <br>
                <input type="text">
           </div>

            <button class="login__submit">
                valider
            </button>
        </div>
</template>


<script>
export default {
  name: 'Login',
  data() {
      return{
          currentUser: {},
          logged: false
      }
  },
  methods: {
        login(){
              axios.get("http://127.0.0.1:8080/model/functions.php?action=login").then(response => this.users = response.data);
             
               if(response.data.error){
                      app.errorMsg = response.data.message;
                  }
                  else{
                      app.successMsg= response.data.message;
                      // this.message = "Votre compte a été crée avec succès, vous serez redirigé vers le tableau de bord";
                      //  $router. push({ name: "/"})
                        this.logged = "true";
                       
                  }
          }
  }
}
</script>

