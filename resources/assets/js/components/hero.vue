<template>
    <div @click="conShow">{{ message }}</div>

</template>

<script>
    export default {
        ei: '#hero',
        data: function () {
            return {
                message: 'Yay!'
            }
        },
        methods: {
            conShow: function () {
                console.log(window.history)
            },
            getId: function () {

            }
        }
    }
</script>