<template> <br><br> <br> <br>

    <form method="POST" class="form"
     action="http://127.0.0.1/rapidnote/api/api.php?action=register">

        <div class="form__close">
            <i class="fas fa-times"></i>
        </div>

        <h1>
            Sign up
        </h1>


        <div class="form__details">
            <label for="">
            <input type="text" name="first_name" placeholder="First name"
            required>
             </label>
        </div> <br>

        <div class="form__details">
            <label for="">
                    <input type="text" name="last_name" placeholder="last_name"
                    required>
                </label>
        </div>

        <div class="form__details">
            <label for="">
            <input type="email" name="email" placeholder="Email"
            required>
             </label>
        </div> <br>

       <div class="form__details">
        <label for="">
                    <input type="text" name="phone_number"
                    placeholder="phone_number"
                    required>
                </label>
       </div>

        <label for="">
            <button type="submit" class="link">
                Login
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
name: 'Register',
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