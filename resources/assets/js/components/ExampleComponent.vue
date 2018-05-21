<template>
    <div class="app">
        <h1>{{ title }}</h1>
        <div v-for="hero in heroes">
            <img :src="hero.images" alt="1">
            <p>{{ hero.nickname }}</p>
            <a :href="hero.id">Open</a>
        </div>
    </div>
</template>

<script>
    export default {
        ei: '#app',

        data: function () {
            return {
                title: 'Title',
                heroes: []
            }
        },
        methods: {
            getAllHero: function() {
                axios.get('/api/heroes').then((response) => {
                    console.log(response);
                    this.heroes = response.data;
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