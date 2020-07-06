<template>
    <div class="application-wrapper">
        <div class="header-wrapper">
            <Header class="header" />
        </div>
        <div class="main-wrapper">
            <slot />
        </div>
        <Footer/>
    </div>
</template>

<script>
import Header from '../components/Header'
import Footer from '../components/Footer'

export default {
    components: {
        Header,
        Footer
    }
}
</script>
<style lang="scss">
    @import '~@/_variables.scss';

    .application-wrapper{
        background-color:white;
    }

    .header-wrapper{
        width: 100%;

        .header{
            z-index: 999;
            width: 100%;
            // min-width: 1300px;
            position: fixed;
        }
    }

    .main-wrapper{
        width: 1300px;
        margin: 0 auto;
        background-color: white;
        padding-top: calc(70px + 53px);
    }

    @media screen and (max-width: $tablet){
        .main{
            padding-top: 70px;
        }
    }
</style>