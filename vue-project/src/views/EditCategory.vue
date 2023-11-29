<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Category 

                            <RouterLink class="btn btn-primary  float-end" :to="{name: 'Category'}"> Back</RouterLink>

                        </h4>
                    </div>
                    <div class="card-body">
                        <Error :errors="errors" />
                      <form action="">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" v-model="model.fields.name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="button" @click="updateCategory" class="btn btn-primary">
                                Update Category
                            </button>
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
import Error from '../components/Error.vue';

export default{
    data(){
        return{
            errors: '',
            categoryId: '',
            model: {
               fields: {
                    name: ''
                }
            }
        }
    },
    methods: {
        async updateCategory(){
            const token = localStorage.getItem('authToken');
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
            try {
                const res = await axios.put(`http://127.0.0.1:8000/api/category/${this.categoryId}`, this.model.fields)
                this.$router.push({ name: 'Category'})                
            } catch (error) {
                if(error.response){
                    if(error.response.status = 422){
                        this.errors  = error.response.data.errors
                    }
                }else{
                    console.log(error)
                }

            }
        },
        async getCategory(categoryId){
            const token = localStorage.getItem('authToken');
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
        try {
          const res =  await axios.get(`http://127.0.0.1:8000/api/category/${categoryId}`)
          this.model.fields = res.data.data
        } catch (error) {
            console.log(error)
        }
        }
    },
    components:{ 
        Error
    }, 
    mounted(){
        this.categoryId = this.$route.params.id
        this.getCategory(this.categoryId)
    }
}

</script>