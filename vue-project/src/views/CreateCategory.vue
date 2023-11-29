<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Category 

                            <RouterLink class="btn btn-primary  float-right" :to="{name: 'Category'}"> Back</RouterLink>

                        </h4>
                    </div>
                    <div class="card-body">
                        <Error :errors="errors" />
                        <div class="alert alert-success" v-if="success">
                            <p>Successfully Created</p>
                        </div>
                      <form action="">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" v-model="model.fields.name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="button" @click="createCategory" class="btn btn-primary">
                                Add Category
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
            success: false,
            errors: '',
            model: {
               fields: {
                    name: ''
                }
            }
        }
    },
    methods: {
        async createCategory(){
            const token = localStorage.getItem('authToken');
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
            try {
                const res = await axios.post('http://127.0.0.1:8000/api/category', this.model.fields)
                // this.$router.push({ name: 'Category'})
               this.model.fields = {
                name : ''
               }
               this.errors = ''
                this.success = true    
                  
            } catch (error) {
                if(error.response){
                    if(error.response.status = 422){
                        this.errors  = error.response.data.errors
                    }
                }else{
                    console.log(error)
                }

            }
        }
    },
    components:{ 
        Error
    }
}

</script>