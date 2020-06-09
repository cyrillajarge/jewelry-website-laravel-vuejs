<template>
    <div class="application">
        <div class="header">
            <Header />
        </div>
        <div class="main">
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

    .application{
        background-color:white;
    }

    .header{
        width: 100%;
        position: fixed;
        z-index: 999;
    }

    .main{
        background-color: black;
        padding-top: calc(70px + 53px);
    }

    @media screen and (max-width: $tablet){
        .main{
            padding-top: 70px;
        }
    }
</style>