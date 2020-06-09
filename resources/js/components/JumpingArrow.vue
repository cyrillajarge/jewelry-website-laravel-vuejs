<template>
    <div class="arrow">
        <i class="fas fa-chevron-down"></i>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
    .arrow{
        i{
            font-size: 24px;
            color: white;
            animation: arrow 0.5s ease infinite alternate;
        }
    }

    @keyframes arrow {
        0% {
            transform: translateY(0px);
        }
        100% {
            transform: translateY(-20px);
        }
    }
</style>