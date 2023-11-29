<script>
import { RouterLink, RouterView } from 'vue-router'
// import HelloWorld from './components/HelloWorld.vue'
export default {
  data(){
    return{
      loggedIn: ''
    }
  }, 
 
  mounted(){
    if(localStorage.getItem('authToken')){
      this.loggedIn = true
    }else{
      this.loggedIn = false
    }
  }
}


</script>

<template>

      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid header_main">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="index.html"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <RouterLink class="nav-link" to="/">Home</RouterLink>
                     </li>
                     <li class="nav-item">
                      <RouterLink class="nav-link" to="/about">About</RouterLink>
                     </li>
                     <li class="nav-item" v-if="!loggedIn">
                      <RouterLink class="nav-link" to="/login" >Login</RouterLink>
                     </li>
                     <li class="nav-item" v-if="!loggedIn">
                      <RouterLink class="nav-link" to="/register">Register</RouterLink>
                     </li>
                     <li class="nav-item" v-if="loggedIn">
                      <RouterLink class="nav-link" to="/dashboard">Dashboard</RouterLink>
                     </li>
           
                  </ul>
               </div>
            </nav>
         </div>
       
      </div>
      <!-- header section end --> 
  <RouterView />

       <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="images/footer-logo.png"></a></div>
            <div class="footer_menu">
               <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="features.html">Features</a></li>
                  <li><a href="contact.html">contact us</a></li>
               </ul>
            </div>
     
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2020 All Right Reserved By.<a href="https://html.design"> Free  html Templates</a></p>
         </div>
      </div>
</template>

