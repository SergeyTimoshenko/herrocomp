<template>

    <div>
        <div @click="conShow">{{ message }}</div>
        <img :src="hero.images" alt="1">
        <div>Name: {{ hero.nickname }}</div>
        <div>Real Name: {{ hero.real_name }}</div>
        <div>Superpowers: {{ hero.superpowers }}</div>
        <div>Description: {{ hero.origin_description }}</div>
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