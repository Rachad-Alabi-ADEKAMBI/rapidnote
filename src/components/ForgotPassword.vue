<template> <br><br> <br> <br>

    <form method="POST" class="form"
     action="http://127.0.0.1/rapidnote/api/api.php?action=forgotPassword">

        <div class="form__close">
            <i class="fas fa-times"></i>
        </div>

        <h1>
            Forgot Password
        </h1>


        <div class="form__details">
            <label for="">
            <input type="text" name="email" placeholder="Email or username"
            required>
             </label>
        </div>
        <label for="">
            <button type="submit" class="link">
                Proceed
            </button>
        </label>

        <p>
           Already have an account ?
           <br>
           <strong>
            <a href="/login">
                Sign in
            </a>
           </strong>
        </p>


    </form> <br> <br>
</template>

<script>
export default {
name: 'ForgotPassword',
data() {
  return{
      message: 'ok'
  }
  },
  mounted: function(){

  },

  methods: {
       do (){
            alert('yep');
       }
      }
  }



</script>