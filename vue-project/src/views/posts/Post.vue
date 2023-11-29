<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            All Post 
                            <RouterLink :to="{name: 'Post'}">Back</RouterLink>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(post, index) in posts" :key="index">
                                    <th>{{ index + 1 }}</th>
                                    <th>{{ post.title }}</th>
                                    <th>{{ post.body }}</th>
                                    <th>{{ post.category.name }}</th>
                                    <th><img :src=" `http://127.0.0.1:8000/${post.imagePath}`" height="100" width="100" alt=""></th>
                                    <th style="display: flex;">
                                        <RouterLink class="btn btn-primary" :to="{name: 'EditPost', params: {slug:post.slug}}">
                                            Edit
                                        </RouterLink>
                                        <button type="button" @click="destroy(post.slug, post.title)" class="btn btn-danger">
                                            Delete
                                        </button>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default{
    data(){
        return{
            posts: []
        }
    },
    methods: {
        async getPost(){
            const token = localStorage.getItem('authToken');
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;

            try {
                const res = await axios.get('http://127.0.0.1:8000/api/post')
                this.posts = res.data.data
            } catch (error) {
                
            }
        },
        async destroy(slug, title){
            const token = localStorage.getItem('authToken');
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;

            try {
                if(confirm(`Are you sure you want to delete ${title}? `)){
                    const res = await axios.delete(`http://127.0.0.1:8000/api/post/${slug}`)
                this.message = res.data.message
                this.success = true
                setTimeout(() => {
                    this.success  = false
                    this.message = ''
                }, 2500);
                    this.getPost()
                }
            } catch (error) {
                console.log(error);                
            }
        }
    },
    mounted(){
        this.getPost()
    }
}


</script>