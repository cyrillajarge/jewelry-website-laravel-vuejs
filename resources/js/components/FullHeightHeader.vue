<template>
    <div class="full-header-container">
        <img :src="image.url" :alt="image.name">
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

        img{
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }
</style>