<template>
    <div>
        <div v-for="user in users" :key="user.id">
            {{ user.name }}
       </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
              users: {},
            }
        },
        methods: {
            getUser(){
                axios.get('/users').then(response => (this.users = response.data.users))
            }
        },
        mounted() {
            this.getUser()
        }
    }
</script>
