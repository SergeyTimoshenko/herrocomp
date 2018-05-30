<template>
    <div>
        <form action="">
            <label for="">Name</label>
            <input type="text" v-model="hero.nickname"><br>
            <label for="">Real name</label>
            <input type="text" v-model="hero.real_name"><br>
            <label for="">Superpower</label>
            <input type="text" v-model="hero.superpowers"><br>
            <label for="">Catch</label>
            <input type="text" v-model="hero.catch_phrase"><br>
            <label for="">Description</label>
            <input type="text" v-model="hero.origin_description"><br>
            <label for="">Image</label>
            <input type="text" v-model="hero.images"><img :src="hero.images" alt="1"><br>
            <button @click="sendEdit()" onclick="return false">Edit</button>
            <div v-if="seen">Loading...</div>
        </form>
    </div>
</template>

<script>
import Api from '../services/api-service';
export default {
    data: function () {
        return {
            id: this.$route.params.id,
            seen: false,
            hero: {}
        }
    },
    methods: {
        showHero(id) {
            Api.call('get', `/api/heroes/${id}`).then((res,rej) => {
                this.hero = res.data;
            }, rej => {
                console.log(rej)
            })
        },
        sendEdit() {
            this.seen = true
            axios.put(`/api/heroes/${this.id}`, this.hero).then((res, rej)=> {
                    this.seen = false;
                    this.$router.push({name: 'hero'})
                }, rej => {
                     console.log(rej);
                })
        }
    },
    created: function () {
            this.showHero(this.$route.params.id)
        }
}
</script>

<style>

</style>


 