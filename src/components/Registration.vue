<template>
       
        <form action="model/functions.php?action=register" method="POST">
             <div class="login" >
          

            <p class="login__text">
               Inscription
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
          message: ''
      }
      },
     
      methods: {
            addUser(){
                var FormData = app.toFormData(app.newUser);
                axios.post("http://127.0.0.1:8080/model/functions.php?action=register").then(function(response){
                  app.newUser = {email: "", first_name:"", last_name:"", email:"", 
                phone_code: "", phone_number: "", city: "", country: ""}

                  if(response.data.error){
                      app.errorMsg = response.data.message;
                  }
                  else{
                      app.successMsg= response.data.message;
                       this.message = 'Inscription réussie, un email de confirmation vous sera envoyé pour la création de votre compte';
                        $router. push({ name: "/"})
                       
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

