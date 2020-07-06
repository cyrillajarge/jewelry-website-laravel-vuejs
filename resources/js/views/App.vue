<template>
    <div id="app">
        <component :is="layout">
            <router-view />
        </component>
    </div>
</template>

<script>
const default_layout = "guest"

export default {
    computed:{
        layout(){
            return (this.$route.meta.layout || default_layout) + "-layout"
        }
    },
    created() {
        this.$store.dispatch('retrieveEvents')
        this.$store.dispatch('retrievePages')
        this.$store.dispatch('retrieveImages')
        this.$store.dispatch('retrieveCategories')
    }
}
</script>
<style lang="scss">
    #app{
        background-color: white;
    }

    @keyframes animateLinkRelease {
        0%{
            transform: translateX(0);
        }
        99.999%{
            transform: translateX(105%);
        }
        100%{
            transform: translateX(-105%);
        }
    }

    @keyframes animateLink {
        0%{
            transform: translateX(-105%);
        }
        100%{
            transform: translateX(0);
        }
    }

    .base-btn-light{
        position: relative;
        text-decoration: none;
        color: white;
        text-transform: uppercase;
        font-weight: 400;
        align-self: center;
        overflow: hidden;

        &::before{
            position: absolute;
            left: 0;
            bottom: 0;
            content: "";
            height: 2px;
            width: 100%;
            background: #868686;
            transition: transform .375s ease-in-out, width .5s ease-in-out;
        }

        &::after{
            position: absolute;
            left: 0;
            bottom: 0;
            content: "";
            height: 2px;
            background: white;
            width: 100%;
            transition: transform .375s ease-in-out, width .5s ease-in-out;
            animation: animateLinkRelease .375s ease-in-out forwards running;
        }

        &:hover{
            text-decoration: none;
            color: white;

            &::after{
                width: 100%;
                animation: animateLink .375s ease-in-out forwards running;
            }
        }
    }

    .base-btn-dark{
        position: relative;
        text-decoration: none;
        color: black;
        text-transform: uppercase;
        font-weight: 600;
        align-self: center;
        overflow: hidden;

        &::before{
            position: absolute;
            left: 0;
            bottom: 0;
            content: "";
            height: 2px;
            width: 100%;
            background: #d4d4d4;
            transition: transform .375s ease-in-out, width .5s ease-in-out;
        }

        &::after{
            position: absolute;
            left: 0;
            bottom: 0;
            content: "";
            height: 2px;
            background: black;
            width: 100%;
            transition: transform .375s ease-in-out, width .5s ease-in-out;
            animation: animateLinkRelease .375s ease-in-out forwards running;
        }

        &:hover{
            text-decoration: none;
            color: black;
            &::after{
                width: 100%;
                animation: animateLink .375s ease-in-out forwards running;
            }
        }
    }

    button:focus{
        outline:0 !important;
    }

    input:focus{
        outline:0 !important;
    }

    textarea:focus{
        outline:0 !important;
    }

    a:hover{
        text-decoration: none !important;
        font-style: none !important;
    }
</style>