<template>
  <div class="home">
    <Home/>
    <Footer/>
  </div>
</template>

<script>
// @ is an alias to /src
import Home from '@/components/Home.vue'
import Footer from '@/components/Footer.vue'

export default {
  name: 'HomeView',
  components: {
    Home,
    Footer
  }
}
</script>
