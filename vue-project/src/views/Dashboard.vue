<template>
    <div class="container">
     <div class="row">
       <h1>Dashboard</h1>
       <p>Hello {{ this.name }}</p>
       <button type="button" @click="logout" class="btn btn-danger" >Logout</button>
       <br />
       <RouterLink :to="{ name: 'Category' }" class="btn btn-primary">Category</RouterLink>
     </div>
    </div>
   </template>
   
   <script>
import axios from 'axios'


export default {
    data(){
        return {
            name: ''
        }
    },
    async mounted(){
        const token = localStorage.getItem('authToken');
        axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;

        try {
            const res = await axios.get('http://127.0.0.1:8000/api/user')
            this.name = res.data.name
        } catch (error) {
            if(error.response){
                if(error.response.status == 401){
                this.$emit("update-sidebar")
                localStorage.removeItem('authToken')
                localStorage.setItem('tokenStatus', false)
                this.$router.push({name: 'Login'})
            }
            }else{
                console.log(error)
            }
          
        }
     
    },
    methods: {
        async logout(){
            try {             
            const res = await axios
            .post('http://127.0.0.1:8000/api/logout')
            localStorage.removeItem('authToken')
            localStorage.setItem('tokenStatus', false)
            this.$router.push({ name: 'Login' })
            } catch (error) {
                console.log(error);
            }
        }
    }
}

   </script>