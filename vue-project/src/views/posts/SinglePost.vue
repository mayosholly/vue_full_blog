<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ post.title }}
                        <p><RouterLink :to="{name: 'Home'}">Back</RouterLink></p>
                        </h4>
                    </div>
                    <div class="card-body">
                        <p>{{ post.body }}</p>
                        <p><img :src="`http://127.0.0.1:8000/${post.imagePath}`" alt=""></p>
                    </div>
                    
                </div>
                <h3>Related Posts</h3>
                <div class="card" v-for="(post, index) in relatedPosts" :key="index">
                    <div class="card-header">
                        <h4>{{ post.title }}
                        </h4>
                    </div>
                    <div class="card-body">
                        <p>{{ post.body }}</p>
                        <p><img :src="`http://127.0.0.1:8000/${post.imagePath}`" alt=""></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default{
    props : ['slug'],
    data(){
        return{
            post: {},
            relatedPosts: []
        }
    },
    async mounted(){
        const token = localStorage.getItem('authToken');
        axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
        try {
            // const res = await axios.get(`http://127.0.0.1:8000/api/post/${this.$route.params.slug}`)
            const res = await axios.get(`http://127.0.0.1:8000/api/post/${this.slug}`)
            const relatedPosts = await axios.get(`http://127.0.0.1:8000/api/relatedPost/${this.slug}`)
            this.post = res.data.data
            this.relatedPosts = relatedPosts.data.data
        } catch (error) {
            console.log(error);
        }

        
    }
}

</script>