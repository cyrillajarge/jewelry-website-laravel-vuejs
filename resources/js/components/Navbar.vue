<template>
    <div>
        <div class="nav-container">
            <router-link class="nav-item" to="/contact">Contact</router-link>
            <div class="nav-pop-side">
                <button @click="showJ" v-click-outside="hideJ" class="dropbtn">Joaillerie</button>
            </div>
            <div class="nav-pop-side">
                <button @click="showG" v-click-outside="hideG" class="dropbtn">Grillz</button>
            </div>
            <div class="nav-pop-side">
                <button @click="showS" v-click-outside="hideS" class="dropbtn">Services</button>
            </div>
            <router-link class="nav-item" to="/house">La maison</router-link>
        </div>
        <div class="submenu-container">
            <div id="sub-joaillerie" v-if="showJoaillerie" class="submenu-content">
                <router-link class="submenu-item" to="joaillerie/bijouterie">Bijouterie</router-link>
                <router-link class="submenu-item" to="joaillerie/alliances">Alliances</router-link>
                <router-link class="submenu-item" to="joaillerie/haute-joaillerie">Haute Joaillerie</router-link>
            </div>
            <div id="sub-grillz" v-if="showGrillz" class="submenu-content">
                <router-link class="submenu-item" to="grillz/about">Décrouvrir</router-link>
                <router-link class="submenu-item" to="grillz/creations">Création</router-link>
            </div>
            <div id="sub-services" v-if="showServices" class="submenu-content">
                <router-link class="submenu-item" to="/services/piercing">Piercing</router-link>
                <router-link class="submenu-item" to="/services/transformation">Transformation</router-link>
                <router-link class="submenu-item" to="/services/reparation">Réparation</router-link>
                <router-link class="submenu-item" to="/services/gravure">Gravure</router-link>
                <router-link class="submenu-item" to="/services/entretien">Entretien</router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: () => {
        return {
            showJoaillerie: false,
            showGrillz: false,
            showServices: false,
        }
    },
    methods:{
        showJ: function(){
            if(!this.showJoaillerie){
                this.showJoaillerie = true
                this.showGrillz = false
                this.showServices = false
            }
            else{
                this.showJoaillerie = false
            }
        },
        showG: function(){
            if(!this.showGrillz){
                this.showJoaillerie = false
                this.showGrillz = true
                this.showServices = false
            }
            else{
                this.showGrillz = false
            }
        },
        showS: function(){
            if(!this.showServices){
                this.showJoaillerie = false
                this.showGrillz = false
                this.showServices = true
            }
            else{
                this.showServices = false
            }
        },
        hideJ: function(){
            this.showJoaillerie = false
        },
        hideG: function(){
            this.showGrillz = false
        },
        hideS: function(){
            this.showServices = false
        }
    }
}
</script>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    .nav-container{
        display: flex;
        background-color: #fff;
        height: 50px;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;

        .nav-item{
            text-decoration: none;
            text-transform: uppercase;
            color: black;
            border-radius: 10px;
            padding: 5px 10px;

            &:hover{
                text-decoration: none;
                color: white;
                background-color: black;
            }
        }

        .nav-pop-side{
            position: relative;
            display: inline-block;

            button{
                border: none;
                outline: none;
                background: none;
                background-color: rgba(255,255,255,0);
                text-decoration: none;
                text-transform: uppercase;
                color: black;
                border-radius: 10px;
                padding: 5px 10px;

                &:hover{
                    text-decoration: none;
                    color: white;
                    background-color: black;
                }
            }
        }
    }

    @keyframes in {
    0%   {transform: translateX(100vw);}
    100% {transform: translateX(0);}
    }


    .submenu-container{
        position: relative;
        width: 100%;
        height: 100%;

        .submenu-content{
            display: flex;
            height: 50px;
            border-top: 1px solid black;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            background-color:white;
            overflow: auto;
            z-index: 1;

            animation-name: in;
            animation-duration: 1s;


            .submenu-item{

                text-decoration: none;
                color: black;
                border-radius: 10px;
                padding: 5px 10px;

                &:hover{
                    text-decoration: none;
                    color:white;
                    background-color: black;
                }
            }
        }
    }

    @media screen and (max-width: $tablet){
        .nav-container{
            flex-direction: column;
            width: 100%;
            height: 90vh;
            font-size: 18px;

            .nav-pop-side{
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;

                button{
                    width: 100%;
                    height: 100%;
                }
                &:hover{
                    background-color: black;
                    color: white;
                }
            }

            .nav-item{
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
                border-radius: 0px;

                &:hover{
                    background-color: black;
                    color: white;
                }
            }
        }
    }
</style>