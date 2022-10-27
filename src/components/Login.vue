<template> <br><br> <br> <br>

        <form method="POST" class="form"
         action="http://127.0.0.1/rapidnote/api/api.php?action=login">

            <div class="form__close">
                <i class="fas fa-times"></i>
            </div>

            <h1>
                Sign in
            </h1>

            <label for="">
                <input type="text" name="email" placeholder="Username or Email"
                required>
            </label>


            <label for="">
                <input type="text" name="pass" placeholder="password"
                required>
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
               <strong>
                <a href="/register">
                    Create account
                </a>
               </strong>
            </p>


        </form> <br> <br>
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