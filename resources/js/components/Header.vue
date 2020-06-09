<template>
    <div class="header">
        <div class="header-menu">
            <div class="hamburger" @click="showMobile">
                <i class="fas fa-bars"></i>
            </div>
            <div class="left-header-menu">
                <router-link class="header-pin" to="/contact">
                    <i class="fas fa-map-marker-alt"></i>
                </router-link>
                <div class="header-search-bar">
                    <input class="search-bar" type="text" placeholder="Rechercher">
                    <i id="search-icon" class="fas fa-search"></i>
                </div>
            </div>
            <router-link class="header-title" to="/">
                <h1>Veef.C</h1>
            </router-link>
            <div class="right-header-menu">
                <router-link class="header-account" to="/account">
                    <i class="fas fa-user"></i>
                    <div id="header-account-name">Mon compte</div>
                </router-link>
                <router-link id="header-basket" to="/basket">
                    <i class="fas fa-shopping-basket"></i>
                </router-link>
                <div class="language-picker">
                    <button @click.stop="show" class="language-picker-button">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; width:20px" xml:space="preserve">
                        <circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"/>
                        <path style="fill:#D80027;" d="M512,256c0-110.071-69.472-203.906-166.957-240.077v480.155C442.528,459.906,512,366.071,512,256z"/>
                        <path style="fill:#0052B4;" d="M0,256c0,110.071,69.473,203.906,166.957,240.077V15.923C69.473,52.094,0,145.929,0,256z"/>
                        </svg>
                    </button>
                    <div id="language-picker-dropdown" v-if="showPicker" v-click-outside="hide">
                        <svg class="language-picker-item" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"/>
                        <path style="fill:#D80027;" d="M512,256c0-110.071-69.472-203.906-166.957-240.077v480.155C442.528,459.906,512,366.071,512,256z"/>
                        <path style="fill:#0052B4;" d="M0,256c0,110.071,69.473,203.906,166.957,240.077V15.923C69.473,52.094,0,145.929,0,256z"/>
                        </svg>
                        <svg class="language-picker-item" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"/>
                        <g>
                            <path style="fill:#D80027;" d="M244.87,256H512c0-23.106-3.08-45.49-8.819-66.783H244.87V256z"/>
                            <path style="fill:#D80027;" d="M244.87,122.435h229.556c-15.671-25.572-35.708-48.175-59.07-66.783H244.87V122.435z"/>
                            <path style="fill:#D80027;" d="M256,512c60.249,0,115.626-20.824,159.356-55.652H96.644C140.374,491.176,195.751,512,256,512z"/>
                            <path style="fill:#D80027;" d="M37.574,389.565h436.852c12.581-20.529,22.338-42.969,28.755-66.783H8.819
                                C15.236,346.596,24.993,369.036,37.574,389.565z"/>
                        </g>
                        <path style="fill:#0052B4;" d="M118.584,39.978h23.329l-21.7,15.765l8.289,25.509l-21.699-15.765L85.104,81.252l7.16-22.037
                            C73.158,75.13,56.412,93.776,42.612,114.552h7.475l-13.813,10.035c-2.152,3.59-4.216,7.237-6.194,10.938l6.596,20.301l-12.306-8.941
                            c-3.059,6.481-5.857,13.108-8.372,19.873l7.267,22.368h26.822l-21.7,15.765l8.289,25.509l-21.699-15.765l-12.998,9.444
                            C0.678,234.537,0,245.189,0,256h256c0-141.384,0-158.052,0-256C205.428,0,158.285,14.67,118.584,39.978z M128.502,230.4
                            l-21.699-15.765L85.104,230.4l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822l-21.7,15.765L128.502,230.4z
                            M120.213,130.317l8.289,25.509l-21.699-15.765l-21.699,15.765l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822
                            L120.213,130.317z M220.328,230.4l-21.699-15.765L176.93,230.4l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822
                            l-21.7,15.765L220.328,230.4z M212.039,130.317l8.289,25.509l-21.699-15.765l-21.699,15.765l8.289-25.509l-21.7-15.765h26.822
                            l8.288-25.509l8.288,25.509h26.822L212.039,130.317z M212.039,55.743l8.289,25.509l-21.699-15.765L176.93,81.252l8.289-25.509
                            l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822L212.039,55.743z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <nav class="nav-container" id="nav">
            <ul>
                <li @click="showMobile"><router-link to="/house">La Maison</router-link></li>
                <li class="sub-menu"><a @click="showJ" v-click-outside="hideJ">Joaillerie</a>
                    <ul v-show="showJoaillerie" id="joaillerie">
                        <li @click="showMobile"><router-link to="/joaillerie/bijouterie">Bijouterie</router-link></li>
                        <li @click="showMobile"><router-link to="/joaillerie/alliances">Alliances</router-link></li>
                        <li @click="showMobile"><router-link to="/joaillerie/haute-joaillerie">Haute Joaillerie</router-link></li>
                    </ul>
                </li>
                <li class="sub-menu"><a @click="showG" v-click-outside="hideG">Grillz</a>
                    <ul v-show="showGrillz" id="grillz">
                        <li @click="showMobile"><router-link to="/grillz/about">Découvrir</router-link></li>
                        <li @click="showMobile"><router-link to="/grillz/creations">Création</router-link></li>
                    </ul>
                </li>
                <li @click="showMobile"><router-link to="/piercing">Piercing</router-link></li>
                <li class="sub-menu"><a @click="showS" v-click-outside="hideS">Services</a>
                    <ul v-show="showServices" id="services">
                        <li @click="showMobile"><router-link to="/services/transformation">Transformation</router-link></li>
                        <li @click="showMobile"><router-link to="/services/reparation">Réparation</router-link></li>
                        <li @click="showMobile"><router-link to="/services/gravure">Gravure</router-link></li>
                        <li @click="showMobile"><router-link to="/services/entretien">Entretien</router-link></li>
                    </ul>
                </li>
                <li @click="showMobile"><router-link to="/contact">Contact</router-link></li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
    data: () => {
        return {
            isMobile: false,
            showPicker: false,
            showJoaillerie: false,
            showGrillz: false,
            showServices: false,
            showMobileMenu: false
        }
    },
    methods:{
        show: function(){
            (this.showPicker)? this.showPicker = false: this.showPicker = true;
        },
        showMobile: function(){
            console.log("Show Mobile")
            var el = document.getElementById("nav")
            el.classList.toggle("active")
            if(this.isMobile)
                document.body.classList.toggle("fixedPosition")
        },
        hide: function(){
            this.showPicker = false
        },
        showJ: function(){
            var el = document.getElementById("joaillerie")
            el.classList.toggle("popside")
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
        },
        resizeSubMenu: function(){
            console.log(this.isMobile)
            const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
            if(vw < 1000){
                this.isMobile = true;
            }
            else{
                this.isMobile = false;
            }

            var elementJ = document.getElementById("joaillerie");
            var topPosJ = elementJ.parentElement.getBoundingClientRect().top + window.scrollY;
            var leftPosJ = elementJ.parentElement.getBoundingClientRect().left + window.scrollX;
            elementJ.style.transform = "translateX(-"+leftPosJ+"px)"

            var elementG = document.getElementById("grillz");
            var topPosG = elementG.parentElement.getBoundingClientRect().top + window.scrollY;
            var leftPosG = elementG.parentElement.getBoundingClientRect().left + window.scrollX;
            elementG.style.transform = "translateX(-"+leftPosG+"px)"

            var elementS = document.getElementById("services");
            var topPosS = elementS.parentElement.getBoundingClientRect().top + window.scrollY;
            var leftPosS = elementS.parentElement.getBoundingClientRect().left + window.scrollX;
            elementS.style.transform = "translateX(-"+leftPosS+"px)"
        }
    },
    mounted: function(){
        this.resizeSubMenu()
        window.addEventListener('resize', this.resizeSubMenu);
    },
    beforeDestroy: function(){
        window.removeEventListener('resize', this.resizeSubMenu)
    }
}
</script>

<style lang="scss">
    .fixedPosition
    {
        overflow: hidden;
    }
</style>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    .language-picker{
        margin-left: 10px;
        position: relative;

        .language-picker-button, .language-picker-button:focus, .language-picker-button:active{
            border: none;
            outline: none;
            background: none;
        }

        .language-picker-button{
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            padding: 5px 5px;
            
            &:hover{
                background-color: black;
            }
        }

        #language-picker-dropdown{
            position: absolute;
            margin-top: 5px;
            width: 100%;
            height: 60px;
            background-color: black;
            border-radius: 10px;
            z-index: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;

            .language-picker-item{
                width: 20px;
            }
        }
    }



    a{
        text-decoration: none;
        color: black;

        &:hover{
            text-decoration: none;
            color: black;
        }
    }

    .header-account{
        display: flex;
        flex-direction: row;
        align-items: center;
        border-radius: 10px;
        padding: 5px 10px;

        &:hover{
            background-color: black;
            color: white;
        }

        #header-account-name{
            margin-left: 10px;
        }

    }

    .header-menu{
        background-color: white;
        height: 70px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;

        .header-title{
            cursor: pointer;
        }

        .hamburger{
            display: none;
        }

        h1{
            text-transform: uppercase;
            margin-bottom: 0;
        }
    }

    .left-header-menu{
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-left: 20px;
        width: 20%;
        justify-content: flex-start;

        .header-pin{
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 100px;
            padding: 5px;

            &:hover{
                background-color: black;
                color: white;
            }
        }

        .header-search-bar{
            position: relative;
            width: 100px;
            margin-left: 15px;

            .search-bar{
                border-radius: 20px;
                border: 1px solid;
                border-color: #ccc;
                padding-left: 25px;
            
                &:hover, &:focus{
                    border-color: black;
                }
            }

            #search-icon{
                position: absolute;
                top: 7px;
                left: 7px;
            }
        }
    }

    .right-header-menu{
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-right: 10px;
        width: 20%;
        justify-content: flex-end;

        #header-basket{
            margin-left: 20px;
            padding: 0px 5px;
            border-radius: 50px;

            &:hover{
                background-color: black;
                color: white;
            }
        }
    }

    .nav-container{
        display: flex;
        position: relative;
        top: 0;
        left: 0;
        background-color: white;
        width: 100%;
        box-sizing: border-box;


        ul{
            display: flex;
            justify-content: space-evenly;
            width: 100%;
            margin: 0;
            padding: 0;

            li{
                position: relative;
                list-style: none;

                ul{
                    border-top: 1px solid grey;
                    position: absolute;
                    width: 100vw;
                    display: flex;
                    background-color: white;
                    transition: 0.5s;
                    border-bottom: 1px solid black;
                }
                
                a{
                    color: black;
                    height: 50px;
                    font-weight: 400;
                    line-height: 50px;
                    text-decoration: none;
                    text-transform: uppercase;
                    cursor: pointer;

                    &::after {    
                        background: none repeat scroll 0 0 transparent;
                        bottom: 10px;
                        content: "";
                        display: block;
                        height: 3px;
                        left: 50%;
                        position: relative;
                        background: black;
                        transition: width 0.3s ease 0s, left 0.3s ease 0s;
                        width: 0;
                    }

                    &:hover::after { 
                        width: 100%; 
                        left: 0; 
                    }
                }
            }
        }
    }


    @media screen and (max-width: $tablet){
        .nav-container{
            position: absolute;
            width: 100%;
            height: 100%;
            top: 70px;
            left: -100%;
            transition: 0.5s;


            ul{
                display: block;
                text-align: center;

                li{
                    display: flex;
                    flex-wrap: wrap;
                    width: 100%;
                    justify-content: center;
                    align-items: center;
                    
                    a{
                        display: block;
                        width: 100%;
                        height: 100%;
                        background-color: white;
                        color: black;
                        
                        &:hover{
                            color: white;
                            background-color: black;
                        }
                    }
                    
                    ul{
                        position: relative;
                        display: block;

                        li{
                            a{
                                background-color: white;
                                color: black;
                            }
                        }
                    }
                }
            }
        }

        .nav-container.active{
            left: 0;
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
            border-bottom: 1px solid black;
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

    @keyframes menutransfoin {
    0%   {transform: translateX(-100vw);}
    100% {transform: translateX(0);}
    }

    @keyframes menutransfoout {
    
    }

    @media screen and (max-width: $tablet){
        .nav-container{
            position: fixed;
            width: 100%;
            height: 100vh;
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


    @media screen and (max-width: $tablet) {
         .header-menu{
             justify-content: space-between;

             .hamburger{
                display: flex;
                margin-left: 10px;
                width: 20%;
                justify-content: flex-start;

                i{
                    font-size: 24px;
                }

                &:hover{
                    cursor: pointer;
                }
            }
             .left-header-menu{
                display: none;
             }

             .right-header-menu{
                .header-account{


                    #header-account-name{
                        display: none;
                    }
                }

                #header-basket{
                    margin-left: 0px;
                }

                .language-picker{
                    margin-left: 0px;
                }
             }
         }   
    }
</style>