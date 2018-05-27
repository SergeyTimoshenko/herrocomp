
<template>

    <div>
        <div @click="conShow">{{ message }}</div>
        <img class="img" :src="hero.images" alt="1">
        <h1>Name: {{ hero.nickname }}</h1>
        <p>Real Name: {{ hero.real_name }}</p>
        <p>Superpowers: {{ hero.superpowers }}</p>
        <p>Description: {{ hero.origin_description }}</p>
        <button @click="deleteHero(hero.id)" onclick="return false">Delete</button>
         <router-link :to="{ name: 'edit', params:  {id: hero.id} }">Edit</router-link>
         <router-link :to="{ name: 'all'}">Back to all</router-link>
    </div>


</template>

<script>
import Api from '../services/api-service';
// import VueRouter from 'vue-router';
// const rout = new VueRouter({path: '/', name:'all', component: require('./ExampleComponent.vue')})
    export default {
        ei: '#hero',
        data: function () {
            return {
                message: 'Yay!',
                hero: {}
            }
        },
        methods: {
            conShow: function () {
                console.log(this.$route.params.id)
            },
            showHero: function (id) {
                Api.call('get', `/api/heroes/${id}`).then((res,rej) => {
                    this.hero = res.data;
                }, rej => {
                    console.log(rej)
                })
            },
            deleteHero: function(id) {
                console.log(id, this.$route.params.id);
                axios.delete('/api/heroes/' + this.$route.params.id).then((response) =>{
                    console.log(id)
                    
                    this.$router.go(-1)
                }, (err) => {
                    console.log(err)
                })
            }
        },
        created: function () {
            this.showHero(this.$route.params.id)
        }
    }
</script>
<style>
    .img {
        height: auto;
        width: 500px;
        text-align: center;
    }
    div {
        margin: 0 auto;
    }
    body {
        text-align: center;
    }
</style>