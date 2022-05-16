<template>
  <div class="">
     <Login/>
   <Footer/>
  </div>
</template>

<script>
// @ is an alias to /src
import Login from '@/components/Login.vue'
import Footer from '@/components/Footer.vue'

export default {
  name: 'LoginView',
  components: {
   Login,
   Footer
  }
}
</script>
