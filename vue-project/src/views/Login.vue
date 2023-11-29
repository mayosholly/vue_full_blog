<template>
 <div class="container">
  <div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4>Login Here</h4>
        </div>
        <div class="card-body">
            <Error :errors="errors" />
            <form @submit.prevent="login">
                <div class="mb-3">
                    <label for="">Email</label>
                        <input  class="form-control"  v-model="model.fields.email" type="text" >
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                        <input type="text"  class="form-control"  v-model="model.fields.password">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">
                        Submit
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
import Error from '../components/Error.vue'


export default {
    data(){
        return {
            errors: '',
            model: {
                fields: {
                    email: '',
                    password: '',
                }
            }
        }
    }, 
    methods: {
        async login(){
            try {
                const res = await axios.post("http://127.0.0.1:8000/api/login", this.model.fields)
                const token = res.data.token
                localStorage.setItem('authToken', token)
                localStorage.setItem('tokenStatus', true)
                this.$router.push({ name: 'Dashboard'})
                
            } catch (error) {
                if(error.response){
                if(error.response.status == 422) {
                    this.errors  = error.response.data.errors
                 }
                else if(error.response.status == 401) {
                    alert(error.response.data.message)
                }else{
                    console.log(error)
                }
            }else{
                console.log(error)
            }


            }
        }
    },
    components :{
        Error
    }
}
</script>