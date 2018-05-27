<template>
    <div class="app hero-block">
        <h1>All Hero</h1>
        <router-link to="/add">Add new Hero</router-link>
        <div class="hero-block" v-for="hero in heroes" :key="hero.id">
            <img :src="hero.images" alt="1">
            <p>{{ hero.nickname }}</p>
            <router-link :to="{ name: 'hero', params:  {id: hero.id} }">Read more</router-link>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                heroes: []
            }
        },
        methods: {
            getAllHero() {
                axios.get('/api/heroes').then((response) => {
                    this.heroes = response.data;
                    console.log(this.heroes);
                }, (error)=> {
                    console.log(error);
                })
            }
        },
        created: function () {
            this.getAllHero();
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
    }
    img {
        height: 150px;
        width: 270px;
    }
</style>
    
