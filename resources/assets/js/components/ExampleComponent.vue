<template>
    <div class="app hero-block">
        <h1>All Hero</h1>
        <router-link to="/add"><span>+</span>Add new Hero</router-link>
        <div class="hero-block" v-for="hero in heroes" :key="hero.id">
            <img :src="hero.images" alt="1">
            <p>{{ hero.nickname }}</p>
            <router-link :to="{ name: 'hero', params:  {id: hero.id} }">Read more</router-link>
        </div>
    </div>
</template>

<script>
    export default {
        data: () => {
            return {
                heroes: []
            }
        },
        methods: {
            getAllHero() {
                axios.get('/api/heroes').then((res, rej) => {
                    this.heroes = res.data;
                   // console.log(this.heroes);
                }, rej => {
                    console.log(error);
                })
            }
        },
        created: function () {
            this.getAllHero();
        },
        destroyed: () => { // Сомнительно  работает
           // console.log(this.heroes);
            this.heroes = [];
           // console.log(this.heroes);
           
        }
    }
</script>

<style>
    .hero-block {
            float: left;
            padding-left: 10px;
        }
    .hero-block:first-child {
        padding: 0px;
    }
    a {
        display: block;
        margin-bottom: 20px;
        text-decoration: none;
        color: rgb(67, 214, 165);

    }
    img {
        height: 150px;
        width: 270px;
    }
    span {
        color: green;
        font-size: 20px;

    }
</style>
    
