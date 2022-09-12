<template> <br><br> <br> <br>

        <form method="POST" class="form"
        action="http://127.0.0.1/rapidnote/api/api.php?action=login">

            <div class="form__close">
                <i class="fas fa-times"></i>
            </div>

            <h1>
                Login
            </h1>

            <label for=""> Email/Login: <br>
                <input type="text" name="email">
            </label>


            <label for=""> Mot de passe: <br>
                <input type="text" name="pass">
            </label>

            <label for="">
                <button type="submit" class="link">
                    Login
                </button>
            </label>

            <p>
                <strong>
                    <a href="/for">
                Forgot password ?
               </a>
                </strong>
                <br>
               or
               <br>
               <span>
                <a href="">
                    Create account
                </a>
               </span>
            </p>


        </form>
</template>

<script>
export default {
  name: 'Login',
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