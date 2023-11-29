
<template>
      <div class="container">
         <div class="touch_setion">

          <form>
            <input type="text" placeholder="search" v-model="title">
           
          </form>

              <div>
                  <h1  v-if="!posts.length">No Post Found</h1>
                </div>

            <div class="box_main">
               <div class="image_2 active">
                  <h4 class="who_text active">Who am i</h4>
               </div>
            </div>
            <div class="box_main">
               <div class="image_3">
                  <h4 class="who_text">Get In Touch</h4>
               </div>
            </div>
            <div class="box_main">
               <div class="image_4">
                  <h4 class="who_text">Facebook</h4>
               </div>
            </div>
         </div>
      </div>
      <!-- about section start --> 
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-sm-12">
                  <div class="about_img"><img src="images/about-img.png"></div>
                  <div class="like_icon"><img src="images/like-icon.png"></div>
                  <p class="post_text">Post By : 09/06/2019</p>
                  <h2 class="most_text">Most Awesome Blue Lake With Snow <br>Mountain</h2>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                  <div class="social_icon_main">
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="images/fb-icon.png"></a></li>
                           <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                           <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                        </ul>
                     </div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="image_5"><img src="images/img-5.png"></div>
                  <h1 class="about_taital">About Us</h1>
                  <p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                  <div class="read_bt_1"><a href="#">Read More</a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end --> 
      <!-- blog section start --> 
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-sm-12">
                  <div class="about_img"><img src="images/img-8.png"></div>
                  <div class="like_icon"><img src="images/like-icon.png"></div>
                  <p class="post_text">Post By : 09/06/2019</p>
                  <h2 class="most_text">Most Awesome Blue Lake With Snow <br>River</h2>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                  <div class="social_icon_main">
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="images/fb-icon.png"></a></li>
                           <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                           <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                        </ul>
                     </div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="about_main">
                     <h1 class="follow_text">CONNECT & FOLLOW</h1>
                     <div class="follow_icon">
                        <ul>
                           <li><a href="#"><img src="images/fb-icon-1.png"></a></li>
                           <li><a href="#"><img src="images/twitter-icon-1.png"></a></li>
                           <li><a href="#"><img src="images/linkedin-icon-1.png"></a></li>
                           <li><a href="#"><img src="images/instagram-icon-1.png"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog section end --> 
      <!-- newsletter section start --> 
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-sm-12">
                  <div class="about_img"><img src="images/img-9.png"></div>
                  <div class="like_icon"><img src="images/like-icon.png"></div>
                  <p class="post_text">Post By : 09/06/2019</p>
                  <h2 class="most_text">Most Awesome Blue Lake With Snow <br>sky</h2>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                  <div class="social_icon_main">
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="images/fb-icon.png"></a></li>
                           <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                           <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                        </ul>
                     </div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="newsletter_main">
                     <h1 class="newsletter_taital">NEWSLETTER</h1>
                     <div class="input_box">
                        <input type="text" class="input_text" placeholder="Enter Your email" name="Enter Your email">
                        <input type="text" class="input_text" placeholder="Your name" name="Your name">
                        <div class="send_text"><a href="#">Subscribe</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- newsletter section end --> 
      <!-- recent section start --> 
   
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-sm-12" >
                

                <ul v-for="(category, index) in categories" :key="index">
                  <li><button type="button" class="btn btn-primary mb-2" @click="filterPost(category.name)">{{ category.name }}</button></li>
                </ul>

                <div v-for="(post, index) in posts" :key="index" >
                  <div class="about_img"><img :src="`http://127.0.0.1:8000/${post.imagePath}`"></div>
                  <div class="like_icon"><img src="images/like-icon.png"></div>
                  <p class="post_text">Post By {{ post.user }} : {{ post.date }}</p>
                  <h2 class="most_text">{{ post.title }} <br>{{ post.body }}</h2>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                  <p><RouterLink class="read_bt" :to="{
                    name : 'SinglePost',
                    params : {slug: post.slug}
                  }">Read More</RouterLink></p>
                  <div class="social_icon_main">
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="images/fb-icon.png"></a></li>
                           <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                           <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
                </div>
                <nav aria-label="Page navigation example">
                  <ul  class="pagination">
                  <li  style="display:flex" class="page-item"><a
                    href="#"
                  v-for="(link, index) in links"
                  :key="index"
                  :class="{active: link.active}"
                    class="page-link"
                    @click="changePage(link)"
                    >{{ link.label }}</a></li>
                  </ul>
                  </nav>
                 

                
                  <div class="about_img"><img src="images/img-10.png"></div>
                  <div class="like_icon"><img src="images/like-icon.png"></div>
                  <p class="post_text">Post By : 09/06/2019</p>
                  <h2 class="most_text">Most Awesome Blue Lake With Snow <br>foreste</h2>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                  <div class="social_icon_main">
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="images/fb-icon.png"></a></li>
                           <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                           <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                        </ul>
                     </div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="newsletter_main">
                     <h1 class="recent_taital">Recent post</h1>
                     <div class="recent_box">
                        <div class="recent_left">
                           <div class="image_6"><img src="images/img-6.png"></div>
                        </div>
                        <div class="recent_right">
                           <h3 class="consectetur_text">Consectetur adipiscing</h3>
                           <p class="dolor_text">ipsum dolor sit amet, consectetur adipiscing </p>
                        </div>
                     </div>
                     <div class="recent_box">
                        <div class="recent_left">
                           <div class="image_6"><img src="images/img-7.png"></div>
                        </div>
                        <div class="recent_right">
                           <h3 class="consectetur_text">Consectetur adipiscing</h3>
                           <p class="dolor_text">ipsum dolor sit amet, consectetur adipiscing </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- recent section end --> 
      <!-- tag section start -->
      <div class="tag_section layout_padding">
         <div class="container">
            <h1 class="tag_taital">Tag</h1>
            <div class="tag_bt">
               <ul>
                  <li class="active"><a href="#">Ectetur</a></li>
                  <li><a href="#">Onsectetur</a></li>
                  <li><a href="#">Consectetur</a></li>
                  <li><a href="#">Consectetur</a></li>
                  <li><a href="#">Consectetur</a></li>
               </ul>
            </div>
            <div class="tag_bt_2">
               <ul>
                  <li><a href="#">Tetur</a></li>
                  <li><a href="#">Conse</a></li>
                  <li><a href="#">Nsectetur</a></li>
                  <li><a href="#">Sectetur</a></li>
                  <li><a href="#">Consectetur</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- tag section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">1</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active">1</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active">1</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3" class="active">1</li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="contact_img"></div>
                        </div>
                        <div class="carousel-item">
                           <div class="contact_img"></div>
                        </div>
                        <div class="carousel-item">
                           <div class="contact_img"></div>
                        </div>
                        <div class="carousel-item">
                           <div class="contact_img"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="mail_section">
                     <h1 class="contact_taital">Contact us</h1>
                     <input type="" class="email_text" placeholder="Name" name="Name">
                     <input type="" class="email_text" placeholder="Phone" name="Phone">
                     <input type="" class="email_text" placeholder="Email" name="Email">
                     <textarea class="massage_text" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
                     <div class="send_bt"><a href="#">send</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
 
 
</template>
<script>
import axios from 'axios'
import Header from '../components/Header.vue';

export default {

data() {
  return {
    posts: [],
    categories: [],
    title: '',
    links: []
  }
},
components : {
  Header
},
async mounted(){
  const token = localStorage.getItem('authToken');
  axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;

  try {
    const res = await axios.get('http://127.0.0.1:8000/api/home') 
    const resCat = await axios.get('http://127.0.0.1:8000/api/category')
    this.categories = resCat.data.data   
    this.posts = res.data.data
    this.links = res.data.meta.links
  } catch (error) {
    
  }
},
watch:{
  async title(){
    try {
      const res = await axios.get('http://127.0.0.1:8000/api/home', {
        params : {
          search: this.title
        }
      })
      this.posts = res.data.data
      this.links = res.data.meta.links

    } catch (error) {
      
    }
  }
},

methods:{
  async filterPost(category){
    try {
      const res = await axios.get('http://127.0.0.1:8000/api/home', {
        params : {
          category: category
        }
      }) 
      this.posts = res.data.data
      this.links = res.data.meta.links
    } catch (error) {
      console.log(error);
    }
  },
  async changePage(link){
    if(!link.url || link.active){
      return
    }
    try {
      const res = await axios.get(link.url)
      this.posts = res.data.data
      this.links = res.data.meta.links
    } catch (error) {
      console.log(error);
    }
  }
}

}


</script>


