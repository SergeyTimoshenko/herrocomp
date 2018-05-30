
<template>

    <div>
        <img class="img" :src="hero.images" alt="1">
        <div class="wrap-desc">
            <h1>Name: {{ hero.nickname }}</h1>
            <p>Real Name: {{ hero.real_name }}</p>
            <p>Superpowers: {{ hero.superpowers }}</p>
            <p>Description: {{ hero.origin_description }}</p>
        </div>
        <div class="control">
            <button class="btn-del" @click="deleteHero(hero.id)" onclick="return false">Delete</button>
            <router-link class="btn-blue" :to="{ name: 'edit', params:  {id: hero.id} }">Edit</router-link>
            <router-link class="btn-blue" :to="{ name: 'all'}">Back to all</router-link>
        </div>
    </div>


</template>

<script>
import Api from '../services/api-service';
// import VueRouter from 'vue-router';
// const rout = new VueRouter({path: '/', name:'all', component: require('./ExampleComponent.vue')})
    export default {
        data: () => {
            return {
                hero: {}
            }
        },
        methods: {
            showHero: function (id) {
                Api.call('get', `/api/heroes/${id}`).then((res,rej) => {
                    this.hero = res.data;
                }, rej => {
                    console.log(rej)
                })
            },
            deleteHero: function(id) {
                
                axios.delete('/api/heroes/' + this.$route.params.id).then((res, rej) =>{
                    this.$router.go(-1)
                }, rej => {
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
        display: block;
        float: left;
        border-radius: 10px;
    }
    div {
        margin: 0 auto;
    }
    body {
        text-align: center;
    }
    .btn-blue {
        padding: 10px;
        border: solid 1px black;
        display: inline-block;
        border-radius: 5px;
        text-decoration: none;
        color: black;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: azure;
        background-color: cornflowerblue;
        margin-left: 5px;
    }
    .btn-del {
        border-radius: 3px;
        padding: 5px;
    }
    .wrap-desc {
        float: left;
        width: 50%;
        text-align: left;
        padding-left: 50px;
    }
    .control {
        clear: both;
        text-align: left;
        padding-top: 30px;
    }
</style>