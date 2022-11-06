<template> <br>
    <form method="POST"
        action="http://127.0.0.1/rapidnote/api/api.php?action=settings" class='form' v-if="showSettings">

        <div class="form__close">
           <a href="/dashboard">
               back
               <i class="fas fa-times"></i>
           </a> <br>
        </div>

        <h1 class="form__title">
           Settings
        </h1>



        <label for="">
            Username <br>
            <input type="text" name="username">
       </label>

       <div class="form__details">
            <label for="">
                New password<br>
                <input type="password"  name="pass1">
            </label>

            <label for="">
                    Confirm<br>
                    <input type="password" name="pass2">
            </label>
       </div> <br>

            <button type="submit" class="link">
                Change
            </button>

   </form>
   <br>
  </template>


  <script>
   export default {
       name: 'Settings',
     data(){
       return{
           details:[],
           showSettings: false
       }
     },
     mounted: function(){
         this.displaySettings();
     },
     methods:{
        displaySettings(){
            this.showSettings = true;
        },
        }

     }
   </script>

   <!-- Add "scoped" attribute to limit CSS to this component only -->
   <style scoped>

   </style>