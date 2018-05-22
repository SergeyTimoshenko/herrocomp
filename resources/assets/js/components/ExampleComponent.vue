<template>


    <div class="app hero-block">
        <h1>All Hero</h1>
        <div class="hero-block" v-for="hero in heroes">
            <img :src="hero.images" alt="1">
            <p>{{ hero.nickname }}</p>
            <a :href="'/heroes/' + hero.id">Open</a>
        </div>
    </div>
</template>

<script>
    export default {
        ei: '#app',

        data: function () {
            return {
                heroes: []
            }
        },
        methods: {
            getAllHero: function() {
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
