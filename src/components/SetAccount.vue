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


<style scoped>
    .login {
  margin: 35px auto;
  width: 500px;
  display: block;
  text-align: center;
  background: rgb(154, 154, 230);
  border-radius: 5px;
}

label{
  color: black;
  font-weight: bold;
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
  height: 35px;
}

.login__items select {
  width: 120px;
  height: 40px;
  border: 1px solid black;
}

.login__items label {
  text-align: left;
}

.login__submit{
  height: 40px;
  color: white;
  background-color: rgb(51, 28, 151);
  font-weight: bold;
  border: 1px solid  rgb(51, 28, 151);;
  border-radius: 5px;
  margin: 10px auto;
  font-size: 1.2em;
  padding: 5px;
  cursor: pointer;
  transition: 500ms ease-in-out;
}

.login__submit:hover{
  transform: scale(1.1);
}
</style>