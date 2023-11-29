<template>
    <div class="container">
     <div class="row">
       <div class="col-12">
       <div class="card">
           <div class="card-header">
               <h4>Register</h4>
           </div>
           <div class="card-body">
            <Error :errors="errors" />
               <form @submit.prevent="register">
                <div class="mb-3">
                       <label for="name">Name</label>
                           <input  type="text" class="form-control" v-model="model.fields.name" >
                          <span style="color: red;" v-if="this.errors.name">{{ this.errors.name[0] }}</span>  
                        </div>
                   <div class="mb-3">
                       <label for="email">Email</label>
                           <input  type="email"  class="form-control" v-model="model.fields.email" >
                           <span style="color: red;" v-if="this.errors.email">{{ this.errors.email[0] }}</span>  
                        </div>
                   <div class="mb-3">
                       <label for="password">Password</label>
                           <input type="password" v-model="model.fields.password" class="form-control">
                           <span style="color: red;" v-if="this.errors.password">{{ this.errors.password[0] }}</span>  
                        </div>
                   <div class="mb-3">
                       <label for="password_confirmation">Confirm Password</label>
                           <input type="password" v-model="model.fields.password_confirmation"  class="form-control">                   
                        </div>
                   <div class="mb-3">
                    <button type="submit"  class="btn btn-primary">
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
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: ''
                }
            }
        }
    }, 
    methods: {
        async register(){
            try {
                const res = await axios.post("http://127.0.0.1:8000/api/register", this.model.fields)
                console.log(res);
                this.$router.push({ name: 'Login'})
            } catch (error) {
                console.log(error)
                this.errors  = error.response.data.errors
            }
        }
    },
    components :{
        Error
    }
}


   </script>