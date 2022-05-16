<template>
       
        <form action="model/functions.php?action=setAccount" method="POST">
             <div class="login" >
          

            <p class="login__text">
              Création de compte
            </p>

           <div class="login__items"> nom d'utilisateur: <br>
                <input type="text" v-model="newUser.username" name="username">
           </div>

            <div class="login__items">
                <label for="">Mot de passe: <br>
                    <input type="password"  v-model="newUser.pass" name="pass1">
                </label>

                <label for="">Confirmer le mot de passe: <br>
                    <input type="password"  v-model="newUser.last_name" name="pass2">
                </label>
            </div>
         
            <button type="" class="login__submit" 
            v-on:click="setAccount();">
                Valider
            </button>
        </div>
        </form>
</template>


<script>
export default {
  name: 'SetAccount',
  data() {
      return{
          users:[],
          newUser: { },
          errorMsg: "",
          successMsg:"",
          error: false,
          message: ''
      }
      },
     
      methods: {
            SetAccount(){
                var FormData = app.toFormData(app.newUser);
                axios.update("http://127.0.0.1:8080/model/functions.php?action=setAccount").then(function(response){
                  app.newUser = {username: "", pass: ""}

                  if(response.data.error){
                      app.errorMsg = response.data.message;
                  }
                  else{
                      app.successMsg= response.data.message;
                       this.message = "Votre compte a été crée avec succès, vous serez redirigé vers le tableau de bord";
                        $router. push({ name: "/"})
                        this.logged = "true";
                       
                  }
              });
            },
            toFormData(obj){
                var  fd = new FormData();
                for(var i in obj){
                    fd.append(i, obj[i]);
                }
                return fd;
            }
          }
      }
</script>
