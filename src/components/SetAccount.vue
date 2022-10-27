<template> <br><br> <br> <br>

    <form method="POST" class="form"
     action="https://127.0.0.1/rapidnote/api/api.php?action=setAccount">

        <div class="form__close">
            <i class="fas fa-times"></i>
        </div>

        <h1>
            Set Account
        </h1>


        <div class="form__details">
            <label for="">
            <input type="text" name="username" placeholder="Usename"
            required>
             </label>
        </div> <br>
        <hr>

        <div class="form__details">
            <label for="">
                    <input type="password" name="pass1"
                     placeholder="Password"
                    required>
                </label>
        </div> <br>

        <div class="form__details">
            <label for="">
                    <input type="password" name="pass2"
                     placeholder="Confirm password"
                    required>
                </label>
        </div> <br>


        <label for="">
            <button type="submit" class="link">
                Proceed
            </button>
        </label>
    </form> <br> <br>
</template>

<script>
export default {
name: 'SetAccount',
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