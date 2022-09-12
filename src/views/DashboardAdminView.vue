<template>
    <div class="dashboard">
        <Menu></Menu>
      <DashboardAdmin></DashboardAdmin>
      <Users></Users>
    </div>
  </template>

  <script>
  // @ is an alias to /src
  import Menu from '@/components/Menu.vue'
  import DashboardAdmin from '@/components/DashboardAdmin.vue'
  import Users from '@/components/Users.vue'

  export default {
    name: 'DashboardView',
    components: {
      Menu,
      DashboardAdmin,
      Users
  },
  data(){
    return{
        message: '',
        details: [],
        showDashboard: true,
        showUsers: false
    },
}
    methods{
        displayUsers(){
            this.showUsers = true;
        }
    }
  }

  </script>
