<template>
   <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">
            <a href="index.php">
                <img src="../public/img/logo.png" alt="">
            </a>
        </label>
        <ul>
          <li>
              <router-link to="/">Home</router-link>
            </li>


            <li>
              <router-link to="/help">Support</router-link>
            </li>

            <li class="">
              <router-link to="/login">Login/Create account</router-link>
            </li>


        </ul>
    </nav>
  <router-view/>


</template>
