<template> <br><br><br><br>
    <form method="POST"
        action="" class='form' v-if="showSettings">

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
            <input type="text"  >
       </label>

            <button type="submit" class="link">
                Change
            </button>

   </form>
   <br><br>
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