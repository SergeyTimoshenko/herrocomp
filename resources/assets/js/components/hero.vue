<template>

    <div>
        <div @click="conShow">{{ message }}</div>
        <img :src="hero.images" alt="1">
        <h1>Name: {{ hero.nickname }}</h1>
        <p>Real Name: {{ hero.real_name }}</p>
        <p>Superpowers: {{ hero.superpowers }}</p>
        <p>Description: {{ hero.origin_description }}</p>
    </div>


</template>

<script>
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
                axios.get('/api/heroes/' + id).then((response)=> {

                    this.hero = response.data;
                    console.log(this.hero.nickname)
                }, (error)=>{
                    console.log("ERROR: " + error)
                })
            }
        },
        created: function () {
            this.showHero(this.$route.params.id)
        }
    }
</script>
<style>
    img {
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