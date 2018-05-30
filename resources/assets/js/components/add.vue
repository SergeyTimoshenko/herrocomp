<template>
    <div>
        <form action="">
            <label for="">Name</label>
            <input type="text" v-model="hero.nickname"><p>{{ hero.nickname }}</p><br>
            <label for="">Real name</label>
            <input type="text" v-model="hero.realName"><p>{{ hero.realName }}</p><br>
            <label for="">Superpower</label>
            <input type="text" v-model="hero.superpower"><p>{{ hero.superpower }}</p><br>
            <label for="">Catch</label>
            <input type="text" v-model="hero.cath"><p>{{ hero.cath }}</p><br>
            <label for="">Description</label>
            <input type="text" v-model="hero.description"><p>{{ hero.description }}</p><br>
            <label for="">Image</label>
            <input type="text" v-model="hero.image"><img :src="hero.image" alt="1"><br>
            <button @click="addHero" onclick="return false">Create</button>
            <div v-if="seen">Loading...</div>
        </form>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                hero: {},
                seen: false
            }
        },
        methods: {
            addHero: function () {
                this.seen = true;
                axios.post('/api/heroes/send', this.hero).then((res, rej)=> {
                    //console.log(res);
                    this.seen = false;
                    this.$router.push({name: 'all'})
                }, rej => {
                    console.log(rej)                
                })
            }
        }
    }
</script>

<style>
    input {
        margin: 10px;
    }
    p{
        display: inline;
    }
</style>