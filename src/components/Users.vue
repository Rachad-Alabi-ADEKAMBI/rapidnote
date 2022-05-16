<template>
   <div class="users">
       <h1>
           Liste utilisateurs
       </h1>

       <button v-on:click="update()">
           Mise a jour
       </button>

        <table>
    <tr>
        <th>
            id
        </th>

        <th>
            Noms et prénoms
        </th>

        <th>
            Emailll
        </th>

        <th>
        Role
        </th>
    </tr>

        <tr v-for='user in users' :key="user.id">
            <td>
                {{ user.id }}
            </td>

            <td>
                {{ user.first_name }}  {{ user.last_name}}
            </td>

            <td>
                {{ user.email }}
            </td>

            <td>
                {{ user.username}}
            </td>
        </tr>

      
     </table>
   </div>
</template>

<script>
export default {
  name: 'Users',
  data() {
      return{
          users:['text1', 'text2', 'text3'],
          errorMsg: "",
          allData: ''
      }
      },
      mounted: function(){
          this.getAllUsers();
      //  this.fetchAllData();
      },
      methods: {
          getAllUsers(){
              axios.get("http://127.0.0.1:8080/model/functions.php?action=read").then(response => this.users = response.data);
              /*{
                if(response.data.error){
                      app.errorMsg = response.data.message;
                  }
                  else{
                      this.users = response.data.users;
                      //this.app.push(response.data.users);
                      
                  }
                  
                   });*/
              
         
          
          },
            update(){
              this.users = ['text 0']
          }
      /*   fetchAllData(){
            axios.get('@/model/functions.php?action=fetchall').then(function(response){
                app.allData = response.data;
            });
            },*/
         
         
      }
  }


</script>
 
