<template>
</template>


<script>

  export default {
      name: 'Logout',
    data(){
      return{
      }
    },
    components: {
    },
    mounted: function(){
        this.logout();
    },
    methods:{
    logout(){
     window.location.replace('http://127.0.0.1/rapidnote/api/api.php?action=logout')
    },
  }

  }
  </script>

  <!-- Add "scoped" attribute to limit CSS to this component only -->
  <style scoped>

  </style>