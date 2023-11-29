<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Category 

                            <RouterLink  :to="{name: 'CreateCategory'}" class="btn btn-primary float-end"> Create Category</RouterLink>

                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success" v-if="success">
                            <p>Successfully Deleted</p>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr v-for="(category, index) in categories" :key="index">
                                <td>{{ index + 1 }}</td>
                                <td>{{ category.name }}</td>
                                <td>
                                    <RouterLink class="btn btn-primary"  :to="{ name: 'EditCategory', params:{id:category.id}  }">Edit</RouterLink>
                                    <button type="button" class="btn btn-danger" @click="deleteCategory(category.id)">Delete</button>
                                </td>
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
        return {
            success: false,
            categories: []
        }
    },
    async mounted(){
        this.getCategories()
    },
    methods: {
        async deleteCategory(id){
            var answer = confirm(`Are you sure you want to delete? `)
            if(answer){
                const token = localStorage.getItem('authToken');
                axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
                try {
                    const res = await axios.delete(`http://127.0.0.1:8000/api/category/${id}`)
                    this.success = true
                    this.getCategories()
                } catch (error) {
                    console.log(error);
                }
            }
        },
        async getCategories(){
        const token = localStorage.getItem('authToken');
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
        try {
            const res = await axios.get('http://127.0.0.1:8000/api/category')
            this.categories = res.data.data
        } catch (error) {
            console.log(error)
        }
        }
    }
}

</script>