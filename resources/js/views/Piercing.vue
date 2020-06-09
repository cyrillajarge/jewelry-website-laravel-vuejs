<template>
    <div>
        <div class="full-header-section">
            <FullHeightHeader :image="image"/>
            <div class="full-header-content">
                <h1>{{title}}</h1>
                <p><span v-html="content"></span></p>
            </div>
            <JumpingArrow class="jumping-arrow"/>
        </div>
        <div class="piercing-cards-section">
            <div class="card-piercing">
                <div class="card-image-container">
                    <img src="/img/premieres-boucles.jpg" alt="Premières Boucles">
                    <div class="overlay"></div>
                </div>
                <div class="card-content-container">
                    <h1>Mes premières boucles d'oreilles</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget maximus nisi. </p>
                    <router-link class="base-btn-light" to="/mes-premieres-boucles-oreilles">Découvrir</router-link>
                </div>
            </div>
            <div class="card-piercing">
                <div class="card-image-container">
                    <img src="/img/piercing.jpg" alt="Piercing">
                    <div class="overlay"></div>
                </div>
                <div class="card-content-container">
                    <h1>Piercing</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget maximus nisi.</p>
                    <router-link class="base-btn-light" to="">Découvrir</router-link>
                </div>
            </div>
        </div>
        <div class="realisations-section">
            <h1>Ils nous font confiance pour leurs piercings</h1>
            <div class="realisations-profiles-container">
                <a class="profile" href="https://instagram.com">
                    <div class="image-container">
                        <img src="/img/profile.jpg" alt="">
                        <div class="profile-overlay"></div>
                    </div>
                    <p>@lorempisum</p>
                </a>
                <a class="profile" href="https://instagram.com">
                    <div class="image-container">
                        <img src="/img/profile.jpg" alt="">
                        <div class="profile-overlay"></div>
                    </div>
                    <p>@lorempisum</p>
                </a>
                <a class="profile" href="https://instagram.com">
                    <div class="image-container">
                        <img src="/img/profile.jpg" alt="">
                        <div class="profile-overlay"></div>
                    </div>
                    <p>@lorempisum</p>
                </a>
                <a class="profile" href="https://instagram.com">
                    <div class="image-container">
                        <img src="/img/profile.jpg" alt="">
                        <div class="profile-overlay"></div>
                    </div>
                    <p>@lorempisum</p>
                </a>
                <a class="profile" href="https://instagram.com">
                    <div class="image-container">
                        <img src="/img/profile.jpg" alt="">
                        <div class="profile-overlay"></div>
                    </div>
                    <p>@lorempisum</p>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import JumpingArrow from '../components/JumpingArrow'
import FullHeightHeader from '../components/FullHeightHeader'

export default {
    components: {
        FullHeightHeader,
        JumpingArrow
    },
    data () {
        return {
            'title': "Perçage d'oreilles",
            'content': "Le sur mesure se poursuite également dans le perçage des oreilles.<br>Vous êtes libre de choisir ce qui vous correspond.",
            'image': {
                "name": "Piercing",
                "url": "/img/piercing.jpg"
            }
        }
    }
}
</script>

<style lang="scss" scoped>
    @import '~@/_variables.scss';

    h1,p{
        color: white
    }

    a{
        text-decoration: none;
    }

    // @keyframes animateLinkRelease {
    //     0%{
    //         transform: translateX(0);
    //     }
    //     99.999%{
    //         transform: translateX(105%);
    //     }
    //     100%{
    //         transform: translateX(-105%);
    //     }
    // }

    // @keyframes animateLink {
    //     0%{
    //         transform: translateX(-105%);
    //     }
    //     100%{
    //         transform: translateX(0);
    //     }
    // }

    // .discover-btn{
    //     position: relative;
    //     text-decoration: none;
    //     color: white;
    //     text-transform: uppercase;
    //     font-weight: 600;
    //     align-self: center;
    //     overflow: hidden;

    //     &::before{
    //         position: absolute;
    //         left: 0;
    //         bottom: 0;
    //         content: "";
    //         height: 2px;
    //         width: 100%;
    //         background: #868686;
    //         transition: transform .375s ease-in-out, width .5s ease-in-out;
    //     }

    //     &::after{
    //         position: absolute;
    //         left: 0;
    //         bottom: 0;
    //         content: "";
    //         height: 2px;
    //         background: white;
    //         width: 100%;
    //         transition: transform .375s ease-in-out, width .5s ease-in-out;
    //         animation: animateLinkRelease .375s ease-in-out forwards running;
    //     }

    //     &:hover{
    //         &::after{
    //             width: 100%;
    //             animation: animateLink .375s ease-in-out forwards running;
    //         }
    //     }
    // }

    .full-header-section{
        position: relative;
        height: calc(100vh - 70px - 53px);

        
        .full-header-content{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);

            h1, p{
                text-align: center;
            }

            h1{
                font-size: calc(44px + (60 - 44) * ((100vw - 300px) / (1600 - 300)));
            }

            p{
                font-size: calc(14px + (20 - 14) * ((100vw - 300px) / (1600 - 300)));
            }
        }

        .jumping-arrow{
            position: absolute;
            bottom: 0;
            left: 50%;
        }
    }

    .piercing-cards-section{
        display: flex;
        height: 30em;

        .card-piercing{
            width: 50%;
            position: relative;

            .card-image-container{
                position: absolute;
                height: 100%;
                width: 100%;

                img{
                    height: 100%;
                    width: 100%;
                    object-fit: cover;
                }

                .overlay{
                    position: absolute;
                    top: 0;
                    left: 0;
                    height: 100%;
                    width: 100%;
                    background-color: black;
                    opacity: 0.2;
                    transition: opacity 0.5s ease-in-out;
                }
            }

            .card-content-container{
                position: absolute;
                top: 0;
                height: 100%;
                width: 50%;
                display: flex;
                flex-direction: column;
                text-align: center;
                justify-content: center;
                left: 50%;
                transform: translateX(-50%);
            }

            &:hover .overlay{
                opacity: 1;
                transition: opacity 0.5s ease-in-out;
            }
        }
    }

    .realisations-section{

        h1{
            text-align: center;
            margin: 2em 0;
        }

        .realisations-profiles-container{
            display: flex;
            justify-content: space-evenly;

            .profile{
                width: 15em;

                .image-container{
                    position: relative;;
                    height: 15em;
                    width: 100%;
                    border: 3px solid #2b2b2b00;
                    border-radius: 15em;
                    overflow: hidden;
                    transition: border 0.5s ease-in-out;
                    
                    img{
                        height: 100%;
                        width: 100%;
                        object-fit: cover;
                    }
                }

                p{
                    text-align: center;
                }

                &:hover{
                    .image-container{
                        border-color: white;
                        transition: border 0.5s ease-in-out;
                    }
                }
            }

        }
    }

    @media screen and(max-width: $tablet) {
        .full-header-section{
            height: calc(100vh - 70px);
        }
    }
</style>