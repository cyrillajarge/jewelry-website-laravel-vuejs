<template>
    <div class="title-container">
        <h1>{{title}}</h1>
        <span class="underline"></span>
    </div>
</template>

<script>
export default {
    props: ['title']
}
</script>

<style lang="scss" scoped>
    .title-container{
        align-self: flex-start;
        position: relative;
        
        .underline{
            position: absolute;
            bottom: 0;
            left: 0;
            height: 2px;
            width: calc(100% + 30px);
            background-color: black;
        }

        h1{
            margin: 0;
            text-transform: capitalize;
        }
    }
</style>