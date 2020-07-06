<template>
    <div class="full-header-container">
        <img :src="image.url" :alt="image.name">
        <div class="overlay"></div>
    </div>
</template>

<script>
export default {
    props: ['image']
}
</script>

<style lang="scss" scoped>
    .full-header-container{
        height: 100%;
        width: 100%;
        position: relative;

        img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .overlay{
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            background: rgb(2,0,36);
            background: linear-gradient(180deg, rgba(2,0,36,0) 0%, rgba(0,0,0,1) 80%);
        }
    }
</style>