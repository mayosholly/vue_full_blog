<template>
  <ul class="alert alert-warning" v-if="Object.keys(this.errors).length > 0">
                <li v-for="(error, index) in errors" :key="index">
                    {{ error[0] }}
                </li>
    </ul>
</template>

<script>
export default{
    props: ['errors']
}

</script>