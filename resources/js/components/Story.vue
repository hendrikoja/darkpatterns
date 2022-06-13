<script>
export default{
    props: {
        username: String,
    },

    methods: {
        submit(){
            this.$emit('nextstory')
        },
    },



}
</script>

<template>
    <div class="story">
        <div class="localisation">
            <p v-html="username" />
            <button class="edasi" @click="submit()">Järgmine küsimus or smth</button>
        </div>
    </div> 
</template>