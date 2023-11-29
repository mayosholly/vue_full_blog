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
                                <button type="button" @click="submitPost" class="btn btn-primary">Create Post</button>
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
            message: '',
            success: false
        }
    },
    methods: {
        grabFile(e){
            const file = e.target.files[0]
            this.model.fields.file = file
            this.url = URL.createObjectURL(file)
            URL.revokeObjectURL(file)
        },
        async submitPost(){
            const token = localStorage.getItem('authToken');
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
            try {
                const res = await axios.post("http://127.0.0.1:8000/api/post", this.model.fields, {
                    headers: {'content-type': "multipart/form-data"},
                })
                this.message = res.data.message
                this.success = true
                this.errors= ""
                this.model.fields = ""
                this.url = ""
                setTimeout(() => {
                    this.success  = false
                    this.message = ''
                }, 2500);
            } catch (error) {
                if(error.response.status == 422){
                    this.errors = error.response.data.errors
                }
            }
        }
    },
    async mounted(){
        const token = localStorage.getItem('authToken');
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
        try {
            const res = await axios.get('http://127.0.0.1:8000/api/category')
            this.categories = res.data.data
        } catch (error) {
            console.log(error)
        }
    },
    components: {
        Error
    }
}

</script>