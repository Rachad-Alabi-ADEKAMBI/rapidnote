<template>
   <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">
            <a href="/">
                <img src="../public/img/logo.png" alt="">
            </a>
        </label>
        <ul>
          <li>
              <router-link to="/" class="nav-link"> <i class="fas fa-home"></i> Home</router-link>
            </li>

            <li >
              <router-link to="/login" class="login-link" > <i class="fas fa-sign-in-alt"></i> Login/Register</router-link>
          </li>

            <li>
              <router-link to="/logout" > <i class="fas fa-sign-out-alt"></i> Logout</router-link>
            </li>


        </ul>
    </nav>
  <router-view/>


</template>
