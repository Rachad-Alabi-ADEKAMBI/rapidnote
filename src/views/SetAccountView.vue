<template>
  <div class="">
    <SetAccount/>
    <Footer/>
  </div>
</template>

<script>
// @ is an alias to /src
import SetAccount from '@/components/SetAccount.vue'
import Footer from '@/components/Footer.vue'


export default {
  name: 'SetAccountView',
  components: {
    SetAccount,
    Footer
  }
}
</script>
