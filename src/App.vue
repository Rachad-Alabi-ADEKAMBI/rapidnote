<template>
  <nav class="nav">
                  <li>
                <router-link to="/">Accueil</router-link> |
            </li>

        <ul class="nav__menu">
            <li>
                <router-link to="/">Comment ca marche</router-link> |
            </li>

            <li>
                <router-link to="/buy">Acheter</router-link> |
            </li>

            <li>
                <router-link to="/buy">Vendre</router-link> |
            </li>
        </ul>

        <div class="nav__login">
            <ul class="nav__login__link">
             <li>
                <router-link to="/login">Connexion</router-link> |
            </li> 
            
            <li>
                <router-link to="/registration">Inscription</router-link> |
            </li> 
            
            </ul>
             <router-view/>
        </div>
    </nav>
  <router-view/></template>




<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

  .nav {
  width: 100%;
  background-color: aliceblue;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: auto;
}

.nav__logo {
  float: left;
}

.nav__logo img {
  float: left;
  margin: 10px auto auto 20px;
}

.nav__menu {
  text-align: center;
}

.nav__menu li {
  display: inline;
  margin: 5px;
}

.nav__menu li a {
  color: black;
}

.nav__menu li a:hover {
  color: #1b1b7e;
}

.nav__login {
  float: right;
}

.nav__login ul li {
  display: inline;
  margin: 5px;
}

.nav__login ul li a {
  color: black;
}

</style>

