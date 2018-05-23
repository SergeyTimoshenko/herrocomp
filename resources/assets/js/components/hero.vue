<template>
    <div @click="conShow">{{ message }}</div>



</template>

<script>
    export default {
        ei: '#hero',
        data: function () {
            return {
                message: 'Yay!',
                hero: []
            }
        },
        methods: {
            conShow: function () {
                console.log(this.$route.params.id)
            },
            showHero: function (id) {
                axios.get('/api/heroes/' + id).then((response)=> {
                    console.log(response.data)
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