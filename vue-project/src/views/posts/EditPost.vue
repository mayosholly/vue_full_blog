<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Create Post
                            <RouterLink to="" class="btn btn-primary float-right">Back</RouterLink>
                        </h4>
                    </div>
                    <div class="card-body">
                        <Error :errors="errors" />
                        <div class="alert alert-success" v-if="success">
                            <p>{{ this.message }}</p>
                        </div>
                        <form action="">
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" v-model="model.fields.title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="image">Image</label>
                                <input @input="grabFile" type="file" class="form-control">
                            </div>
                            <div class="mb-3">
                                <img :src="url" alt="" height="100" width="100" />
                            </div>

                            <div class="mb-3">
                                <label for="title">Choose a Category</label>
                                <select v-model="model.fields.category_id" class="form-control">
                                    <option  disabled value="">Select Option</option>
                                    <option :value="category.id" v-for="(category, index) in categories" :key="index">
                                        {{ category.name }}
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="body">Body</label>
                                <textarea v-model="model.fields.body" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="button" @click="updatePost" class="btn btn-primary">Update Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import Error from '../../components/Error.vue'
export default{
    data(){
        return{
            model: {
                fields: {
                    title: '',
                    category_id: '',
                    body: '',
                    file: ''
                }
            },
            file: '',
            url: '',
            categories: [],
            errors: '',
            success: false,
            message: ''
        }
    },
    methods: {
        grabFile(e){
            const file = e.target.files[0]
            this.model.fields.file = file
            this.url = URL.createObjectURL(file)
            URL.revokeObjectURL(file)
        },
        async updatePost(){
            const token = localStorage.getItem('authToken');
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
            try {
                const fd = new FormData();
                fd.append('title', this.model.fields.title)
                fd.append('category_id', this.model.fields.category_id)
                if(this.model.fields.file){
                    fd.append('file', this.model.fields.file)
                }
                fd.append('body', this.model.fields.body)
                fd.append('_method', 'PUT')
                const res = await axios.post(`http://127.0.0.1:8000/api/post/${this.$route.params.slug}`, fd, 
                {
                    headers: {'content-type': "multipart/form-data"},
                })
                this.message = res.data.message
                this.success = true
                this.errors= ""
                setTimeout(() => {
                    this.success  = false
                    this.message = ''
                }, 2500);
            } catch (error) {
                if(error.response){
                    if(error.response.status == 422){
                    this.errors = error.response.data.errors
                }
                }else{
                    console.log(error)
                }
               
            }
        }
    },
    async mounted(){
        const token = localStorage.getItem('authToken');
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
        try {
            const res = await axios.get(`http://127.0.0.1:8000/api/post/${this.$route.params.slug}`)
            const resCat = await axios.get('http://127.0.0.1:8000/api/category')
            this.categories = resCat.data.data
            this.model.fields = res.data.data
            this.url = `http://127.0.0.1:8000/${res.data.data.imagePath}`
        } catch (error) {
            console.log(error)
        }
    },
    components: {
        Error
    }
}

</script>