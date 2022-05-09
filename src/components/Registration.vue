<template>
       
        <form action="model/functions.php?action=register" method="POST">
             <div class="login" >
            <img src="public/images/logo.png" alt="" class="login__top">

            <p class="login__text">
                Achat et revente de cryptos
            </p>

            <p>
              Message: "{{ message }}"
            </p>

           <div class="login__items"> Email: <br>
                <input type="text" v-model="newUser.first_email" name="email">
           </div>

            <div class="login__items">
                <label for="">Prénoms: <br>
                    <input type="text"  v-model="newUser.first_name" name="first_name">
                </label>

                <label for="">Noms: <br>
                    <input type="text"  v-model="newUser.last_name" name="last_name">
                </label>
            </div>

           <div class="login__items">
               <div class="indicatif">Code téléphonique: <br>
                    <select name="phone_code" id=""  v-model="newUser.phone_code">
                        <option value="">1</option>
                    </select>
               </div>

               <div class="phone">Numéro de  téléphone: <br>
                   <input type="text"  v-model="newUser.phone_number" name="phone_number">
               </div>
           </div>

           <div class="login__items">
                <label for="">Ville: <br>
                    <input type="text"  v-model="newUser.city" name="city">
                </label>

                <label for="">Pays: <br>
                    <input type="text"  v-model="newUser.country" name="country">
                </label>
            </div>

           <hr>

           <div class="login__items">
          Pseudo <br>
               <input type="text"  v-model="newUser.username" name="username">
        
           </div>

           <div class="login__items">
                <label for="">Mot de passe: <br>
                    <input type="password"  v-model="newUser.password1" name="pass1">
                </label>

                <label for="">Confirmer le mot de passe<br>
                    <input type="password"  v-model="newUser.password2" name="pass2">
                </label>
            </div>
            
            <div class="login__items">
               <input type="checkbox" required>
                        J'accepte les conditions d'utilisation et 
                        la politique de confidentialité de 
                        Rapidnote.
            </div>

            <button type="" class="login__submit" 
            v-on:click="addUser();">
                valider
            </button>
        </div>
        </form>
</template>


<script>
export default {
  name: 'Registration',
  data() {
      return{
          users:[],
          newUser: { },
          errorMsg: "",
          successMsg:"",
          error: false,
          message: 'oklm'
      }
      },
     
      methods: {
            addUser(){
                var FormData = app.toFormData(app.newUser);
                axios.post("http://127.0.0.1:8080/model/functions.php?action=register").then(function(response){
                  app.newUser = {email: "", first_name:"", last_name:"", email:"", 
                phone_code: "", phone_number: "", city: "", country: "",
                username: "", pass:""}

                  if(response.data.error){
                      app.errorMsg = response.data.message;
                  }
                  else{
                      app.successMsg= response.data.message;
                       this.message = 'fait';
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